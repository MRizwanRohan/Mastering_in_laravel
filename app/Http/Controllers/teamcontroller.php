<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teamcontroller extends Controller
{
    public function index(){
        return view('team');
    }
}
