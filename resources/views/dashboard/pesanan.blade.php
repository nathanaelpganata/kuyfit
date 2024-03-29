@extends('layouts.dashboard.app')

@section('title', 'Dashboard | Pesanan')

@section('content')
    <div class="h-screen w-full bg-[#F4F4F4]">
        <div class="m-10">
            <h1 class="text-4xl font-bold text-left">Pesanan</h1>
        </div>
        <div class="flex justify-end mx-10 my-6">
            <select id="dataFilter" name="dataFilter" class="text-[#9AA2B1] text-base text-left w-1/5 rounded-md px-5 py-2"
                onchange="changeEntries(this.value)">
                <option value="10" {{ request()->query('entries') == 10 ? 'selected' : '' }}>10 Entries</option>
                <option value="25" {{ request()->query('entries') == 25 ? 'selected' : '' }}>25 Entries</option>
                <option value="50" {{ request()->query('entries') == 50 ? 'selected' : '' }}>50 Entries</option>
                <option value="100" {{ request()->query('entries') == 100 ? 'selected' : '' }}>100 Entries</option>
            </select>
        </div>
        <div class="mx-10">
            <table class="w-full text-base text-center">
                <thead class="text-white bg-[#61777D]">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Pemesan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tempat Pesanan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Waktu Pemesanan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga Total
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Dibuat Pada
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="text-[#092540] bg-white">
                    {{-- akunPenyewa
                    akunPemilikLapangan
                    opsiBank --}}
                    @foreach ($orders as $order)
                        <tr>
                            <td class="px-6 py-4">
                                {{ $order->akunPenyewa->firstName . ' ' . $order->akunPenyewa->lastName }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->lapangan->venueName }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->schedule }}
                            </td>
                            <td class="px-6 py-4">
                                Rp{{ number_format($order->totalPrice,0,',','.') }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->status }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->timeStamp }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="/my/pesanan/detail/{{ $order->id }}"
                                    class="text-white bg-[#0090BD] py-2 px-5 rounded-lg">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $orders->appends($_GET)->links() }}
        {{-- <div class="mx-10 my-6">
            <nav class="flex justify-end">
                <ul class="inline-flex items-center space-x-2 text-base">
                    <li>
                        <a href="#"
                            class="block px-3 py-2 ml-0 rounded-md leading-tight text-[#687083] bg-white border border-[#E4E7EB] rounded-l-lg hover:bg-blue-100 hover:text-blue-700">
                            <span class="sr-only">Previous</span>
                            <svg aria-hidden="true" class="w-5 h-5" fill="#E4E7EB" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" aria-current="page"
                            class="block px-3 py-2 ml-0 rounded-md leading-tight text-white border border-[##67B0E4] bg-[#67B0E4] hover:bg-blue-100 hover:text-blue-700">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-3 py-2 ml-0 rounded-md leading-tight text-[#687083] bg-white border border-[#E4E7EB] hover:bg-blue-100 hover:text-blue-700">2</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-3 py-2 ml-0 rounded-md leading-tight text-[#687083] bg-white border border-[#E4E7EB] rounded-r-lg hover:bg-blue-100 hover:text-blue-700">
                            <span class="sr-only">Next</span>
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div> --}}
    </div>
@endsection

<script>
    function changeEntries(entries) {
        if ('URLSearchParams' in window) {
            var searchParams = new URLSearchParams(window.location.search);
            searchParams.set("entries", entries);
            window.location.search = searchParams.toString();
        }
    }
</script>
