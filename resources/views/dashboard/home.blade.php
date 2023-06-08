@extends('layouts.dashboard.app')

@section('title', 'Dashboard | Home')

@section('content')
    <div class="flex flex-wrap w-full m-6 text-white font-bold gap-8 min-h-screen">
        <div class="flex flex-col bg-[#8ED6FF] rounded-2xl max-w-[384px] w-full h-52 p-5">
            <div class="flex justify-start text-4xl">
                Pesanan <br> Baru:
            </div>
            <div class="flex justify-end text-7xl" >
                {{ $pending }}
            </div>
        </div>
        <div class="flex flex-col bg-[#8ED6FF] rounded-2xl max-w-[384px] w-full h-52 p-5">
            <div class="flex justify-start text-4xl">
                Pesanan <br> Berjalan:
            </div>
            <div class="flex justify-end text-7xl" >
                {{ $ongoing }}
            </div>
        </div>
        <div class="flex flex-col bg-[#8ED6FF] rounded-2xl max-w-[384px] w-full h-52 p-5">
            <div class="flex justify-start text-4xl">
                Pesanan <br> Selesai:
            </div>
            <div class="flex justify-end text-7xl" >
                {{ $finished }}
            </div>
        </div>

    </div>

@endsection
