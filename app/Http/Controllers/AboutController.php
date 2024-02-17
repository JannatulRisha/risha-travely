<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    public function AboutAdd() {

        $aboutData = About::find(1);

        return view('admin.about.about_all', compact('aboutData'));

    }

    public function AboutUpdate(Request $request) {

        $about_id = $request->id;

        if($request->file('about_photo')) {

            $image = $request->file('about_photo');

            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(713, 598)->save('/upload/about/' . $name_gen);

            $save_url = '/upload/about/'.$name_gen;

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_text' => $request->short_text,
                'about_photo' => $save_url,
            ]);

    
            $notification = [
                'message'    => "About Updated Successfully With Image",
                'alert-type' => 'success'
            ];
    
            return redirect()->back()->with($notification);

        } else { // Without photo

            About::findOrFail($about_id)->update([

                'title' => $request->title,
                'short_text' => $request->short_text,

            ]);

            $notification = [
                'message'    => "About Updated Without Image Successfully",
                'alert-type' => 'success'
            ];
    
            return redirect()->back()->with($notification);

        }

    } 
}
