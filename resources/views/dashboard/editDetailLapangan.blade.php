@extends('layouts.dashboard.app')

@section('title', 'Dashboard | Lapangan')

@section('content')
    <form action="{{ route('dashboard.lapangan.update', $lapangan['id']) }}" method="POST" class="mt-[38px] w-full mx-[55px]"
        enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="flex justify-between">
            <div>
                <h1 class="text-4xl font-bold">
                    Edit Lapangan
                </h1>
            </div>
            <button type="submit"
                class="flex btn text-white bg-[#445863] rounded-xl w-[148px] h-[53px] font-bold text-center text-lg items-center justify-center">
                Simpan
            </button>
        </div>
        <div class="bg-[#8ED6FF] pb-8 ml-[21px] mt-12 w-full rounded-xl">
            <div class="flex flex-col gap-[22px] ml-[21px] pt-[69px]">
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <label for="name" class="flex items-center justify-center text-white font-semibold text-lg">Nama
                            Lapangan</label>
                    </div>
                    <input
                        class="w-[575px] h-[53px] rounded-lg bg-[#3F95C5] focus:outline-none px-3  placeholder:text-white/[0.3] font-bold text-white"
                        placeholder="Masukkan nama lapangan anda!" id="venueName" name="venueName" type="text"
                        value="{{ $lapangan['venueName'] }}">
                </div>
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <label for="type"
                            class="flex items-center justify-center text-white font-semibold text-lg">Jenis Lapangan</label>
                    </div>
                    <div class="relative">
                        <select value="{{ $lapangan['sportId'] }}" id="sportId" name="sportId"
                            class="w-[575px] appearance-none h-[53px] rounded-lg bg-[#3F95C5] focus:outline-none px-3  placeholder:text-white/[0.3] font-bold text-white/[0.3]">
                            <option selected>Pilih jenis venue anda</option>
                            <option value="1">Basketball</option>
                            <option value="2">Futsal</option>
                            <option value="3">Badminton</option>
                        </select>
                        <img class="absolute right-1 bottom-1" src="{{ asset('/images/Dropdown.svg') }}"
                            alt="dropdown kuyfit">
                    </div>
                </div>
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <label for="operatingTime"
                            class="flex items-center justify-center text-white font-semibold text-lg">Jam
                            Operasional</label>
                    </div>
                    <input value="{{ $lapangan['oprTime'] }}" id="oprTime" name="oprTime"
                        class="w-[575px] h-[53px] rounded-lg bg-[#3F95C5] focus:outline-none px-3  placeholder:text-white/[0.3] font-bold text-white"
                        placeholder="Masukkan jam operasional lapangan anda" type="text">
                </div>
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <label for="address"
                            class="flex items-center justify-center text-white font-semibold text-lg">Alamat</label>
                    </div>
                    <input value="{{ $lapangan['address'] }}" id="address" name="address"
                        class="w-[575px] h-[53px] rounded-lg bg-[#3F95C5] focus:outline-none px-3  placeholder:text-white/[0.3] font-bold text-white"
                        placeholder="Masukkan alamat lapangan anda" type="text">
                </div>
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <label for="price"
                            class="flex items-center justify-center text-white font-semibold text-lg">Harga</label>
                    </div>
                    <input value="{{ $lapangan['price'] }}" id="price" name="price"
                        class="w-[575px] h-[53px] rounded-lg bg-[#3F95C5] focus:outline-none px-3  placeholder:text-white/[0.3] font-bold text-white"
                        placeholder="Masukkan harga lapangan anda per jam" type="number">
                </div>
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <label for="telp" class="flex items-center justify-center text-white font-semibold text-lg">No
                            Telepon</label>
                    </div>
                    <input value="{{ $lapangan['phoneNumber'] }}" id="phoneNumber" name="phoneNumber"
                        class="w-[575px] h-[53px] rounded-lg bg-[#3F95C5] focus:outline-none px-3  placeholder:text-white/[0.3] font-bold text-white"
                        placeholder="Masukkan no telepon anda" type="text">
                </div>
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <label class="flex items-center justify-center text-white font-semibold text-lg">Fasilitas</label>
                    </div>
                    <div class="flex flex-row gap-[63px]">
                        <input type="checkbox" value="1" id="wifi" name="wifi" class="peer/wifi hidden"
                            @if ($lapangan['wifi'] == 1) checked @endif />
                        <label for="wifi"
                            class="select-none cursor-pointer rounded-lg py-3 px-6 font-bold text-white/[0.3] transition-colors-duration-200 ease-in-out peer-checked/wifi:bg-white peer-checked/wifi:text-[#3F95C5] peer-checked/wifi:border-gray-200 bg-[#3F95C5]">
                            WiFi
                        </label>
                        <input type="checkbox" value="1" id="toilet" name="toilet" class="peer/toilet hidden"
                            @if ($lapangan['toilet'] == 1) checked @endif />
                        <label for="toilet"
                            class="select-none cursor-pointer rounded-lg py-3 px-6 font-bold text-white/[0.3] transition-colors-duration-200 ease-in-out peer-checked/toilet:bg-white peer-checked/toilet:text-[#3F95C5] peer-checked/toilet:border-gray-200 bg-[#3F95C5]">
                            Toilet
                        </label>
                        <input type="checkbox" value="1" id="canteen" name="canteen" class="peer/kantin hidden"
                            @if ($lapangan['canteen'] == 1) checked @endif />
                        <label for="canteen"
                            class="select-none cursor-pointer rounded-lg py-3 px-6 font-bold text-white/[0.3] transition-colors-duration-200 ease-in-out peer-checked/kantin:bg-white peer-checked/kantin:text-[#3F95C5] peer-checked/kantin:border-gray-200 bg-[#3F95C5]">
                            Canteen
                        </label>
                        <input type="checkbox" value="1" id="musalla" name="musalla"
                            class="peer/musholla hidden" @if ($lapangan['musalla'] == 1) checked @endif />
                        <label for="musalla"
                            class="select-none cursor-pointer rounded-lg py-3 px-6 font-bold text-white/[0.3] transition-colors-duration-200 ease-in-out peer-checked/musholla:bg-white peer-checked/musholla:text-[#3F95C5] peer-checked/musholla:border-gray-200 bg-[#3F95C5]">
                            Musalla
                        </label>
                    </div>
                </div>
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <label class="flex items-center justify-center text-white font-semibold text-lg"
                            for="photo">Upload Foto</label>
                    </div>
                    <div
                        class="w-[575px] py-2 rounded-lg bg-[#3F95C5] flex flex-col px-3  placeholder:text-white/[0.3] font-bold text-white">
                        <div class="flex justify-center my-4">
                            <input type="file" id="photo" name="photo"
                                value="{{ asset($lapangan['photo']) }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
