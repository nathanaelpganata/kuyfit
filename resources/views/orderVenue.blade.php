@extends('layouts.base')

@section('title', 'Home')
@section('content')
    <div class="">
        <img class="w-full" src="{{ asset('/images/bgbasketball.png') }}" alt="my mvp damar">
    </div>
    <div class="-translate-y-[104px] flex w-full justify-center">
        <div class="w-[699px] h-[209px] flex bg-white shadow-2xl rounded-xl">
            <div class="bg-[#80D8FB] w-[560px] h-[129px] flex rounded-xl shadow-xl m-auto font-rubik">
                <div class="m-auto">
                    <h1 class="text-6xl font-bold">{{ $lapangan->venueName }}</h1>
                </div>
            </div>
        </div>
    </div>
    {{-- Step Start --}}
    <form x-data="{ step: 1, total: 0}" action="{{ request()->route('id') }}/store" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{-- Step 1 --}}
        <div class="flex flex-row justify-center gap-[46px] pb-20" x-show="step==1">
            <div class="w-[300px] h-[300px]">
                <img class="rounded-xl" src="{{ asset('images/mayasi.png') }}" alt="lapangan">
            </div>
            <div class="flex flex-col ">
                <h2 class="text-4xl font-bold">{{ $lapangan->venueName }}</h2>
                <h3 class="text-3xl text-[#6E6F70]">Rp {{ $lapangan->price }}/jam</h3>
                <div class="flex gap-4 flex-row mt-3">
                    <img class="w-[25px]" src="{{ asset('images/logo/location.svg') }}" alt="description of myimage">
                    <div class="flex flex-col">
                        <h6 class="text-xl font-bold">Alamat</h6>
                        <p class="text-[#6E6F70] font-semibold">{{ $lapangan->address }}</p>
                    </div>
                </div>
                <div class="flex gap-4 flex-row mt-3">
                    <img class="w-[25px]" src="{{ asset('images/logo/phone.svg') }}" alt="description of myimage">
                    <div class="flex flex-col">
                        <h6 class="text-xl font-bold">No. Telepon</h6>
                        <p class="text-[#6E6F70] font-semibold">{{ $lapangan->phoneNumber }}</p>
                    </div>
                </div>
                <div class="flex gap-4 flex-row mt-3">
                    <img class="w-[28px]" src="{{ asset('images/logo/ball.svg') }}" alt="description of myimage">
                    <div class="flex flex-col">
                        <h6 class="text-xl font-bold">Fasilitas</h6>
                        <div class="flex flex-row gap-8 ml-1">
                            @if ($lapangan->wifi)
                                <div class=" flex flex-row gap-4">
                                    <img class="w-[25px]" src="{{ asset('images/logo/wifi.svg') }}"
                                        alt="description of myimage">
                                    <p class="text-[#6E6F70] font-semibold">WiFi</p>
                                </div>
                            @endif
                            @if ($lapangan->toilet)
                                <div class=" flex flex-row gap-4">
                                    <img class="w-[25px]" src="{{ asset('images/logo/toilet.svg') }}"
                                        alt="description of myimage">
                                    <p class="text-[#6E6F70] font-semibold">Toilet</p>
                                </div>
                            @endif
                            @if ($lapangan->canteen)
                                <div class=" flex flex-row gap-4">
                                    <img class="w-[25px]" src="{{ asset('images/logo/canteen.svg') }}"
                                        alt="description of myimage">
                                    <p class="text-[#6E6F70] font-semibold">Kantin</p>
                                </div>
                            @endif
                            @if ($lapangan->musalla)
                                <div class="flex flex-row gap-4">
                                    <img class="w-[25px]" src="{{ asset('images/logo/musalla.jpg') }}"
                                        alt="description of myimage">
                                    <p class="text-[#6E6F70] font-semibold">Musalla</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="flex gap-4 flex-row mt-3">
                    <img class="w-[32px]" src="{{ asset('images/logo/clock.svg') }}" alt="description of myimage">
                    <div class="flex flex-col">
                        <h6 class="text-xl font-bold">Jam Operasional</h6>
                        <p class="text-[#6E6F70] font-semibold">{{ $lapangan->oprTime }}</p>
                    </div>
                </div>
                <div class="btn flex my-5  w-[250px] h-[34px] bg-[#00B7FF] rounded-lg shadow-xl hover:brightness-75 cursor-pointer"  @click="step=2">
                    <div class="m-auto">
                        <div class="text-white ">Pilih Jadwal</div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Step 2 --}}
        <div class="flex flex-row justify-center gap-[46px] pb-20" x-show="step==2">
            <div class="relative max-w-sm">
                <label for="date">Date</label>
                <input datepicker datepicker-orientation="bottom right" id="date" name="date" type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Select date">
            </div>
            <div class="flex flex-col items-center justify-center gap-10">
                <div class="grid grid-cols-4 gap-2">
                    <div class="col-span-1">
                        <input type="checkbox" class="hidden" name="hour[]" value="5" id="5">
                        <label for='5'   class="px-2 py-1 rounded-[10px] font-semibold text-sm cursor-pointer"
                            x-bind:class="active ? 'text-[#009AD7] bg-[#80D8FB]' : 'bg-[#C4C4C4] text-black'"
                            x-data="{ active: false }" x-on:click="active = !active, total = active ? total+{{ $lapangan->price }} : total-{{ $lapangan->price }}">05:00</label>
                    </div>
                    <div class="col-span-1">
                        <input type="checkbox" class="hidden" name="hour[]" value="6" id="6">
                        <label for='6'   class="px-2 py-1 rounded-[10px] font-semibold text-sm cursor-pointer"
                            x-bind:class="active ? 'text-[#009AD7] bg-[#80D8FB]' : 'bg-[#C4C4C4] text-black'"
                            x-data="{ active: false }" x-on:click="active = !active, total = active ? total+{{ $lapangan->price }} : total-{{ $lapangan->price }}">06:00</label>
                    </div>
                    <div class="col-span-1">
                        <input type="checkbox" class="hidden" name="hour[]" value="7" id="7">
                        <label for='7'   class="px-2 py-1 rounded-[10px] font-semibold text-sm cursor-pointer"
                            x-bind:class="active ? 'text-[#009AD7] bg-[#80D8FB]' : 'bg-[#C4C4C4] text-black'"
                            x-data="{ active: false }" x-on:click="active = !active, total = active ? total+{{ $lapangan->price }} : total-{{ $lapangan->price }}">07:00</label>
                    </div>
                    <div class="col-span-1">
                        <input type="checkbox" class="hidden" name="hour[]" value="8" id="8">
                        <label for='8'   class="px-2 py-1 rounded-[10px] font-semibold text-sm cursor-pointer"
                            x-bind:class="active ? 'text-[#009AD7] bg-[#80D8FB]' : 'bg-[#C4C4C4] text-black'"
                            x-data="{ active: false }" x-on:click="active = !active, total = active ? total+{{ $lapangan->price }} : total-{{ $lapangan->price }}">08:00</label>
                    </div>
                    <div class="col-span-1">
                        <input type="checkbox" class="hidden" name="hour[]" value="9" id="9">
                        <label for='9'   class="px-2 py-1 rounded-[10px] font-semibold text-sm cursor-pointer"
                            x-bind:class="active ? 'text-[#009AD7] bg-[#80D8FB]' : 'bg-[#C4C4C4] text-black'"
                            x-data="{ active: false }" x-on:click="active = !active, total = active ? total+{{ $lapangan->price }} : total-{{ $lapangan->price }}">09:00</label>
                    </div>
                    <div class="col-span-1">
                        <input type="checkbox" class="hidden" name="hour[]" value="10" id="10">
                        <label for='10'   class="px-2 py-1 rounded-[10px] font-semibold text-sm cursor-pointer"
                            x-bind:class="active ? 'text-[#009AD7] bg-[#80D8FB]' : 'bg-[#C4C4C4] text-black'"
                            x-data="{ active: false }" x-on:click="active = !active, total = active ? total+{{ $lapangan->price }} : total-{{ $lapangan->price }}">10:00</label>
                    </div>
                    <div class="col-span-1">
                        <input type="checkbox" class="hidden" name="hour[]" value="11" id="11">
                        <label for='11'   class="px-2 py-1 rounded-[10px] font-semibold text-sm cursor-pointer"
                            x-bind:class="active ? 'text-[#009AD7] bg-[#80D8FB]' : 'bg-[#C4C4C4] text-black'"
                            x-data="{ active: false }" x-on:click="active = !active, total = active ? total+{{ $lapangan->price }} : total-{{ $lapangan->price }}">11:00</label>
                    </div>
                    <div class="col-span-1">
                        <input type="checkbox" class="hidden" name="hour[]" value="12" id="12">
                        <label for='12'   class="px-2 py-1 rounded-[10px] font-semibold text-sm cursor-pointer"
                            x-bind:class="active ? 'text-[#009AD7] bg-[#80D8FB]' : 'bg-[#C4C4C4] text-black'"
                            x-data="{ active: false }" x-on:click="active = !active, total = active ? total+{{ $lapangan->price }} : total-{{ $lapangan->price }}">12:00</label>
                    </div>
                    <div class="col-span-1">
                        <input type="checkbox" class="hidden" name="hour[]" value="13" id="13">
                        <label for='13'   class="px-2 py-1 rounded-[10px] font-semibold text-sm cursor-pointer"
                            x-bind:class="active ? 'text-[#009AD7] bg-[#80D8FB]' : 'bg-[#C4C4C4] text-black'"
                            x-data="{ active: false }" x-on:click="active = !active, total = active ? total+{{ $lapangan->price }} : total-{{ $lapangan->price }}">13:00</label>
                    </div>
                    <div class="col-span-1">
                        <input type="checkbox" class="hidden" name="hour[]" value="14" id="14">
                        <label for='14'   class="px-2 py-1 rounded-[10px] font-semibold text-sm cursor-pointer"
                            x-bind:class="active ? 'text-[#009AD7] bg-[#80D8FB]' : 'bg-[#C4C4C4] text-black'"
                            x-data="{ active: false }" x-on:click="active = !active, total = active ? total+{{ $lapangan->price }} : total-{{ $lapangan->price }}">14:00</label>
                    </div>
                    <div class="col-span-1">
                        <input type="checkbox" class="hidden" name="hour[]" value="15" id="15">
                        <label for='15'   class="px-2 py-1 rounded-[10px] font-semibold text-sm cursor-pointer"
                            x-bind:class="active ? 'text-[#009AD7] bg-[#80D8FB]' : 'bg-[#C4C4C4] text-black'"
                            x-data="{ active: false }" x-on:click="active = !active, total = active ? total+{{ $lapangan->price }} : total-{{ $lapangan->price }}">15:00</label>
                    </div>
                    <div class="col-span-1">
                        <input type="checkbox" class="hidden" name="hour[]" value="16" id="16">
                        <label for='16'   class="px-2 py-1 rounded-[10px] font-semibold text-sm cursor-pointer"
                            x-bind:class="active ? 'text-[#009AD7] bg-[#80D8FB]' : 'bg-[#C4C4C4] text-black'"
                            x-data="{ active: false }" x-on:click="active = !active, total = active ? total+{{ $lapangan->price }} : total-{{ $lapangan->price }}">16:00</label>
                    </div>
                    <div class="col-span-1">
                        <input type="checkbox" class="hidden" name="hour[]" value="17" id="17">
                        <label for='17'   class="px-2 py-1 rounded-[10px] font-semibold text-sm cursor-pointer"
                            x-bind:class="active ? 'text-[#009AD7] bg-[#80D8FB]' : 'bg-[#C4C4C4] text-black'"
                            x-data="{ active: false }" x-on:click="active = !active, total = active ? total+{{ $lapangan->price }} : total-{{ $lapangan->price }}">17:00</label>
                    </div>
                    <div class="col-span-1">
                        <input type="checkbox" class="hidden" name="hour[]" value="18" id="18">
                        <label for='18'   class="px-2 py-1 rounded-[10px] font-semibold text-sm cursor-pointer"
                            x-bind:class="active ? 'text-[#009AD7] bg-[#80D8FB]' : 'bg-[#C4C4C4] text-black'"
                            x-data="{ active: false }" x-on:click="active = !active, total = active ? total+{{ $lapangan->price }} : total-{{ $lapangan->price }}">18:00</label>
                    </div>
                    <div class="col-span-1">
                        <input type="checkbox" class="hidden" name="hour[]" value="19" id="19">
                        <label for='19'   class="px-2 py-1 rounded-[10px] font-semibold text-sm cursor-pointer"
                            x-bind:class="active ? 'text-[#009AD7] bg-[#80D8FB]' : 'bg-[#C4C4C4] text-black'"
                            x-data="{ active: false }" x-on:click="active = !active, total = active ? total+{{ $lapangan->price }} : total-{{ $lapangan->price }}">19:00</label>
                    </div>
                    <div class="col-span-1">
                        <input type="checkbox" class="hidden" name="hour[]" value="20" id="20">
                        <label for='20'   class="px-2 py-1 rounded-[10px] font-semibold text-sm cursor-pointer"
                            x-bind:class="active ? 'text-[#009AD7] bg-[#80D8FB]' : 'bg-[#C4C4C4] text-black'"
                            x-data="{ active: false }" x-on:click="active = !active, total = active ? total+{{ $lapangan->price }} : total-{{ $lapangan->price }}">20:00</label>
                    </div>
                    <div class="col-span-1">
                        <input type="checkbox" class="hidden" name="hour[]" value="21" id="21">
                        <label for='21'   class="px-2 py-1 rounded-[10px] font-semibold text-sm cursor-pointer"
                            x-bind:class="active ? 'text-[#009AD7] bg-[#80D8FB]' : 'bg-[#C4C4C4] text-black'"
                            x-data="{ active: false }" x-on:click="active = !active, total = active ? total+{{ $lapangan->price }} : total-{{ $lapangan->price }}">21:00</label>
                    </div>
                    <div class="col-span-1">
                        <input type="checkbox" class="hidden" name="hour[]" value="22" id="22">
                        <label for='22'   class="px-2 py-1 rounded-[10px] font-semibold text-sm cursor-pointer"
                            x-bind:class="active ? 'text-[#009AD7] bg-[#80D8FB]' : 'bg-[#C4C4C4] text-black'"
                            x-data="{ active: false }" x-on:click="active = !active, total = active ? total+{{ $lapangan->price }} : total-{{ $lapangan->price }}">22:00</label>
                    </div>
                    <div class="col-span-1">
                        <input type="checkbox" class="hidden" name="hour[]" value="23" id="23">
                        <label for='23'   class="px-2 py-1 rounded-[10px] font-semibold text-sm cursor-pointer"
                            x-bind:class="active ? 'text-[#009AD7] bg-[#80D8FB]' : 'bg-[#C4C4C4] text-black'"
                            x-data="{ active: false }" x-on:click="active = !active, total = active ? total+{{ $lapangan->price }} : total-{{ $lapangan->price }}">23:00</label>
                    </div>
                    <div class="col-span-1">
                        <input type="checkbox" class="hidden" name="hour[]" value="24" id="24">
                        <label for='24'   class="px-2 py-1 rounded-[10px] font-semibold text-sm cursor-pointer"
                            x-bind:class="active ? 'text-[#009AD7] bg-[#80D8FB]' : 'bg-[#C4C4C4] text-black'"
                            x-data="{ active: false }" x-on:click="active = !active, total = active ? total+{{ $lapangan->price }} : total-{{ $lapangan->price }}">24:00</label>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center w-full">
                    <div class="flex flex-row items-center justify-between w-full text-lg font-semibold text-[#24B7F1]">
                        <p>Total</p>
                        <p>Rp. <span  x-text="total"></span></p>
                    </div>
                    <p class="py-1.5 rounded-[4px] text-white font-semibold bg-[#00B7FF] mt-2 text-center cursor-pointer w-full shadow-sm shadow-black"
                        @click="step=3">Bayar</p>
                </div>
            </div>


        </div>
        {{-- Step 3 --}}
        <div class="flex flex-col items-center justify-center pb-20 max-w-md mx-auto" x-show="step==3">
            <div class="flex flex-row items-center mr-auto justify-center gap-4">
                <img src="{{ asset('images/transfer-bank.png') }}" alt="trf">
                <p class="text-lg text-[#0CA5E1] font-medium">Transfer Bank</p>
            </div>
            <hr class="w-full h-[1px] bg-slate-400 mt-4" />
            <div class="flex flex-col space-y-6 mt-10 max-w-xs w-full mx-auto" x-data="{ select: 0 }">
                <div class="flex flex-col w-full items-center"
                    x-bind:class="select == 1 ? 'bg-blue-300/30 pt-2 mb-1 rounded-sm' : ''">
                    <div class="flex flex-row justify-center items-center gap-4">
                        <input type='radio' class="hidden" name='bank' id='bca' value="bca" />
                        <img src="{{ asset('images/bank-bca.png') }}" alt="trf">
                        <label for="bca" class="text-lg font-semibold cursor-pointer" @click="select=1">Bank
                            BCA</label>
                    </div>
                    <hr class="w-full h-[1.5px] bg-slate-400 mt-2" />
                </div>
                <div class="flex flex-col w-full items-center"
                    x-bind:class="select == 2 ? 'bg-blue-300/30 pt-2 mb-1 rounded-sm' : ''">
                    <div class="flex flex-row justify-center items-center gap-4">
                        <input type='radio' class="hidden" name='bank' id='mandiri' value="mandiri" />
                        <img src="{{ asset('images/bank-madiri.png') }}" alt="trf">
                        <label for="mandiri" class="text-lg font-semibold cursor-pointer" @click="select=2">Bank
                            Mandiri</label>
                    </div>
                    <hr class="w-full h-[1.5px] bg-slate-400 mt-2" />
                </div>
                <div class="flex flex-col w-full items-center"
                    x-bind:class="select == 3 ? 'bg-blue-300/30 pt-2 mb-1 rounded-sm' : ''">
                    <div class="flex flex-row justify-center items-center gap-4">
                        <input type='radio' class="hidden" name='bank' id='bri' value="bri" />
                        <img src="{{ asset('images/bank-bri.png') }}" alt="trf">
                        <label for="bri" class="text-lg font-semibold cursor-pointer" @click="select=3">Bank
                            BRI</label>
                    </div>
                    <hr class="w-full h-[1.5px] bg-slate-400 mt-2" />
                </div>
                <div class="flex flex-col w-full items-center"
                    x-bind:class="select == 4 ? 'bg-blue-300/30 pt-2 mb-1 rounded-sm' : ''">
                    <div class="flex flex-row justify-center items-center gap-4">
                        <input type='radio' class="hidden" name='bank' id='bni' value="bni" />
                        <img src="{{ asset('images/bank-bni.png') }}" alt="trf">
                        <label for="bni" class="text-lg font-semibold cursor-pointer" @click="select=4">Bank
                            BNI</label>
                    </div>
                    <hr class="w-full h-[1.5px] bg-slate-400 mt-2" />
                </div>
            </div>

            <p class="w-11/12 py-1.5 rounded-[4px] text-white font-semibold bg-[#00B7FF] mt-8 text-center cursor-pointer"
                @click="step=4">Konfirmasi</p>
        </div>

        {{-- Step 4 --}}
        <div class="flex flex-col items-center justify-center pb-20" x-show="step==4">
            <div class="flex flex-col items-center justify-center bg-[#CFF2FF] rounded-[30px] w-[563px] py-8 px-20">
                <div class="flex flex-row justify-between items-center w-full">
                    <div class="flex flex-col">
                        <label for="totalPrice" class="text-sm font-semibold">Total</label>
                        <span class="text-lg text-[#00B7FF] font-bold flex flex-row items-center gap-2">Rp.<input name="totalPrice" id="totalPrice" x-model="total" class="bg-transparent outline-none border-transparent select-none" type="number" ></input></span>
                    </div>
                    <div class="flex flex-col bg-white rounded-xl text-sm px-4 py-2 w-[224px]">
                        <h2 class="font-semibold">Account Number</h2>
                        <div class="flex flex-row justify-between w-full">
                            <p class="font-base">512512512515</p>
                            <button class="text-[#00B7FF] font-semibold">Copy</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start justify-center mt-10 text-sm space-y-4">
                    <div class="flex flex-row items-center justify-center gap-4"><span
                            class="w-6 h-6 text-center rounded-full bg-slate-300">1</span> <span>Salin nomor Rekening yang
                            anda pilih</span></div>
                    <div class="flex flex-row items-center justify-center gap-4"><span
                            class="w-6 h-6 text-center rounded-full bg-slate-300">2</span> <span>Kirim bukti transfer ke
                            kami!</span></div>
                    <label for="bukti_pembayaran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="small_size">Small file input</label>
                    <input name="bukti_pembayaran" id="bukti_pembayaran"
                        class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        type="file">
                </div>
                <button type="submit"
                    class="w-11/12 py-1.5 rounded-[4px] text-white font-semibold bg-blue-400 mt-8 text-center">Kirim</button>
            </div>
        </div>

        {{-- Step 5 --}}
        <div class="flex flex-col items-center justify-center pb-20" x-show="step==5">
            <div class="flex flex-col items-center justify-center bg-[#CFF2FF] rounded-[30px] w-[639px] py-8">
                <img src="{{ asset('images/order-complete.png') }}" alt="">
                <div class="flex flex-col items-center justify-center space-y-1 mt-4">
                    <h2 class="text-xl font-semibold text-black">Terimakasih</h2>
                    <h1 class="text-xl font-semibold text-[#009AD7]">Pembayaran Sedang Diverifikasi</h1>
                    <p class="text-sm">Konfirmasi akan disampaikan melalui email terdaftar</p>
                </div>
                <a href="/" class="px-8 py-3 rounded-lg text-white font-semibold bg-[#00B7FF] mt-6">Home</a>
            </div>
        </div>
    </form>
    {{-- Step End --}}

@endsection
