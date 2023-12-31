<?php

namespace App\Http\Controllers;

use App\Models\University;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view('be.auth.login');
    }
    public function customLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            //dd(Auth::user()->role);
            return redirect()->intended('dashboard')->withSuccess('Signed in');
        }
        
        return redirect("login")->withErrors('Login details are not valid');

    }
    public function dashboard()
    {
        return view('be.pages.dashboard');
    }
    public function home()
    {
        $destinations = Destination::with('universities')->get();
        return view('fe.pages.home', compact('destinations'));
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
