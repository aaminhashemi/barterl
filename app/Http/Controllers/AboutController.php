<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //About Us
    public function about(){
        return view('about');
    }
}
