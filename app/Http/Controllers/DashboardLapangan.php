<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class DashboardLapangan extends Controller
{
    public function index()
    {
        $ownerId = Auth::id();
        $lapangan = Lapangan::where('ownerId', $ownerId)->paginate(
            (request()->query('entries') == null ? 10 : (int)request()->query('entries'))
        );
        return view('dashboard.lapangan', compact('lapangan'));
    }

    public function create()
    {
        return view('dashboard.tambahLapangan');
    }

    public function store(Request $request)
    {
        $request->merge([
            'wifi' => $request->filled('wifi') ? $request->wifi : '0',
            'toilet' => $request->filled('toilet') ? $request->toilet : '0',
            'canteen' => $request->filled('canteen') ? $request->canteen : '0',
            'musalla' => $request->filled('musalla') ? $request->musalla : '0',
        ]);

        $request->validate([
            'venueName' => 'required',
            'oprTime' => 'required',
            'address' => 'required',
            'price' => 'required',
            'phoneNumber' => 'required',
            'wifi' => 'required',
            'toilet' => 'required',
            'canteen' => 'required',
            'musalla' => 'required',
            'photo' => 'required',
            'sportId' => 'required',
        ]);

        $request['ownerId'] = Auth::user()->id;

        Lapangan::create($request->all());

        return redirect()->route('dashboard.lapangan')
            ->with('success', 'Lapangan created successfully.');
    }

    public function show(Lapangan $lapangan, $id)
    {
        $lapangan = Lapangan::find($id);

        return view('dashboard.detailLapangan', compact('lapangan'));
    }

    public function edit(Lapangan $lapangan, $id)
    {
        $lapangan = Lapangan::find($id);
        return view('dashboard.editDetailLapangan', compact('lapangan'));
    }

    public function update(Request $request, Lapangan $lapangan, $id)
    {
        $request->merge([
            'wifi' => $request->filled('wifi') ? $request->wifi : '0',
            'toilet' => $request->filled('toilet') ? $request->toilet : '0',
            'canteen' => $request->filled('canteen') ? $request->canteen : '0',
            'musalla' => $request->filled('musalla') ? $request->musalla : '0',
        ]);

        $request->validate([
            'venueName' => 'required',
            'oprTime' => 'required',
            'address' => 'required',
            'price' => 'required',
            'phoneNumber' => 'required',
            'wifi' => 'required',
            'toilet' => 'required',
            'canteen' => 'required',
            'musalla' => 'required',
            'photo' => 'required',
            'sportId' => 'required',
        ]);
        $request['ownerId'] = Auth::user()->id;

        $lapangan = Lapangan::find($id);
        $lapangan->update($request->all());

        return redirect()->route('dashboard.lapangan')
            ->with('success', 'Lapangan updated successfully.');
    }

    public function destroy(Lapangan $lapangan, $id)
    {
        $lapangan = Lapangan::find($id);
        $lapangan->delete();
        return redirect()->route('dashboard.lapangan')
            ->with('success', 'Lapangan deleted successfully.');
    }
}
