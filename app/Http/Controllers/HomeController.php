<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index'); // Assuming you have a home.blade.php view file
    }
    
    public function about()
    {
        return view('home.about'); 
    }

    public function contact()
    {
        return view('home.contact'); 
    }

    public function portfolio()
    {
        return view('home.portfolio'); 
    }

    public function services()
    {
        return view('home.services'); // Assuming you have a home.blade.php view file
    }

    public function team()
    {
        return view('home.team'); // Assuming you have a home.blade.php view file
    }

    public function testimonials()
    {
        return view('home.testimonials'); // Assuming you have a home.blade.php view file
    }

}
