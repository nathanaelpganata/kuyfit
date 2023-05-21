<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Badminton extends Controller
{
    public function index()
    {
        return view('badminton');
    }
}
