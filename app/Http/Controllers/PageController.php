<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index($test)
    {   
        // return view('welcome', ['test'=>$test]);
        dd(url('hello'));
        return view('welcome', compact('test'));


    }
}
