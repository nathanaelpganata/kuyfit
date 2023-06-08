<?php

namespace App\Http\Controllers;

use App\Models\PesananSewaLapangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

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

        $orders = PesananSewaLapangan::where('ownerId', '=', $ownerId)->paginate(10);


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

    public function orderDecision($id, $status)
    {

        DB::table('pesanan_sewa_lapangan')->where('id', $id)->update([
            'status' => $status
        ]);

        return redirect()
            ->route('dashboard.pesanan')
            ->with('success', 'Status updated successfully');
    }

    // Kirim email ke penyewa terkait perubahan status pesanan menjadi ditolak/diterima
    public function sendOrderStatus()
    {
    }
}
