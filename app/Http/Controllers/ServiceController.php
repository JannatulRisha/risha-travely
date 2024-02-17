<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    public function ServicesAll () {

        $serviceData = Service::find(1);

        return view('admin.services.services_all', compact('serviceData'));

    }

    public function ServicesAdd () {

        $serviceData = Service::find(1);

        return view('admin.services.services_add', compact('serviceData'));

    }

    public function ServicesUpdate (Request $request) {

        $service_id = $request->id;

        if($request->file('service_photo')) {

            $image = $request->file('service_photo');

            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(713, 598)->save('upload/services/' . $name_gen);

            $save_url = 'upload/services/'.$name_gen;

            Service::findOrFail($service_id)->update([

                'title' => $request->title,
                'short_text' => $request->short_text,
                'text_one' => $request->text_one,
                'text_two' => $request->text_two,
                'text_three' => $request->text_three,
                'text_four' => $request->text_four,
                'service_photo' => $save_url,
                'updated_at' => Carbon::now(),
    
            ]);
    
            $notification = [
                'message'    => "Service added Successfully With Image",
                'alert-type' => 'success'
            ];
    
            return redirect()->route('services.all')->with($notification);

        } else { // Without photo

            Service::findOrFail($service_id)->update([

                'title' => $request->title,
                'short_text' => $request->short_text,
                'text_one' => $request->text_one,
                'text_two' => $request->text_two,
                'text_three' => $request->text_three,
                'text_four' => $request->text_four,
                'updated_at' => Carbon::now(),
    
            ]);
    
            $notification = [
                'message'    => "Service added Successfully Without Image",
                'alert-type' => 'success'
            ];
    
            return redirect()->route('services.all')->with($notification);

        }

    }
}
