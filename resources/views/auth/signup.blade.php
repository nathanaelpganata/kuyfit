@extends('layouts.base')

@section('title', 'Register')
@section('content')
<div class="flex flex-row justify-center items-center h-screen gap-0 xl:gap-10 px-6 my-20 md:my-0">
    <div class="flex flex-col">
        <div class="flex flex-col sm:flex-row items-center gap-2">
            <h1 class="text-3xl font-semibold">Sign up to </h1>
            <img src="{{ asset('images/logo-singup.png') }}" alt="logo" class="w-[200px] h-[53px]">
        </div>
        <form action="" class="flex flex-col items-center md:items-stretch mt-10">
            <div class="flex flex-col md:flex-row gap-4">
            <div class="flex flex-col space-y-4">
                <div class="flex flex-col">
                    <label for="first_name">First Name*</label>
                    <input type="text" id="first_name" class="w-72 bg-slate-200 px-2 py-1 mt-1 outline-none" placeholder="John">
                    @error('first_name')
                        <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="email">Email*</label>
                    <input type="text" id="email" class="w-72 bg-slate-200 px-2 py-1 mt-1 outline-none" placeholder="john.doe@example.com">
                    @error('email')
                        <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="gender">Gender*</label>
                    <select type="select" id="gender" class="w-72 bg-slate-200 px-2 py-1 mt-1 outline-none">
                        <option value="-1">Select</option>
                        <option value="1">Male</option>
                        <option value="0">Female</option>
                    </select>
                        @error('email')
                        <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="password">Password*</label>
                    <div class="relative w-max">
                    <input type="password" id="password" class="relative w-72 bg-slate-200 px-2 py-1 mt-1 outline-none" placeholder="password@123">
                    <x-heroicon-s-eye class="absolute top-1/3 right-4 w-4 "/>
                    </div>
                    @error('password')
                        <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex flex-col space-y-4">
                <div class="flex flex-col">
                    <label for="last_name">Last Name*</label>
                    <input type="text" id="last_name" class="w-72 bg-slate-200 px-2 py-1 mt-1 outline-none" placeholder="Doe">
                    @error('last_name')
                        <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="phone_num">Phone*</label>
                    <div class="flex flex-row justify-start items-center w-72 bg-slate-200 px-2 py-1 mt-1">
                    <span>+62 |</span>
                    <input type="number" id="phone_num" class="bg-transparent ml-2 px-2 outline-none" placeholder="85627392142">
                    </div>
                    @error('phone_num')
                        <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="acc_type">Account Type*</label>
                    <select type="select" id="acc_type" class="w-72 bg-slate-200 px-2 py-1 mt-1 outline-none">
                        <option value="1">Penyewa</option>
                        <option value="0">Pemilik Lapangan</option>
                    </select>
                        @error('email')
                        <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="confirm_password">Confirm Password*</label>
                    <div class="relative w-max">
                    <input type="password" id="confirm_password" class="relative w-72 bg-slate-200 px-2 py-1 mt-1 outline-none" placeholder="password@123">
                    <x-heroicon-s-eye class="absolute top-1/3 right-4 w-4 "/>
                    </div>
                    @error('confirm_password')
                        <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            </div>
            <div>
                <div class="flex items-center  mt-4">
                    <input type="checkbox" class="-translate-y-2 mr-2">
                    <div class="whitespace-pre-line text-sm">Creating an account means you’re okay with our <a href="#" class="text-blue-600 hover:text-blue-800 underline text-sm decoration-blue-600 hover:decoration-blue-800">Terms of Service</a>,
                        <a href="#" class="text-blue-600 hover:text-blue-800 underline text-sm decoration-blue-600 hover:decoration-blue-800">Privacy Policy</a>, and our default <a href="#" class="text-blue-600 hover:text-blue-800 underline text-sm decoration-blue-600 hover:decoration-blue-800">Notification Settings</a>.
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-start md:items-end justify-between mt-6">
                <button type="submit" class="text-white bg-[#01B2FE] w-44 h-10 rounded-[4px] hover:bg-blue-500">Create Account</button>
                <span class="md:mt-0 mt-2">Already a member? <a href="#" class="text-blue-600 hover:text-blue-800 underline decoration-blue-600 hover:decoration-blue-800">Log In</a></span>
            </div>
        </form>
    </div>
    <div class="hidden lg:flex w-[570px] h-[570px]">
        <img src="{{ asset('/images/signup.png')}}" alt="haha">
    </div>
</div>
@endsection
