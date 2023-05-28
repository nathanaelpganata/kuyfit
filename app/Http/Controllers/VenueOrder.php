<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VenueOrder extends Controller
{
    protected $rules = [
        'date' => 'required',
        'hour' => 'required',
        'bank' => 'required',
        'bukti_pembayaran' => 'required',
    ];

    protected $id;

    public function __construct(Request $request)
    {
        $this->id = $request->route('id');
    }

    public function index()
    {
        return view('orderVenue');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->rules);

        $venueOrder = new \App\Models\PesananSewaLapangan;

        $venueOrder->date = $validatedData['date'];
        $venueOrder->hour = $validatedData['hour'];
        $venueOrder->bank = $validatedData['bank'];
        $venueOrder->bukti_pembayaran = $validatedData['bukti_pembayaran'];
        $venueOrder->id_penyewa = $this->id;

        $venueOrder->save();

        return;
    }
}
