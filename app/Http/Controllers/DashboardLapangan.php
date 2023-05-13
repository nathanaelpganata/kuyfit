<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardLapangan extends Controller
{
    public function index()
    {
        return view('dashboard.lapangan');
    }
}
