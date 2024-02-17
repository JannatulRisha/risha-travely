<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;
use Intervention\Image\Facades\Image;

class HomeSliderController extends Controller
{
    public function AllHomeSlide() {

        $homeslide = HomeSlide::find(1);

        return view('admin.home_slide.home_slide_all', compact('homeslide'));

    }
    
    public function UpdateHomeSlide(Request $request) {

        $slide_id = $request->id;

        if($request->file('slider_photo')) {

            $image = $request->file('slider_photo');

            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(713, 598)->save('upload/home_slide/' . $name_gen);

            $save_url = 'upload/home_slide/'.$name_gen;

            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_text' => $request->short_text,
                'btn_text' => $request->btn_text,
                'slider_photo' => $save_url,
            ]);

    
            $notification = [
                'message'    => "Slider Updated Successfully With Image",
                'alert-type' => 'success'
            ];
    
            return redirect()->back()->with($notification);

        } else { // Without photo

            HomeSlide::findOrFail($slide_id)->update([

                'title' => $request->title,
                'short_text' => $request->short_text,
                'btn_text' => $request->btn_text,

            ]);

            $notification = [
                'message'    => "Slider Updated Without Image Successfully",
                'alert-type' => 'success'
            ];
    
            return redirect()->back()->with($notification);

        }

    } 
}
