@extends('layouts.dashboard.app')

@section('title', 'Dashboard | Lapangan')

@section('content')
    <form class="mt-[38px] w-full mx-[55px]" action="{{ route('dashboard.lapangan.destroy', $lapangan['id']) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <div class="flex justify-between">
            <div>
                <h1 class="text-4xl font-bold">
                    Detail Lapangan
                </h1>
            </div>
            <div class="flex gap-4">
            <a href="{{ route('dashboard.lapangan.edit', $lapangan['id']) }}"
                class="flex text-white bg-blue-500 rounded-xl w-[148px] h-[53px] font-bold text-center text-lg items-center justify-center">
                Edit
            </a>
            <button type="submit"
                class="flex text-white bg-[#ec1717] rounded-xl w-[148px] h-[53px] font-bold text-center text-lg items-center justify-center">
                Delete
            </button>
        </div>
        </div>
        <div class="bg-[#8ED6FF] pb-8 ml-[21px] mt-12 w-full rounded-xl">
            <div class="flex flex-col gap-[22px] ml-[21px] pt-[69px]">
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <label for="name" class="flex items-center justify-center text-white font-semibold text-lg">Nama Lapangan</label>
                    </div>
                    <input
                        class="w-[575px] h-[53px] rounded-lg bg-[#3F95C5] focus:outline-none px-3  placeholder:text-white/[0.3] font-bold text-white"
                        placeholder="Masukkan nama lapangan anda!" id="name" type="text" value="{{ $lapangan['venueName'] }}">
                    </input>
                </div>
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <label for="type" class="flex items-center justify-center text-white font-semibold text-lg">Jenis Lapangan</label>
                    </div>
                    <input
                    class="w-[575px] h-[53px] rounded-lg bg-[#3F95C5] focus:outline-none px-3  placeholder:text-white/[0.3] font-bold text-white"
                    placeholder="Masukkan jam operasional lapangan anda" id="operatingTime" type="text" value="{{ $lapangan['sportId'] }}" >

                </input>
                </div>
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <label for="operatingTime" class="flex items-center justify-center text-white font-semibold text-lg">Jam Operasional</label>
                    </div>
                    <input
                        class="w-[575px] h-[53px] rounded-lg bg-[#3F95C5] focus:outline-none px-3  placeholder:text-white/[0.3] font-bold text-white"
                        placeholder="Masukkan jam operasional lapangan anda" id="operatingTime" type="text" value="{{ $lapangan['oprTime'] }}" >

                    </input>
                </div>
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <label for="address" class="flex items-center justify-center text-white font-semibold text-lg">Alamat</label>
                    </div>
                    <input
                        class="w-[575px] h-[53px] rounded-lg bg-[#3F95C5] focus:outline-none px-3  placeholder:text-white/[0.3] font-bold text-white"
                        placeholder="Masukkan alamat lapangan anda" type="text" id="address" value="{{ $lapangan['address'] }}">
                </div>
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <label for="price" class="flex items-center justify-center text-white font-semibold text-lg">Harga</label>
                    </div>
                    <input
                        id="price" name="price"
                        class="w-[575px] h-[53px] rounded-lg bg-[#3F95C5] focus:outline-none px-3  placeholder:text-white/[0.3] font-bold text-white"
                        placeholder="Masukkan harga lapangan anda per jam" type="number" value="{{ $lapangan['price'] }}" >
                </div>
                <div class="flex flex-row gap-[75px] content-center">
                    <div  class="w-48 flex content-center">
                        <label for="telp" class="flex items-center justify-center text-white font-semibold text-lg">No Telepon</label>
                    </div>
                    <input
                        class="w-[575px] h-[53px] rounded-lg bg-[#3F95C5] focus:outline-none px-3  placeholder:text-white/[0.3] font-bold text-white"
                        placeholder="Masukkan no telepon anda" id="telp" type="text" value="{{ $lapangan['phoneNumber'] }}">
                </div>
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <label class="flex items-center justify-center text-white font-semibold text-lg">Fasilitas</label>
                    </div>
                    <div class="flex flex-row gap-[63px]">
                        <input type="checkbox" value="wifi" id="wifi" class="peer/wifi hidden" @if( $lapangan['wifi'] == 1 ) checked  @endif/>
                        <label for="wifi"
                            class="select-none pointer-events-none rounded-lg py-3 px-6 font-bold text-white/[0.3] transition-colors-duration-200 ease-in-out peer-checked/wifi:bg-white peer-checked/wifi:text-[#3F95C5] peer-checked/wifi:border-gray-200 bg-[#3F95C5]">
                            WiFi
                        </label>
                        <input type="checkbox" value="toilet" id="toilet" class="peer/toilet hidden" @if( $lapangan['toilet'] == 1 ) checked  @endif/>
                        <label for="toilet"
                            class="select-none pointer-events-none rounded-lg py-3 px-6 font-bold text-white/[0.3] transition-colors-duration-200 ease-in-out peer-checked/toilet:bg-white peer-checked/toilet:text-[#3F95C5] peer-checked/toilet:border-gray-200 bg-[#3F95C5]">
                            Toilet
                        </label>
                        <input type="checkbox" value="kantin" id="kantin" class="peer/kantin hidden" @if( $lapangan['canteen'] == 1 ) checked  @endif/>
                        <label for="kantin"
                            class="select-none pointer-events-none rounded-lg py-3 px-6 font-bold text-white/[0.3] transition-colors-duration-200 ease-in-out peer-checked/kantin:bg-white peer-checked/kantin:text-[#3F95C5] peer-checked/kantin:border-gray-200 bg-[#3F95C5]">
                            Kantin
                        </label>
                        <input type="checkbox" value="musholla" id="musholla" class="peer/musholla hidden" @if( $lapangan['musalla'] == 1 ) checked  @endif />
                        <label for="musholla"
                            class="select-none pointer-events-none rounded-lg py-3 px-6 font-bold text-white/[0.3] transition-colors-duration-200 ease-in-out peer-checked/musholla:bg-white peer-checked/musholla:text-[#3F95C5] peer-checked/musholla:border-gray-200 bg-[#3F95C5]">
                            Musholla
                        </label>
                    </div>
                </div>
                <div class="flex flex-row gap-[75px] content-center">
                    <div class="w-48 flex content-center">
                        <label class="flex items-center justify-center text-white font-semibold text-lg">Upload Foto</label>
                    </div>
                    <div
                        class="w-[575px] h-[253px] rounded-lg bg-[#3F95C5] flex flex-col px-3  placeholder:text-white/[0.3] font-bold text-white">
                        <div class="flex justify-center my-4">
                        <img width="167px" height="131px" src="{{ $lapangan['photo'] }}"" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

