<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPesanan extends Controller
{
    public function index()
    {
        return view('dashboard.pesanan');
    }
}
