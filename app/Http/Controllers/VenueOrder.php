<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VenueOrder extends Controller
{
    public function index() {
        return view('orderVenue');
    }
}
