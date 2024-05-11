<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function contact()
    {
        return view('contact');
    }
    public function aboutus()
    {
        return view('aboutus');
    }
    public function gallery()
    {
        return view('gallery');
    }

}
