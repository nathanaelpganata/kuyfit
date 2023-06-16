<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
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

    public function showOrderStep()
    {
        return view('orderVenue', [
            'lapangan' => $this->lapangan,
        ]);
    }

    public function sendOrderRequest(Request $request)
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

    // public function showOrderList()
    // {
    //     $myOrder = \App\Models\PesananSewaLapangan::where('renterId', Auth::id())->get();

    //     foreach ($myOrder as $order) {
    //         if ($order->status !== 'ongoing')
    //             break;

    //         $schedule = $order->pluck('schedule');
    //         $schedule = str_replace(' ', '', $schedule[0]);
    //         $schedule = explode('-', $schedule);
    //         $date = $schedule[0];
    //         $hour = explode(',', $schedule[1]);
    //         $hour = $hour[count($hour) - 1] . ":00";
    //         date_default_timezone_set('Asia/Jakarta');
    //         $datetime = DateTime::createFromFormat('m/d/Y H:i', $date . ' ' . $hour)->getTimestamp();

    //         if (time() > $datetime) {
    //             $order->status = 'finished';
    //             $order->save();
    //         }
    //     }

    //     return view('myorders',  [
    //         'myOrder' => $myOrder
    //     ]);
    // }
}
