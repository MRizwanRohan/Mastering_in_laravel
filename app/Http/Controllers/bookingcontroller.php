<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookingcontroller extends Controller
{
    public function index(){

        return view('booking');
    }
}
