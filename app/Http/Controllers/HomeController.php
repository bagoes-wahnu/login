<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function level1()
    {
        return view('home1');
    }

    public function level2()
    {
        return view('home2');
    }

    public function level3()
    {
        return view('home3');
    }

    public function peta1()
    {
        return view('peta1');
    }

    public function peta2()
    {
        return view('peta2');
    }

    public function peta3()
    {
        return view('peta3');
    }
}
