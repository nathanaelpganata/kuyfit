@extends('layouts.base')

@section('title', 'Home')
@section('content')

    <div class="">
        <img class="w-full" src="{{ asset('images/basket.png') }}" alt="my mvp damar">
    </div>
    <div class="-translate-y-[104px] flex w-full justify-center">
        <div class="w-[699px] h-[209px] flex bg-white shadow-2xl rounded-xl">
            <div class="bg-[#80D8FB] w-[560px] h-[129px] flex rounded-xl shadow-xl m-auto font-rubik">
                <div class="m-auto ">
                    <h1 class="text-6xl font-bold">Pandawa Basket</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-row justify-center gap-[46px]">
        <div class="w-[300px] h-[300px]">
            <img class="rounded-xl" src="{{ asset('images/mayasi.png') }}" alt="lapangan">

        </div>
        <div class="flex flex-col ">
            <h2 class="text-4xl font-bold">Pandawa Basket</h2>
            <h3 class="text-3xl text-[#6E6F70]">Rp 150.000/jam</h3>
            <div class="flex gap-4 flex-row mt-3">
                <img class="w-[25px]" src="{{ asset('images/logo/location.svg') }}" alt="description of myimage">
                <div class="flex flex-col">
                    <h6 class="text-xl font-bold">Alamat</h6>
                    <p class="text-[#6E6F70] font-semibold">Jl. Nangka No.05</p>
                </div>
            </div>
            <div class="flex gap-4 flex-row mt-3">
                <img class="w-[25px]" src="{{ asset('images/logo/phone.svg') }}" alt="description of myimage">
                <div class="flex flex-col">
                    <h6 class="text-xl font-bold">No. Telepon</h6>
                    <p class="text-[#6E6F70] font-semibold">0812345678</p>
                </div>
            </div>
            <div class="flex gap-4 flex-row mt-3">
                <img class="w-[28px]" src="{{ asset('images/logo/ball.svg') }}" alt="description of myimage">
                <div class="flex flex-col">
                    <h6 class="text-xl font-bold">Fasilitas</h6>
                    <div class="flex flex-row gap-8 ml-1">
                        <div class=" flex flex-row gap-4">
                            <img class="w-[25px]" src="{{ asset('images/logo/wifi.svg') }}" alt="description of myimage">
                            <p class="text-[#6E6F70] font-semibold">WiFi</p>
                        </div>
                        <div class="flex flex-row gap-4">
                            <img class="w-[25px]" src="{{ asset('images/logo/toilet.svg') }}" alt="description of myimage">
                            <p class="text-[#6E6F70] font-semibold">Toilet</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex gap-4 flex-row mt-3">
                <img class="w-[32px]" src="{{ asset('images/logo/clock.svg') }}" alt="description of myimage">
                <div class="flex flex-col">
                    <h6 class="text-xl font-bold">Jam Operasional</h6>
                    <p class="text-[#6E6F70] font-semibold">08:00 - 15:00</p>
                </div>
            </div>
            <div class="btn flex my-5  w-[250px] h-[34px] bg-[#00B7FF] rounded-lg shadow-xl">
                <div class="m-auto">
                <h1 class="text-white/[0.78]">Pilih Jadwal</h1>
                </div>
            </div>
        </div>
    </div>

@endsection
