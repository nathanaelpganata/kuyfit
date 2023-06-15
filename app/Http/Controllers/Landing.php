<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class Landing extends Controller
{
    public function index() {
        $lapangan = Lapangan::take(4)->get();
        return view('landing', [
            'lapangan' => $lapangan
        ]);
    }
}
