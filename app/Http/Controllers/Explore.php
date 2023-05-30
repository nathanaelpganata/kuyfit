<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Explore extends Controller
{
    public function index()
    {
        return view('explore');
    }
}
