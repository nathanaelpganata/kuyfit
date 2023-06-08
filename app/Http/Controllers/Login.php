<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    protected $rules = [
        'email' => 'required|min:3',
        'password' => 'required|min:3',
    ];

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate($this->rules);

        $penyewaAttempt = Auth::guard('akun_penyewa')->attempt(['email' => $request->email, 'password' => $request->password]);
        $pemilikAttempt = Auth::guard('akun_pemilik_lapangan')->attempt(['email' => $request->email, 'password' => $request->password]);

        if (!$penyewaAttempt && !$pemilikAttempt)
            return redirect()->route('login.index')->with('error', 'Email atau password salah');

        session()->regenerate();
        if ($pemilikAttempt) {
            return redirect()->route('dashboard.home');
        } else if($penyewaAttempt) {
            return redirect()->route('landing');
        }
    }

    public function logout(Request $request)
    {
        session()->invalidate();

        return redirect()->route('login.index');
    }
}
