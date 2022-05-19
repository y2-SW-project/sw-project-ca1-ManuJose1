<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function makebooking()
    {
        return view('makebooking');
    }

    public function bookings()
    {
        return view('bookings');
    }
}
