@extends('layouts.base')

@section('title', 'Register')
@section('content')
    <div class="flex flex-row justify-center items-center h-screen gap-0 xl:gap-10 px-6 my-20 md:my-0">
        <div class="flex flex-col">
            <div class="flex flex-col sm:flex-row items-center gap-2">
                <h1 class="text-3xl font-semibold">Sign up to </h1>
                <img src="{{ asset('images/logo-singup.png') }}" alt="logo" class="w-[200px] h-[53px]">
            </div>
            <form action="/register" method="POST" class="flex flex-col items-center md:items-stretch mt-10">
                {{ csrf_field() }}
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex flex-col space-y-4">
                        <div class="flex flex-col">
                            <label for="first_name">First Name*</label>
                            <input name="first_name" type="text" id="first_name"
                                class="w-72 bg-slate-200 px-2 py-1 mt-1 outline-none" placeholder="John">
                            @error('first_name')
                                <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="email">Email*</label>
                            <input name="email" type="text" id="email"
                                class="w-72 bg-slate-200 px-2 py-1 mt-1 outline-none" placeholder="john.doe@example.com">
                            @error('email')
                                <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="gender">Gender*</label>
                            <select name="gender" type="select" id="gender"
                                class="w-72 bg-slate-200 px-2 py-1 mt-1 outline-none">
                                <option>Select</option>
                                <option value="1">Male</option>
                                <option value="0">Female</option>
                            </select>
                            @error('gender')
                                <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="password">Password*</label>
                            <div class="relative w-max">
                                <input name="password" type="password" id="password"
                                    class="relative w-72 bg-slate-200 px-2 py-1 mt-1 outline-none"
                                    placeholder="password@123">
                                <x-heroicon-s-eye class="absolute top-1/3 right-4 w-4 " />
                            </div>
                            @error('password')
                                <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-col space-y-4">
                        <div class="flex flex-col">
                            <label for="last_name">Last Name*</label>
                            <input name="last_name" type="text" id="last_name"
                                class="w-72 bg-slate-200 px-2 py-1 mt-1 outline-none" placeholder="Doe">
                            @error('last_name')
                                <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="phone">Phone*</label>
                            <div class="flex flex-row justify-start items-center w-72 bg-slate-200 px-2 py-1 mt-1 whitespace-nowrap">
                                <span>+62 |</span>
                                <input name="phone" type="text" id="phone" class="bg-transparent pl-2 h-3 px-2 outline-none border-0" placeholder="85627392142">
                            </div>
                            @error('phone')
                                <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="account_type">Account Type*</label>
                            <select name="account_type" type="select" id="account_type"
                                class="w-72 bg-slate-200 px-2 py-1 mt-1 outline-none">
                                <option>Select</option>
                                <option value="1">Penyewa</option>
                                <option value="0">Pemilik Lapangan</option>
                            </select>
                            @error('account_type')
                                <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="confirm_password">Confirm Password*</label>
                            <div class="relative w-max">
                                <input name="confirm_password" type="password" id="confirm_password"
                                    class="relative w-72 bg-slate-200 px-2 py-1 mt-1 outline-none"
                                    placeholder="password@123">
                                <x-heroicon-s-eye class="absolute top-1/3 right-4 w-4 " />
                            </div>
                            @error('confirm_password')
                                <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex items-center w-full my-4">
                        <input name="agreement" type="checkbox" class="-translate-y-2 mr-2" id='agreement'>
                        <label for='agreement' class="whitespace-pre-line text-sm">Creating an account means you’re okay
                            with our <a href="#"
                                class="text-blue-600 hover:text-blue-800 underline text-sm decoration-blue-600 hover:decoration-blue-800">Terms wire of Service</a>,<a href="#" class="text-blue-600 hover:text-blue-800 underline text-sm decoration-blue-600 hover:decoration-blue-800">Privacy Policy</a>, and our default <a href="#"
                                class="text-blue-600 hover:text-blue-800 underline text-sm decoration-blue-600 hover:decoration-blue-800">Notification Settings</a>.
                        </label>
                    </div>
                    @error('agreement')
                        <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-row justify-between w-full items-center">
                    <button type="submit" class="text-white bg-blue-500 w-44 h-10 rounded-lg hover:bg-[#01B2FE]">Create
                        Account</button>
                    <span class="md:mt-0 mt-2">Already a member? <a href="#"
                            class="text-blue-600 hover:text-blue-800 underline decoration-blue-600 hover:decoration-blue-800">Log
                            In</a></span>
                </div>
            </form>
        </div>
        <div class="hidden lg:flex w-[570px] h-[570px]">
            <img src="{{ asset('/images/signup.png') }}" alt="haha">
        </div>
    </div>
@endsection
