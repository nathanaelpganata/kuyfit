@extends('layouts.dashboard.app')

@section('content')
    @foreach ($orderDetails as $detail)
        {{ csrf_field() }}

        <div class="h-screen w-full bg-[#F4F4F4]">

            <div class="flex flex-row justify-between items-center m-10 mb-16">
                <h1 class="text-4xl font-bold text-left">Pesanan-{{ $detail->id }}</h1>
                @if ($detail->status == 'pending')
                    <div class="space-x-2" x-data="{openReject: false}">
                        <a href="/my/pesanan/detail/{{ $detail->id }}/accept"
                            class="shadow bg-[#27698F] hover:brightness-110 focus:shadow-outline focus:outline-none text-white text-base font-bold tracking-wider py-2 px-4 rounded-lg">Konfirmasi</a>
                            <div
                            class="relative z-0" >
                            <button @click="openReject = !openReject" class="bg-red-600 px-6 py-2 rounded-xl active:bg-red-800 hover:brightness-75">
                                Reject
                            </button>
                            <form class="absolute z-50 flex flex-col justify-center items-center gap-3 w-72 h-auto sm:w-96 sm:h-auto bg-black rounded-lg top-16 -right-10 sm:right-4 p-4" x-show="openReject" action="/my/pesanan/detail/{{ $detail->id }}/reject?reason={{ $reason }}" method="POST">
                                <div class="flex flex-row justify-between items-center w-full">
                                    <label for="reason" class="text-xl font-bold text-white tracking-wider">Reason</label>
                                    <p class="text-sm font-light text-white cursor-pointer" @click="openReject = false">Close</p>
                                </div>
                                <textarea type="text" placeholder="Place your reason for rejecting here.. (max: 255)." name="reason" id="reason" class="px-4 py-3 outline-none select-none text-white border-[1px] border-white rounded-lg w-full h-36 bg-transparent text-base" maxlength="255" ></textarea>
                                <button type="submit" class="bg-red-600 py-1.5 text-base rounded-xl hover:brightness-75 w-full">Send</button>
                            </form>
                        </div>
                        {{-- <a href="/my/pesanan/detail/{{ $detail->id }}/reject?reason=nothing"
                            class="shadow bg-[#445863] hover:brightness-110 focus:shadow-outline focus:outline-none text-white text-base font-bold tracking-wider py-2 px-4 rounded-lg">Tolak</a> --}}
                    </div>
                @elseif($detail->status == 'ongoing')
                    <div class="space-x-2">
                        <div
                            class="shadow bg-[#27698F] focus:shadow-outline focus:outline-none text-white text-base font-bold tracking-wider py-2 px-4 rounded-lg">
                            Pesanan Sedang Berjalang</div>
                    </div>
                @elseif($detail->status == 'finished')
                    <div class="space-x-2">
                        <div
                            class="shadow bg-[#27698F] focus:shadow-outline focus:outline-none text-white text-base font-bold tracking-wider py-2 px-4 rounded-lg">
                            Pesanan Berakhir</div>
                    </div>
                @endif
            </div>

            <div class="flex justify-center">
                <div class="flex flex-col w-4/5 space-y-4 bg-[#8ED6FF] rounded-2xl">
                    <form class="w-4/5 m-12">
                        <div class="flex flex-row items-center mb-6">
                            <div class="w-1/3">
                                <label for="nama" class="text-white font-bold mb-1 pr-4">Nama Pemesan</label>
                            </div>
                            <div class="w-2/3">
                                <input id="nama" type="text" name="nama"
                                    class="bg-[#3F95C5] border-4 border-none rounded-lg w-full py-2 px-4 text-white leading-tight hover:brightness-110 focus:bg-white focus:outline-[#3F95C5] focus:text-black disabled:brightness-95"
                                    value="{{ $detail->akunPenyewa->firstName . ' ' . $detail->akunPenyewa->lastName }}"
                                    disabled>
                            </div>
                        </div>
                        <div class="flex flex-row items-center mb-6">
                            <div class="w-1/3">
                                <label for="tanggal-pesanan" class="text-white font-bold mb-1 pr-8">Waktu/Tanggal
                                    Pemesanan</label>
                            </div>
                            <div class="w-2/3">
                                <input id="tanggal-pesanan" type="datetime" name="tanggal-pesanan"
                                    class="bg-[#3F95C5] border-4 border-none rounded-lg w-full py-2 px-4 text-white leading-tight hover:brightness-110 focus:bg-white focus:outline-[#3F95C5] focus:text-black disabled:brightness-95"
                                    value="{{ $detail->schedule }}" disabled>
                            </div>
                        </div>
                        <div class="flex flex-row items-center mb-6">
                            <div class="w-1/3">
                                <label for="venue" class="text-white font-bold mb-1 pr-4">Nama Venue</label>
                            </div>
                            <div class="w-2/3">
                                <input id="venue" type="text" name="venue"
                                    class="bg-[#3F95C5] border-4 border-none rounded-lg w-full py-2 px-4 text-white leading-tight hover:brightness-110 focus:bg-white focus:outline-[#3F95C5] focus:text-black disabled:brightness-95"
                                    value="{{ $detail->lapangan->venueName }}" disabled>
                            </div>
                        </div>
                        <div class="flex flex-row items-center mb-6">
                            <div class="w-1/3">
                                <label for="venue" class="text-white font-bold mb-1 pr-4">Harga Total</label>
                            </div>
                            <div class="w-2/3">
                                <input id="venue" type="text" name="venue"
                                    class="bg-[#3F95C5] border-4 border-none rounded-lg w-full py-2 px-4 text-white leading-tight hover:brightness-110 focus:bg-white focus:outline-[#3F95C5] focus:text-black disabled:brightness-95"
                                    value="{{ $detail->totalPrice }}" disabled>
                            </div>
                        </div>
                        <div class="flex flex-row items-center mb-6">
                            <div class="w-1/3">
                                <label for="timestamp" class="text-white font-bold mb-1 pr-4">Dibuat Pada</label>
                            </div>
                            <div class="w-2/3">
                                <input id="timestamp" type="datetime" name="timestamp"
                                    class="bg-[#3F95C5] border-4 border-none rounded-lg w-full py-2 px-4 text-white leading-tight hover:brightness-110 focus:bg-white focus:outline-[#3F95C5] focus:text-black disabled:brightness-95"
                                    value="{{ $detail->timeStamp }}" disabled>
                            </div>
                        </div>
                        <div class="flex flex-row mb-6">
                            <div class="w-1/3 mt-2">
                                <label for="bukti-transfer" class="text-white font-bold mb-1 pr-4">Bukti Transfer</label>
                            </div>
                            <div class="w-2/3 bg-[#3F95C5] border-4 border-none brightness-95 rounded-lg py-2 px-4 ">
                                <img src="{{ asset($detail->paymentProof) }}" alt="haha"
                                    class="object-scale-down w-4/5 mx-auto" height="50px">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    @endforeach
@endsection
