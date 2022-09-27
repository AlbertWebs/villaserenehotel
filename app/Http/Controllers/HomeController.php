<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\About;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.index');
    }

    public function contact()
    {
        $Setting = Setting::find('1');
        return view('front.contact', compact('Setting'));
    }

    public function copyright()
    {
        $About = About::find('1');
        return view('front.copyright', compact('About'));
    }

    public function terms()
    {
        $About = About::find('1');
        return view('front.terms', compact('About'));
    }

    public function privacy()
    {
        $About = About::find('1');
        return view('front.privacy', compact('About'));
    }


}
