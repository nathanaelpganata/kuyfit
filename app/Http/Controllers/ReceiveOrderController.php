<?php

namespace App\Http\Controllers;

use App\Http\Applications\StatusPesananMail;
use App\Models\PesananSewaLapangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Mail;

class ReceiveOrderController extends Controller
{
    public function showDashboard()
    {

        $ownerId = Auth::id();

        $pending = PesananSewaLapangan::where('ownerId', $ownerId)->where('status', 'pending')->count();
        $ongoing = PesananSewaLapangan::where('ownerId', $ownerId)->where('status', 'ongoing')->count();
        $finished = PesananSewaLapangan::where('ownerId', $ownerId)->where('status', 'finished')->count();

        return view('dashboard.home', [
            'pending' => $pending,
            'ongoing' => $ongoing,
            'finished' => $finished
        ]);
    }

    public function showOrders(Request $request)
    {

        $ownerId = Auth::id();

        $orders = PesananSewaLapangan::where('ownerId', '=', $ownerId)->paginate(
            (request()->query('entries') == null ? 10 : (int)request()->query('entries'))
        );


        return view('dashboard.pesanan', [
            'orders' => $orders
        ]);
    }

    public function showOrderDetails($id)
    {

        $ordersDetail = PesananSewaLapangan::where('id', '=', $id)->get();

        return view('dashboard.detailPesanan', [
            'orderDetails' => $ordersDetail
        ]);
    }

    public function accept($id)
    {
        $pesanan = PesananSewaLapangan::find($id);

        $pesanan->status = 'ongoing';
        $pesanan->save();

        Mail::to($pesanan->akunPenyewa->email)->send(new StatusPesananMail(
            "",
            $pesanan->akunPenyewa->firstName . ' ' . $pesanan->akunPenyewa->lastName,
            true
        ));

        return redirect()->route('dashboard.pesanan')
            ->with('success', 'Pesanan accepted successfully.');
    }

    public function reject($id)
    {
        if (request()->query('reason') == null)
            return redirect()->route('dashboard.pesanan')
                ->with('error', 'Please fill the reason field.');

        $pesanan = PesananSewaLapangan::find($id);

        $pesanan->status = 'cancelled';
        $pesanan->save();

        Mail::to($pesanan->akunPenyewa->email)->send(new StatusPesananMail(
            request()->query('reason'),
            $pesanan->akunPenyewa->firstName . ' ' . $pesanan->akunPenyewa->lastName,
            false
        ));

        return redirect()->route('dashboard.pesanan')
            ->with('success', 'Pesanan rejected successfully.');
    }
}
