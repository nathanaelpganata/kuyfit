@extends('layouts.dashboard.app')

@section('title', 'Dashboard | Lapangan')

@section('content')
    <div class="mt-[38px] mx-[55px]">
        <div class="flex justify-between">
            <div>
                <h1 class="text-4xl font-bold">
                    Tambahkan Lapangan anda!
                </h1>
            </div>
            <button
                class="flex btn text-white bg-[#445863] rounded-xl w-[148px] h-[53px] font-bold text-center text-lg items-center justify-center">
                Simpan
            </button>
        </div>
        <div class="bg-[#8ED6FF] pb-8 ml-[21px] mt-12 rounded-xl">
            <div class="flex flex-col gap-[22px] ml-[21px] pt-[69px]">
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <h2 class="flex items-center justify-center text-white font-semibold text-lg">Nama Lapangan</h2>
                    </div>
                    <input
                        class="w-[575px] h-[53px] rounded-lg bg-[#3F95C5] focus:outline-none px-3  placeholder:text-white/[0.3] font-bold text-white"
                        placeholder="Masukkan nama lapangan anda!" type="text">
                </div>
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <h2 class="flex items-center justify-center text-white font-semibold text-lg">Jenis Lapangan</h2>
                    </div>
                    <div class="relative">
                        <select
                            class="w-[575px] appearance-none h-[53px] rounded-lg bg-[#3F95C5] focus:outline-none px-3  placeholder:text-white/[0.3] font-bold text-white/[0.3]">
                            <option selected>Pilih jenis venue anda</option>
                            <option value="Basket">Basket</option>
                            <option value="Futsal">Futsal</option>
                            <option value="Badminton">Badminton</option>
                        </select>
                        <img class="absolute right-1 bottom-1" src="{{ asset('/images/Dropdown.svg') }}"
                            alt="dropdown kuyfit">
                    </div>
                </div>
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <h2 class="flex items-center justify-center text-white font-semibold text-lg">Jam Operasional</h2>
                    </div>
                    <input
                        class="w-[575px] h-[53px] rounded-lg bg-[#3F95C5] focus:outline-none px-3  placeholder:text-white/[0.3] font-bold text-white"
                        placeholder="Masukkan jam operasional lapangan anda" type="text">
                </div>
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <h2 class="flex items-center justify-center text-white font-semibold text-lg">Alamat</h2>
                    </div>
                    <input
                        class="w-[575px] h-[53px] rounded-lg bg-[#3F95C5] focus:outline-none px-3  placeholder:text-white/[0.3] font-bold text-white"
                        placeholder="Masukkan alamat lapangan anda" type="text">
                </div>
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <h2 class="flex items-center justify-center text-white font-semibold text-lg">No Telepon</h2>
                    </div>
                    <input
                        class="w-[575px] h-[53px] rounded-lg bg-[#3F95C5] focus:outline-none px-3  placeholder:text-white/[0.3] font-bold text-white"
                        placeholder="Masukkan no telepon anda" type="text">
                </div>
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <h2 class="flex items-center justify-center text-white font-semibold text-lg">Fasilitas</h2>
                    </div>
                    <div class="flex flex-row gap-[63px]">
                        <input type="checkbox" value="wifi" id="wifi" class="peer/wifi hidden"/>
                        <label for="wifi"
                            class="select-none cursor-pointer rounded-lg py-3 px-6 font-bold text-white/[0.3] transition-colors-duration-200 ease-in-out peer-checked/wifi:bg-white peer-checked/wifi:text-[#3F95C5] peer-checked/wifi:border-gray-200 bg-[#3F95C5]">
                            WiFi
                        </label>
                        <input type="checkbox" value="toilet" id="toilet" class="peer/toilet hidden"/>
                        <label for="toilet"
                            class="select-none cursor-pointer rounded-lg py-3 px-6 font-bold text-white/[0.3] transition-colors-duration-200 ease-in-out peer-checked/toilet:bg-white peer-checked/toilet:text-[#3F95C5] peer-checked/toilet:border-gray-200 bg-[#3F95C5]">
                            Toilet
                        </label>
                        <input type="checkbox" value="kantin" id="kantin" class="peer/kantin hidden"/>
                        <label for="kantin"
                            class="select-none cursor-pointer rounded-lg py-3 px-6 font-bold text-white/[0.3] transition-colors-duration-200 ease-in-out peer-checked/kantin:bg-white peer-checked/kantin:text-[#3F95C5] peer-checked/kantin:border-gray-200 bg-[#3F95C5]">
                            Kantin
                        </label>
                        <input type="checkbox" value="musholla" id="musholla" class="peer/musholla hidden"/>
                        <label for="musholla"
                            class="select-none cursor-pointer rounded-lg py-3 px-6 font-bold text-white/[0.3] transition-colors-duration-200 ease-in-out peer-checked/musholla:bg-white peer-checked/musholla:text-[#3F95C5] peer-checked/musholla:border-gray-200 bg-[#3F95C5]">
                            Musholla
                        </label>
                    </div>
                </div>
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <h2 class="flex items-center justify-center text-white font-semibold text-lg">Jam Operasional</h2>
                    </div>
                    <div
                        class="w-[575px] h-[253px] rounded-lg bg-[#3F95C5] flex flex-col px-3  placeholder:text-white/[0.3] font-bold text-white">
                        <div class="flex justify-center my-4">
                        <img width="167px" height="131px" src="{{ asset('/images/mayasi.ng') }}" alt="">
                        </div>
                        <button href="" class="flex justify-center mt-10 bg-white btn text-[#3F95C5] text-sm items-center w-[105px] h-[33px] rounded-xl mx-auto">
                            Pilih Foto
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

