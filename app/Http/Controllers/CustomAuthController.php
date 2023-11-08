<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public function home()
    {
        return view('fe.pages.home');
    }

    public function about()
    {
        return view('fe.pages.about');
    }

    public function destinations()
    {
        return view('fe.pages.destinations');
    }
}
