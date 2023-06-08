@extends('layouts.base')

@section('title', 'MyOrders')

@section('custom-style')
    <style>
        input:not(:empty) {
            background-color: #C4C4C4;
        }
    </style>
@stop

@section('content')
    <div class="flex flex-col w-full">
        <div class="relative w-full">
            <img src="/images/bgmyorders.png" alt="" srcset="" class="w-full">
            <div
                class="w-[700px] rounded-xl px-16 py-8 bottom-[-80px] absolute ml-auto mr-auto left-0 right-0 bg-white shadow-lg">
                <div class="bg-[#80D8FB] w-[560px] h-[129px] flex rounded-xl shadow-xl m-auto font-rubik">
                    <div class="flex m-auto space-x-4">
                        <img src="/images/vectormyorders.png" alt="">
                        <h1 class="text-6xl font-bold">My Orders</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-row items-center flex-wrap pt-32 w-full px-[75px] justify-center gap-12 my-20">
            {{-- @php(dd($myOrder)) --}}
            @foreach ($myOrder as $order)
            @if($order->status == 'finished')
            <div class="h-60 max-w-xl w-full bg-[#E7F8FF] rounded-xl relative">
                <div>
                    <div class="mt-14 ml-14">
                        <span class="absolute justify-center p-2 text-sm font-bold text-[#68D5FF] top-3 left-4">Sewa
                            Selesai</span>
                        <div class="flex">
                            <img src="/images/lapfutsal.png" alt="" class="w-40 h-40">
                            <div class="flex flex-row mt-12 ml-4">
                                <img src="/images/vectorlokasi2.png" alt="" class="w-16 h-12">
                                <div class="flex-col">
                                    <h1 class="text-3xl font-black text-[#2D93BF]">{{ $order->lapangan->venueName }}</h1>
                                    <h3 class="text-lg text-[#2D93BF]">{{ $order->lapangan->address }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="absolute p-2 text-sm font-bold top-3 right-5">
                            <span
                                class="inline-flex items-center px-2 py-0.5 rounded-lg text-sm font-medium bg-[#68D5FF] text-white">Selesai</span>
                        </span>
                    </div>
                </div>
            </div>

            @elseif ($order->status == 'pending')
            <div class="relative w-full max-w-xl h-60 rounded-xl" style="background-image: url(/images/cardmyorders.png)">
                <div>
                    <div class="mt-14 ml-14">
                        <span class="absolute justify-center p-2 text-sm font-bold text-[#68D5FF] top-3 left-4">Sewa
                            Saat Ini</span>
                        <div class="flex">
                            <a href="#" onclick="window.location='https://goo.gl/maps/gAz69tT8exCXJ4JP8';" class="h-32 mt-4 w-44">
                                <img src="/images/map.png" alt="" class="w-full h-full">
                              </a>
                            <div class="flex flex-row mt-12 ml-4">
                                <img src="/images/vectorlokasi2.png" alt="" class="w-16 h-12">
                                <div class="flex-col">
                                    <h1 class="text-3xl font-black text-[#2D93BF]">{{ $order->lapangan->venueName }}</h1>
                                    <h3 class="text-lg text-[#2D93BF]">{{ $order->lapangan->venueName }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="absolute p-2 text-sm font-bold top-3 right-5">
                            <span
                                class="inline-flex items-center px-2 py-0.5 rounded-lg text-sm font-medium bg-[#68D5FF] text-white">Menunggu Konfiirmasi</span>
                        </span>
                    </div>
                </div>
            </div>

            @elseif ($order->status == 'ongoing')
            <div class="relative w-full max-w-xl h-60 rounded-xl" style="background-image: url(/images/cardmyorders.png)">
                <div>
                    <div class="mt-14 ml-14">
                        <span class="absolute justify-center p-2 text-sm font-bold text-[#68D5FF] top-3 left-4">Sewa
                            Saat Ini</span>
                        <div class="flex">
                            <a href="#" onclick="window.location='https://goo.gl/maps/gAz69tT8exCXJ4JP8';" class="h-32 mt-4 w-44">
                                <img src="/images/map.png" alt="" class="w-full h-full">
                              </a>
                            <div class="flex flex-row mt-12 ml-4">
                                <img src="/images/vectorlokasi2.png" alt="" class="w-16 h-12">
                                <div class="flex-col">
                                    <h1 class="text-3xl font-black text-[#2D93BF]">{{ $order->lapangan->venueName }}</h1>
                                    <h3 class="text-lg text-[#2D93BF]">{{ $order->lapangan->venueName }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="absolute p-2 text-sm font-bold top-3 right-5">
                            <span
                                class="inline-flex items-center px-2 py-0.5 rounded-lg text-sm font-medium bg-[#68D5FF] text-white">Saat Ini</span>
                        </span>
                    </div>
                </div>
            </div>

            @endif
            @endforeach
        </div>
    </div>

    </div>
@stop

@section('layouts.footer')

@endsection
