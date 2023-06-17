<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function showVenue()
    {
        $ownerId = Auth::id();
        $lapangan = Lapangan::where('ownerId', $ownerId)->paginate(
            (request()->query('entries') == null ? 10 : (int)request()->query('entries'))
        );
        return view('dashboard.lapangan', compact('lapangan'));
    }

    public function addVenue(Request $request)
    {
        $request->merge([
            'wifi' => $request->filled('wifi') ? $request->wifi : '0',
            'toilet' => $request->filled('toilet') ? $request->toilet : '0',
            'canteen' => $request->filled('canteen') ? $request->canteen : '0',
            'musalla' => $request->filled('musalla') ? $request->musalla : '0',
        ]);

        $validatedData = $request->validate([
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

        $imageName = \Ramsey\Uuid\Uuid::uuid4()->toString() . time() . '.' . $request->photo->extension();
        $request['photo']->storeAs('images/', $imageName);
        $request['photo']->move(public_path('images/fotolapangan'), $imageName);

        $lapangan = new \App\Models\Lapangan;
        $lapangan->venueName = $validatedData['venueName'];
        $lapangan->oprTime = $validatedData['oprTime'];
        $lapangan->address = $validatedData['address'];
        $lapangan->phoneNumber = $validatedData['phoneNumber'];
        $lapangan->price = $validatedData['price'];
        $lapangan->wifi = $validatedData['wifi'];
        $lapangan->toilet = $validatedData['toilet'];
        $lapangan->canteen = $validatedData['canteen'];
        $lapangan->musalla = $validatedData['musalla'];
        $lapangan->photo = 'images/fotolapangan/' . $imageName;
        $lapangan->sportId = $validatedData['sportId'];
        $lapangan->ownerId = Auth::user()->id;

        $lapangan->save();

        return redirect()->route('dashboard.lapangan')
            ->with('success', 'Lapangan created successfully.');
    }

    public function showVenueDetail(Lapangan $lapangan, $id)
    {
        $lapangan = Lapangan::find($id);

        return view('dashboard.detailLapangan', compact('lapangan'));
    }

    public function editVenueDetail(Lapangan $lapangan, $id)
    {
        $lapangan = Lapangan::find($id);
        return view('dashboard.editDetailLapangan', compact('lapangan'));
    }

    public function updateVenueDetail(Request $request, Lapangan $lapangan, $id)
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

        $imageName = \Ramsey\Uuid\Uuid::uuid4()->toString() . time() . '.' . $request->photo->extension();
        $request['photo']->storeAs('images/', $imageName);
        $request['photo']->move(public_path('images/fotolapangan'), $imageName);
        $request['photo'] = 'images/fotolapangan/' . $imageName;

        $lapangan = Lapangan::find($id);
        $lapangan->update($request->all());

        return redirect()->route('dashboard.lapangan')
            ->with('success', 'Lapangan updated successfully.');
    }

    public function deleteVenue(Lapangan $lapangan, $id)
    {
        $lapangan = Lapangan::find($id);
        $lapangan->delete();
        return redirect()->route('dashboard.lapangan')
            ->with('success', 'Lapangan deleted successfully.');
    }

    public function showFutsalVenueList()
    {
        return view('futsal');
    }

    public function showBasketVenueList()
    {
        return view('basketball');
    }

    public function showBadmintonVenueList()
    {
        return view('badminton');
    }
}
