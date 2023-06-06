<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyOrders extends Controller
{
    public function index()
    {
        return view('MyOrders');
    }
}
