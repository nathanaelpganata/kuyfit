<?php

namespace App\Http\Controllers;

use App\Models\PesananSewaLapangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class ReceiveOrderController extends Controller
{
    public function showDashboard() {

        $ownerId = 1; // Auth::id(); 

        $pending = DB::table('pesanan_sewa_lapangan')->where('ownerId', $ownerId)->where('status', 'pending')->count();
        $ongoing = DB::table('pesanan_sewa_lapangan')->where('ownerId', $ownerId)->where('status', 'ongoing')->count();
        $finished = DB::table('pesanan_sewa_lapangan')->where('ownerId', $ownerId)->where('status', 'finished')->count();

        return view('dashboard.home', [
            'pending' => $pending,
            'ongoing' => $ongoing,
            'finished' => $finished
        ]);

    }

    public function showOrders(Request $request) {

        $ownerId = 1; // Auth::id();

        $orders = DB::table('pesanan_sewa_lapangan')
            ->join('akun_penyewa AS a', 'pesanan_sewa_lapangan.renterId', '=', 'a.id')
            ->join('jadwal_sewa_lapangan AS b', 'pesanan_sewa_lapangan.scheduleId', '=', 'b.id')
            ->join('lapangan AS c', 'b.venueId', '=', 'c.id')
            ->select(
                'pesanan_sewa_lapangan.id', 
                'a.firstName', 
                'a.lastName', 
                'c.venueName', 
                DB::raw('DATE_FORMAT(b.dateTimeStart, "%H:%i") as timeStart'), 
                DB::raw('DATE_FORMAT(b.dateTimeEnd, "%H:%i") as timeEnd'), 
                DB::raw('DATE(b.dateTimeStart) as date'), 
                'pesanan_sewa_lapangan.status', 
                'pesanan_sewa_lapangan.timeStamp'
            )
            ->where('pesanan_sewa_lapangan.ownerId', '=', $ownerId)
            ->get();


        return view('dashboard.pesanan', [
            'orders' => $orders
        ]);

    }   

    public function showOrderDetails($id) {

        $orderDetails = DB::table('pesanan_sewa_lapangan')
            ->join('akun_penyewa AS a', 'pesanan_sewa_lapangan.renterId', '=', 'a.id')
            ->join('jadwal_sewa_lapangan AS b', 'pesanan_sewa_lapangan.scheduleId', '=', 'b.id')
            ->join('lapangan AS c', 'b.venueId', '=', 'c.id')
            ->select(
                'pesanan_sewa_lapangan.id', 
                'a.firstName', 
                'a.lastName', 
                'c.venueName', 
                DB::raw('DATE_FORMAT(b.dateTimeStart, "%H:%i") as timeStart'), 
                DB::raw('DATE_FORMAT(b.dateTimeEnd, "%H:%i") as timeEnd'), 
                DB::raw('DATE(b.dateTimeStart) as date'), 
                'pesanan_sewa_lapangan.status', 
                'pesanan_sewa_lapangan.timeStamp', 
                'pesanan_sewa_lapangan.paymentProof')
            ->where('pesanan_sewa_lapangan.id', '=', $id)
            ->get();

	    return view('dashboard.detailPesanan', [
            'orderDetails' => $orderDetails
        ]);

    }

    public function orderDecision($id, $status) {

        DB::table('pesanan_sewa_lapangan')->where('id', $id)->update([
            'status' => $status
        ]);

        return redirect()
            ->route('dashboard.pesanan')
            ->with('success', 'Status updated successfully');
        
    }

    // Kirim email ke penyewa terkait perubahan status pesanan menjadi ditolak/diterima
    public function sendOrderStatus() {

    }

}
