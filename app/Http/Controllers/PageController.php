<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    //
    public function index()
    {   
        // return view('welcome', ['test'=>$test]);
        // dd(url('hello'));
        // Storage::exists('/test.jpg');
        return view('welcome');


    }
}
