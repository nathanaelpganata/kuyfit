<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahLapangan extends Controller
{
    public function index()
    {
        return view('dashboard.tambahLapangan');
    }

}
