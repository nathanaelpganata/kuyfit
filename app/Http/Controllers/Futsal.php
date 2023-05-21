<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Futsal extends Controller
{
    public function index()
    {
        return view('futsal');
    }
}
