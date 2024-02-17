<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function BookingAll(){

        $bookings = Booking::all();

        return view('admin.booking.booking_all', compact('bookings'));

    }

    public function Bookingstore(Request $request){

        Booking::insert([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message, 
            'created_at' => Carbon::now(),

        ]);

         $notification = array(
            'message' => 'Your Booking Submitted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


    } // end mehtod 

    public function EditBooking($id){

        $bookings = Booking::findOrFail($id);
        return view('admin.booking.booking_edit',compact('bookings'));

     }// End Method

     public function BookingUpdate (Request $request) {

        $booking_id = $request->id;


        Booking::findOrFail($booking_id)->update([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message, 
            'updated_at' => Carbon::now(),

        ]);

        $notification = [
            'message'    => "Booking Updated Successfully",
            'alert-type' => 'success'
        ];

        return redirect()->route('bookings.all')->with($notification);

    }

    public function BookingDelete($id){
     
        Booking::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Booking Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end mehtod 


}
