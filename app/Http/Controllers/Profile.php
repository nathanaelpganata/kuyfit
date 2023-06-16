<?php

namespace App\Http\Controllers;

use App\Models\AkunPenyewa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Profile extends Controller
{
    public function showRenterProfile()
    {
        $id = Auth::user()->id;
        $akunPenyewa = AkunPenyewa::where('id', $id)->get();
        return view('profile', [
            'akunPenyewa' => $akunPenyewa
        ]);
    }

    public function updateRenterProfile(Request $request, $id)
    {
        // dd($request->all());
        $request->validate(
        [
            'firstName' => 'required|min:3',
            'lastName' => 'required|min:3',
            'phoneNumber' => 'required|min:8',
            'password' => 'required|min:8|same:confirm_password',
            'confirm_password' => 'required|min:8'
        ]
        );

        AkunPenyewa::find($id)->update($request->all());

        return redirect()->route('profile')
            ->with('success', 'Profile updated successfully.');
    }
}
