@extends('layouts.dashboard.app')

@section('title', 'Tambah Opsi Bank')
@section('content')

<div class="bg-[#F4F4F4]">
    <div class="flex justify-between m-10">
        <h1 class="text-4xl font-bold text-left">Tambah Opsi Bank</h1>
        <button class="px-10 py-4 mr-3 text-xl font-bold text-white bg-[#445863] rounded-xl hover:bg-[#3F95C5]"
            onclick="simpanData()">Simpan</button>
    </div>

    <div class="p-8 m-10 my-50 bg-[#8ED6FF] rounded-xl">
        <form class="my-8">
            <div class="flex flex-row items-center mb-4">
                <label for="nama_bank" class="text-xl mr-4 font-bold text-white min-w-[300px]">Nama Bank</label>
                <input type="text" id="nama_bank" name="nama_bank"
                    class="input-field flex-2 p-2 rounded-lg bg-[#3F95C5] font-bold w-[512px] h-[53px] text-white text-xl placeholder:text-[#78B5D6]"
                    placeholder="Masukkan nama bank anda!">
            </div>

            <div class="flex flex-row items-center mb-4">
                <label for="nomor_rekening" class="text-xl mr-4 font-bold text-white min-w-[300px]">Nomor Rekening
                    Bank</label>
                <input type="number" id="nomor_rekening" name="nomor_rekening"
                    class="input-field flex-2 p-2 rounded-lg bg-[#3F95C5] font-bold w-[512px] h-[53px] text-white text-xl placeholder:text-[#78B5D6]"
                    placeholder="Masukkan nomor rekening bank anda!">
            </div>
        </form>
    </div>
</div>
@endsection
