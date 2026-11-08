<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home', ['name' => 'Rommel']);
    }

    public function photos()
    {
        return view('photos');
    }

    public function contact()
    {
        return view('contact');
    }
}