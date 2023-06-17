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

        $pending = PesananSewaLapangan::where('ownerId', $ownerId)->where('status', 'pending')->whereNotNull('lapanganId')->count();
        $ongoing = PesananSewaLapangan::where('ownerId', $ownerId)->where('status', 'ongoing')->whereNotNull('lapanganId')->count();
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

        $orders = PesananSewaLapangan::where('ownerId', '=', $ownerId)->whereNotNull('lapanganId')->paginate(
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

    public function sendOrderStatus($id, Request $request)
    {
        $request->validate([
            'status' => 'required|in:accept,reject',
            'reason' => 'required_if:status,reject'
        ]);

        $order = PesananSewaLapangan::find($id);

        $request->merge([
            'status' => $request->status == "accept" ? "ongoing" : "cancelled"
        ]);

        $order->status = $request->status;
        $order->save();

        if ($request->status === "ongoing")
            Mail::to($order->akunPenyewa->email)->send(new StatusPesananMail(
                "",
                $order->akunPenyewa->firstName . ' ' . $order->akunPenyewa->lastName,
                true
            ));
        else
            Mail::to($order->akunPenyewa->email)->send(new StatusPesananMail(
                $request->reason,
                $order->akunPenyewa->firstName . ' ' . $order->akunPenyewa->lastName,
                false
            ));

        return redirect()->route('dashboard.pesanan')
            ->with('success', 'Pesanan updated successfully.');
    }
}
