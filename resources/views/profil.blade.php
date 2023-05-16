@extends('layouts.base')

@section('title', 'Profile')

@section('custom-style')
    <style>
        input:not(:empty) {
            background-color: #C4C4C4;
        }
    </style>
@stop

@section('content')
    <div class="flex w-full flex-col">
        <div class="w-full relative">
            <img src="/images/profil/background.png" alt="" srcset="" class="w-full">
            <div
                class="w-[700px] rounded-xl px-16 py-8 bottom-[-80px] absolute ml-auto mr-auto left-0 right-0 bg-white shadow-lg">
                <div class="bg-[#80D8FB] w-full rounded-xl">
                    <h1 class="text-5xl text-center leading-[130px] font-medium">Profile</h1>
                </div>
            </div>
        </div>
        <form class="py-32 flex px-[75px]">
            <div class="pr-16">
                <img src="/images/profil/Avatar.png" alt="" srcset="" class="min-w-[264px]">
            </div>
            <div class="w-full">
                <div>
                    <label for="first-name">First Name*</label>
                    <input id="first-name" name="first-name" type="text" class="bg-[#e3e3e3] py-2 px-3 w-full rounded-md"
                        placeholder="First name">
                </div>
                <div class="mt-[18px]">
                    <label for="email">Email*</label>
                    <input id="email" name="email" type="text" class="bg-[#e3e3e3] py-2 px-3 w-full rounded-md"
                        placeholder="Email">
                </div>
                <div class="mt-[18px]">
                    <label for="gender">Gender*</label>
                    <select name="gender" id="gender" class="bg-[#e3e3e3] py-2 px-3 w-full rounded-md">
                        <option value="" selected>Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="mt-[18px]">
                    <label for="password">Password*</label>
                    <input id="password" type="text" name="password" class="bg-[#e3e3e3] py-2 px-3 w-full rounded-md"
                        placeholder="Password">
                </div>
                <div class="mt-[28px]">
                    <button class="w-[256px] h-[32px] bg-[#01B2FE] p-[5px] text-center text-white rounded">Save
                        Changes</button>
                </div>
            </div>
            <div class="ml-[18px] w-full flex flex-col">
                <div>
                    <label for="last-name">Last Name*</label>
                    <input id="last-name" name="last-name" type="text" class="bg-[#e3e3e3] py-2 px-3 w-full rounded-md"
                        placeholder="Last name">
                </div>
                <div class="mt-[18px]">
                    <label for="phone">Phone*</label>
                    <input id="phone" name="phone" type="text" class="bg-[#e3e3e3] py-2 px-3 w-full rounded-md"
                        placeholder="+62">
                </div>
                <div class="mt-[18px]">
                    <label for="account-type">Account Type*</label>
                    <select name="account-type" id="account-type" class="bg-[#e3e3e3] py-2 px-3 w-full rounded-md">
                        <option value="" selected>Select</option>
                        <option value="Penyewa">Penyewa</option>
                        <option value="Pemilik">Pemilik</option>
                    </select>
                </div>
                <div class="mt-[18px]">
                    <label for="password-again">Password again*</label>
                    <input id="password-again" name="password-again" type="text"
                        class="bg-[#e3e3e3] py-2 px-3 w-full rounded-md" placeholder="Password">
                </div>
                <div class="mt-[28px] ml-auto">
                    <button class="w-[256px] h-[32px] bg-[#FE0101] p-[5px] text-center text-white rounded">Logout</button>
                </div>
            </div>
        </form>
    </div>
@stop
