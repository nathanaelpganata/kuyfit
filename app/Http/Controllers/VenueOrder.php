<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VenueOrder extends Controller
{
    protected $rules = [
        'date' => 'required',
        'hour' => 'required',
        'bank' => 'required',
        'totalPrice' => 'required',
        'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
        $venueOrder->totalPrice = $validatedData['totalPrice'];
        $venueOrder->schedule = $validatedData['date'] . " - " . implode(',', $validatedData['hour']);
        $venueOrder->bankId = $validatedData['bank'];

        $imageName = \Ramsey\Uuid\Uuid::uuid4()->toString() . time() . '.' . $request->bukti_pembayaran->extension();
        $request->bukti_pembayaran->storeAs('images/', $imageName);
        $request->bukti_pembayaran->move(public_path('images/buktipembayaran'), $imageName);

        $venueOrder->paymentProof = 'images/buktipembayaran/' . $imageName;
        $venueOrder->deadline = date('Y-m-d H:i:s', strtotime($validatedData['date'] . ' + 1 day'));
        $venueOrder->status = 'pending';
        $venueOrder->lapanganId = request()->route('id');

        $venueOrder->save();

        return redirect()->route('myorders');
    }
}
