<?php

namespace App\Http\Controllers;

use App\Area;
use App\Category;
use App\Mechanic;
use App\Hiredlabour;
use App\Customer;
use Image;
use DB;
use App\User;

use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    public function index()
    {
        $mechs = Mechanic::orderBy('total_work','desc')->get();
        $users = User::all();
        $customers = Customer::all();
        $hirecount = Hiredlabour::all();
        $hires = Hiredlabour::limit(3)->orderBy('id','desc')->get();
        return view('admin.home.home',
            compact('mechs','users','customers','hirecount','hires'));
    }
}
