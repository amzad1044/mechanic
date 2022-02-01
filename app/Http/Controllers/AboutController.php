<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('front.about.about');
    }
    public function Members()
    {
        return view('front.about.members');
    }
}
