<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    protected $rules = [
        'first_name' => 'required|min:3',
        'last_name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'required|min:8',
        'gender' => 'required',
        'account_type' => 'required',
        'password' => 'required|min:8|same:confirm_password',
        'confirm_password' => 'required|min:8',
        'agreement' => 'required',
    ];

    public function registerAccount(Request $request)
    {
        $validatedData = $request->validate($this->rules);

        if ($request->account_type != 1 && $request->account_type != 0)
            return redirect()->back()->with('error', 'Account type is not valid');

        if ($request->gender != 1 && $request->gender != 0)
            return redirect()->back()->with('error', 'Gender is not valid');

        if ($request->account_type == '1') {
            $akun = new \App\Models\AkunPenyewa;
        } else {
            $akun = new \App\Models\AkunPemilikLapangan;
        }

        // check if email already exist
        $penyewa = \App\Models\AkunPenyewa::where('email', $request->email)->first();
        $pemilik = \App\Models\AkunPemilikLapangan::where('email', $request->email)->first();

        if ($penyewa || $pemilik)
            return redirect()->back()->with('error', 'Email already exist');

        $akun->firstName = $request->first_name;
        $akun->lastName = $request->last_name;
        $akun->email = $request->email;
        $akun->phoneNumber = $request->phone;
        $akun->gender = $request->gender;
        $akun->password = Hash::make($request->password);

        $akun->save();

        return redirect()->route('login.index')->with('success', 'Account created successfully');
    }
}
