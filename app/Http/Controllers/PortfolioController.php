<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\MultiImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{
    public function PortfolioAll()
    {

        $portfolioData = Portfolio::find(1);

        return view('admin.portfolio.portfolio_all', compact('portfolioData'));

    }

    public function PortfolioAdd()
    {
        $portfolioData = Portfolio::find(1);

        return view('admin.portfolio.portfolio_add', compact('portfolioData'));

    }

    public function PortfolioUpdate(Request $request)
    {

        $portfolio_id = $request->id;

        if($request->file('portfolio_image')) {

            $image = $request->file('portfolio_image');

            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(800, 400)->save('upload/portfolio/' . $name_gen);

            $save_url = 'upload/portfolio/'.$name_gen;

            Portfolio::findOrFail($portfolio_id)->update([

                'title' => $request->title,
                'short_text' => $request->short_text,
                'portfolio_image' => $save_url,
                'updated_at' => Carbon::now(),
    
            ]);
    
            $notification = [
                'message'    => "Portfolio Updated Successfully With Image",
                'alert-type' => 'success'
            ];
    
            return redirect()->route('portfolio.all')->with($notification);

        } else { // Without photo

            Portfolio::findOrFail($portfolio_id)->update([
                'title' => $request->title,
                'short_text' => $request->short_text,
                'updated_at' => Carbon::now(),
    
            ]);
    
            $notification = [
                'message'    => "Portfolio Updated Successfully Without Image",
                'alert-type' => 'success'
            ];
    
            return redirect()->route('portfolio.all')->with($notification);

        }
    }

    public function PortfolioMulti(){

        return view('admin.portfolio.multi_image');

    }

    public function PortfolioStoreMulti(Request $request){

        $image = $request->file('portfolio_multi_image');

        foreach($image as $multi_image){

            $name_gen = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();

            Image::make($multi_image)->resize(220,220)->save('upload/multi/'.$name_gen);

            $save_url = 'upload/multi/'.$name_gen;

            MultiImage::insert([
                'multi_image' => $save_url,
                'created_at' => Carbon::now(),
            ]);

        }

        $notification = [
            'message'    => "Multi Image Added Successfully",
            'alert-type' => 'success'
        ];


        return redirect()->route('portfolio.all')->with($notification);

    }

    public function AllMultiImage(){

        $allMultiImage = MultiImage::all();
        return view('admin.portfolio.all_multiimage',compact('allMultiImage'));

     }// End Method 

     public function EditMultiImage($id){

        $multiImage = MultiImage::findOrFail($id);
        return view('admin.portfolio.edit_multi_image',compact('multiImage'));

     }// End Method

     public function UpdateMultiImage(Request $request){

        $multi_image_id = $request->id;

     if ($request->file('multi_image')) {
         $image = $request->file('multi_image');
         $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

         Image::make($image)->resize(220,220)->save('upload/multi/'.$name_gen);
         $save_url = 'upload/multi/'.$name_gen;

         MultiImage::findOrFail($multi_image_id)->update([
              
             'multi_image' => $save_url,

         ]); 

         $notification = array(
         'message' => 'Multi Image Updated Successfully', 
         'alert-type' => 'success'
     );

     return redirect()->route('all.multi.image')->with($notification);

     }

  }// End Method 

  public function DeleteMultiImage($id){

    $multi = MultiImage::findOrFail($id);
    $img = $multi->multi_image;
    unlink($img);

    MultiImage::findOrFail($id)->delete();

     $notification = array(
        'message' => 'Multi Image Deleted Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

   

 }// End Method 
}
