<?php

namespace App\Http\Controllers;

use App\Models\PesananSewaLapangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyOrders extends Controller
{
    public function index()
    {
        $myOrder = PesananSewaLapangan::where('renterId', Auth::id())->get();

        return view('MyOrders',  [
            'myOrder' => $myOrder
        ]);
    }
}
