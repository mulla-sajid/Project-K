<?php

namespace App\Http\Controllers;

class PathController extends Controller
{
    public function about_us()
    {
        return view('auth.aboutus');
    }

    public function blog()
    {
        return view('auth.blog');
    }
}
