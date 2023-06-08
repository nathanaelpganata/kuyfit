@extends('layouts.base')

@section('title', 'Profile')

@section('content')
    <div class="flex flex-col w-full">
        <div class="relative w-full">
            <img src="/images/profil/background.png" alt="" srcset="" class="w-full">
            <div
                class="w-[700px] rounded-xl px-16 py-8 bottom-[-80px] absolute ml-auto mr-auto left-0 right-0 bg-white shadow-lg">
                <div class="bg-[#80D8FB] w-[560px] h-[129px] flex rounded-xl shadow-xl m-auto font-rubik">
                    <div class="flex m-auto space-x-4">
                        <h1 class="text-6xl font-bold">Profile</h1>
                    </div>
                </div>
            </div>
        </div>
        <form class="py-32 flex px-[75px]" method="POST" action="/profile/{{ $akunPenyewa[0]->id }}/edit">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="pr-16">
                <img src="/images/profil/Avatar.png" alt="" srcset="" class="min-w-[264px]">
            </div>
            <div class="w-full">
                <div>
                    <label for="firstName">First Name*</label>
                    <input value="{{ $akunPenyewa[0]->firstName }}" id="firstName" name="firstName" type="text" class="bg-[#e3e3e3] py-2 px-3 w-full rounded-md"
                        placeholder="First name">
                </div>
                <div class="mt-[18px]">
                    <label for="email">Email*</label>
                    <input value="{{ $akunPenyewa[0]->email }}" id="email" name="email" type="text" class="bg-[#e3e3e3] py-2 px-3 w-full rounded-md disabled:bg-[#C4C4C4]"
                        placeholder="Email" disabled>
                </div>
                <div class="mt-[18px]">
                    <label for="gender">Gender*</label>
                    <select name="gender" id="gender" class="bg-[#e3e3e3] py-2 px-3 w-full rounded-md disabled:bg-[#C4C4C4]" disabled>
                        <option value="" selected>
                            @if($akunPenyewa[0]->gender === 1)
                            <span>Male</span>
                            @else
                            <span>Female</span>
                            @endif
                        </option>
                    </select>
                </div>
                <div class="mt-[18px]">
                    <label for="password">Password*</label>
                    <input id="password" type="password" name="password" class="bg-[#e3e3e3] py-2 px-3 w-full rounded-md"
                        placeholder="Password">
                </div>
                <div class="mt-[28px]">
                    <button type="submit" class="w-[256px] h-[32px] bg-blue-500 p-[5px] text-center text-white rounded">Save
                        Changes</button>
                </div>
            </div>
            <div class="ml-[18px] w-full flex flex-col">
                <div>
                    <label for="lastName">Last Name*</label>
                    <input value="{{ $akunPenyewa[0]->lastName }}" id="lastName" name="lastName" type="text" class="bg-[#e3e3e3] py-2 px-3 w-full rounded-md"
                        placeholder="Last name">
                </div>
                <div class="mt-[18px]">
                    <label for="phoneNumber">Phone*</label>
                    <input value="{{ $akunPenyewa[0]->phoneNumber }}" id="phoneNumber" name="phoneNumber" type="text" class="bg-[#e3e3e3] py-2 px-3 w-full rounded-md"
                        placeholder="+62">
                </div>
                <div class="mt-[18px]">
                    <label for="account-type">Account Type*</label>
                    <select name="account-type" id="account-type" class="bg-[#e3e3e3] py-2 px-3 w-full rounded-md disabled:bg-[#C4C4C4]" disabled>
                        <option value="" selected>Penyewa</option>
                    </select>
                </div>
                <div class="mt-[18px]">
                    <label for="confirm_password">Password again*</label>
                    <input id="confirm_password" name="confirm_password" type="password"
                        class="bg-[#e3e3e3] py-2 px-3 w-full rounded-md" placeholder="Password">
                </div>
                <div class="mt-[28px] ml-auto">
                    <a href="logout" class="w-[256px] h-[32px] bg-[#FE0101] p-[5px] text-center text-white rounded">Logout</a>
                </div>
            </div>
        </form>
    </div>
@stop
