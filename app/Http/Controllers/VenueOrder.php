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

    protected $lapangan;

    public function __construct(Request $request)
    {
        $this->id = $request->route('id');
        $this->lapangan = \App\Models\Lapangan::where('id', '=', $this->id)->first();

        if (!$this->lapangan)
            abort(404);
    }

    public function index()
    {
        return view('orderVenue', [
            'lapangan' => $this->lapangan,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->rules);

        $venueOrder = new \App\Models\PesananSewaLapangan;

        $venueOrder->renterId = auth()->user()->id;
        $venueOrder->ownerId = $this->lapangan->ownerId;
        $venueOrder->bankId = 1;
        $venueOrder->schedule = $validatedData['date'] . " - " . implode(',', $validatedData['hour']);
        // $venueOrder->bank = $validatedData['bank'];
        $venueOrder->paymentProof = $validatedData['bukti_pembayaran'];
        $venueOrder->deadline = date('Y-m-d H:i:s', strtotime($validatedData['date'] . ' + 1 day'));
        $venueOrder->status = 'pending';
        $venueOrder->lapanganId = request()->route('id');

        $venueOrder->save();

        return redirect()->route('my.orders');
    }
}
