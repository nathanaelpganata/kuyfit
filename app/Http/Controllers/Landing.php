<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class Landing extends Controller
{
    public function landing() {
        $lapangan = Lapangan::take(4)->get();
        return view('landing', [
            'lapangan' => $lapangan
        ]);
    }

    public function landingGuest() {
        $lapangan = Lapangan::take(4)->get();
        return view('landingGuest', [
            'lapangan' => $lapangan
        ]);
    }
    
}
