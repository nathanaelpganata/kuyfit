<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardBank extends Controller
{
    public function index()
    {
        return view('dashboard.bank');
    }
}
