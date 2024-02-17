<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSlide;

class HomeController extends Controller
{
    public function HomePage () {

        return view('frontend.index');

    }


}
