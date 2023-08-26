<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testimonialcontroller extends Controller
{
    public function index(){
        return view('testimonial');
    }
}
