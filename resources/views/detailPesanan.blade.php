@extends('layouts.dashboard.app')

@section('content')

    <div class="flex flex-col items-center w-4/5 font-montserrat">

        <div class="w-4/5 mx-auto">
            
            <div class="flex flex-row justify-between items-center w-full my-4 bg-transparent">
                <div class="tracking-widest">
                    <h1 class="font-extrabold text-2xl">Pesanan/41</h1>
                </div>
                <div class="space-x-2">
                        <a href="#" class="shadow bg-[#27698F] hover:brightness-110 focus:shadow-outline focus:outline-none text-white text-base font-bold tracking-wider py-2 px-4 rounded-lg">Konfirmasi</a>
                        <a href="#" class="shadow bg-[#445863] hover:brightness-110 focus:shadow-outline focus:outline-none text-white text-base font-bold tracking-wider py-2 px-4 rounded-lg">Tolak</a>
                </div>
            </div>
        
            <div class="flex flex-col items-center h-fit w-full space-y-4 bg-[#8ED6FF] rounded-2xl">
        
                    {{-- @foreach ($pesananSewaLapangan as $p) --}}
                    <form method="GET" class="w-4/5 mt-12 ml-8">
        
                        {{ csrf_field() }}
            
                        <input type="hidden" name="id" value="{{-- $p->id --}}">
            
                        <div class="flex flex-row items-center mb-6">
                            <div class="w-1/3">
                                <label for="nama" class="text-white font-bold mb-1 pr-4">Nama Pemesan</label>
                            </div>
                            <div class="w-2/3">
                                <input id="nama" type="text" name="nama" class="bg-[#3F95C5] border-4 border-none rounded-lg w-full py-2 px-4 text-white leading-tight hover:brightness-110 focus:bg-white focus:outline-[#3F95C5] focus:text-black disabled:brightness-95" value="Dodi{{-- $p->firstName + $p->lastName--}}" disabled>
                            </div>
                        </div>
            
                        <div class="flex flex-row items-center mb-6">
                            <div class="w-1/3">
                                <label for="tanggal-pesanan" class="text-white font-bold mb-1 pr-8">Waktu/Tanggal Pemesanan</label>
                            </div>
                            <div class="w-2/3">
                                <input id="tanggal-pesanan" type="datetime" name="tanggal-pesanan" class="bg-[#3F95C5] border-4 border-none rounded-lg w-full py-2 px-4 text-white leading-tight hover:brightness-110 focus:bg-white focus:outline-[#3F95C5] focus:text-black disabled:brightness-95" value="13:00 - 15:00, 17 Maret 2023{{-- $p->dateTimeStart - $p->dateTimeEnd --}}" disabled>
                            </div>
                        </div>
            
                        <div class="flex flex-row items-center mb-6">
                            <div class="w-1/3">
                                <label for="venue" class="text-white font-bold mb-1 pr-4">Nama Venue</label>
                            </div>
                            <div class="w-2/3">
                                <input id="venue" type="text" name="venue" class="bg-[#3F95C5] border-4 border-none rounded-lg w-full py-2 px-4 text-white leading-tight hover:brightness-110 focus:bg-white focus:outline-[#3F95C5] focus:text-black disabled:brightness-95" value="Bhaskara{{-- $p->venueName --}}" disabled>
                            </div>
                        </div>
            
                        <div class="flex flex-row items-center mb-6">
                            <div class="w-1/3">
                                <label for="timestamp" class="text-white font-bold mb-1 pr-4">Dibuat Pada</label>
                            </div>
                            <div class="w-2/3">
                                <input id="timestamp" type="datetime" name="timestamp" class="bg-[#3F95C5] border-4 border-none rounded-lg w-full py-2 px-4 text-white leading-tight hover:brightness-110 focus:bg-white focus:outline-[#3F95C5] focus:text-black disabled:brightness-95" value="2023-02-15{{-- $p->timeStamp --}}" disabled>
                            </div>
                        </div>
            
                        <div class="flex flex-row mb-6">
                            <div class="w-1/3 mt-2">
                                <label for="bukti-transfer" class="text-white font-bold mb-1 pr-4">Bukti Transfer</label>
                            </div>
                            <div class="w-2/3 bg-[#3F95C5] border-4 border-none brightness-95 rounded-lg py-2 px-4 ">
                                <img src="{{ asset('/images/bukti-transfer.png')}}" alt="haha" class="object-scale-down w-1/2 mx-auto" height="50px">
                                {{--value="{{ $p->paymentProof }}" --}}
                            </div>
                        </div>
        
                    </form>
                    {{-- @endforeach --}}
            </div>

        </div>

    </div>

@endsection