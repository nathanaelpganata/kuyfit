<?php

namespace App\Http\Controllers;

use App\Models\PesananSewaLapangan;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyOrders extends Controller
{
    public function showMyOrders()
    {
        $myOrder = PesananSewaLapangan::where('renterId', Auth::id())->get();

        foreach ($myOrder as $order) {
            if ($order->status !== 'ongoing')
                break;

            $schedule = $order->pluck('schedule');
            $schedule = str_replace(' ', '', $schedule[0]);
            $schedule = explode('-', $schedule);
            $date = $schedule[0];
            $hour = explode(',', $schedule[1]);
            $hour = $hour[count($hour) - 1] . ":00";
            date_default_timezone_set('Asia/Jakarta');
            $datetime = DateTime::createFromFormat('m/d/Y H:i', $date . ' ' . $hour)->getTimestamp();

            if (time() > $datetime) {
                $order->status = 'finished';
                $order->save();
            }
        }

        return view('myorders',  [
            'myOrder' => $myOrder
        ]);
    }
}
