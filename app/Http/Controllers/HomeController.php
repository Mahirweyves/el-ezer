<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    function portfolio()
    {
        return view('portfolio');
    }

    function single_view()
    {
        return view('single_view');
    }

    

    function contact()
    {
        return view('contact');
    }
}
