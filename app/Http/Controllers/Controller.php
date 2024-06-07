<?php

namespace App\Http\Controllers;

class Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('service');
    }

    public function packages()
    {
        return view('package');
    }

    public function contact()
    {
        return view('contact');
    }

    public function destination()
    {
        return view('destination');
    }

    public function booking()
    {
        return view('booking');
    }

    public function travelGuides()
    {
        return view('travel-guides');
    }

    public function testimonial()
    {
        return view('testimonial');
    }

    public function not_found()
    {
        return view('404');
    }
}
