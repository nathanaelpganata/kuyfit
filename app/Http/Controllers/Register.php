<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Register extends Controller
{
    public string $first_name = '';
    public string $last_name = '';
    public string $email = '';
    public string $phone = '';
    public bool $gender;
    public bool $account_type;
    public string $password = '';
    public string $confirm_password = '';
    public bool $agreement;

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

    public function index()
    {
        return view('auth.signup');
    }

    public function store(Request $request) {
        $validatedData = $request->validate($this->rules);

        dd($validatedData);
    }
}
