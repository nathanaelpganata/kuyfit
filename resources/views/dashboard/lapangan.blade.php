@extends('layouts.dashboard.app')

@section('title', 'Dashboard | Pesanan')

@section('content')
    <div class="h-screen w-full bg-[#F4F4F4]">
        <div class="flex flex-row justify-between m-10">
            <h1 class="text-4xl font-bold text-left">Pesanan</h1>
            <a href="{{ route('dashboard.lapangan.tambah') }}" class="text-lg text-left px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg cursor-pointer hover:brightness-75">Tambah Lapangan</a>
        </div>
        <div class="flex justify-end mx-10 my-6">
            <select id="data-amount-filter" name="data-amount-filter" class="text-[#9AA2B1] text-base text-left w-1/5 rounded-md px-5 py-2">
                <option value="10">10 Entries</option>
                <option value="25">25 Entries</option>
                <option value="50">50 Entries</option>
                <option value="100">100 Entries</option>
            </select>
        </div>
        <div class="mx-10 overflow-auto">
            <table class="w-full text-base text-center">
                <thead class="text-white bg-[#61777D]">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            id
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Venue Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Opr Time
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Address
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Phone Num.
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Wifi
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Toilet
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Canteen
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Musalla
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Photo
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Sport Id
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Time Stamp
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="text-[#092540] bg-white">
                    @foreach($lapangan as $l)
                    <tr>
                        <td class="px-6 py-4">
                            {{ $l->id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $l->venueName }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $l->oprTime }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $l->address }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $l->phoneNumber }}
                        </td>
                        <td class="px-6 py-4 text-white font-medium">
                            @if($l->wifi == 1) <span class="bg-green-500 px-2 py-1 rounded-lg">Yes</span> @else <span class="bg-red-500 px-2 py-1 rounded-lg">No</span> @endif
                        </td>
                        <td class="px-6 py-4 text-white font-medium">
                            @if($l->toilet == 1) <span class="bg-green-500 px-2 py-1 rounded-lg">Yes</span> @else <span class="bg-red-500 px-2 py-1 rounded-lg">No</span> @endif
                        </td>
                        <td class="px-6 py-4 text-white font-medium">
                            @if($l->canteen == 1) <span class="bg-green-500 px-2 py-1 rounded-lg">Yes</span> @else <span class="bg-red-500 px-2 py-1 rounded-lg">No</span> @endif
                        </td>
                        <td class="px-6 py-4 text-white font-medium">
                            @if($l->musalla == 1) <span class="bg-green-500 px-2 py-1 rounded-lg">Yes</span> @else <span class="bg-red-500 px-2 py-1 rounded-lg">No</span> @endif
                        </td>
                        <td class="px-6 py-4">
                            {{ $l->photo }}
                        </td>
                        <td class="px-6 py-4">
                          @if($l->sportId == 1) <span>basket</span> @elseif($l->sportId == 2) <span>futsal</span> @else <span>badminton</span> @endif
                        </td>
                        <td class="px-6 py-4">
                            {{ $l->timeStamp }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="/my/lapangan/{{ $l->id }}" class="text-white bg-[#0090BD] py-2 px-5 rounded-lg">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mx-10 my-6">
            <nav class="flex justify-end">
                <ul class="inline-flex items-center space-x-2 text-base">
                <li>
                    <a href="#" class="block px-3 py-2 ml-0 rounded-md leading-tight text-[#687083] bg-white border border-[#E4E7EB] rounded-l-lg hover:bg-blue-100 hover:text-blue-700">
                        <span class="sr-only">Previous</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="#E4E7EB" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    </a>
                </li>
                <li>
                    <a href="#" aria-current="page" class="block px-3 py-2 ml-0 rounded-md leading-tight text-white border border-[##67B0E4] bg-[#67B0E4] hover:bg-blue-100 hover:text-blue-700">1</a>
                </li>
                <li>
                    <a href="#" class="block px-3 py-2 ml-0 rounded-md leading-tight text-[#687083] bg-white border border-[#E4E7EB] hover:bg-blue-100 hover:text-blue-700">2</a>
                </li>
                <li>
                    <a href="#" class="block px-3 py-2 ml-0 rounded-md leading-tight text-[#687083] bg-white border border-[#E4E7EB] rounded-r-lg hover:bg-blue-100 hover:text-blue-700">
                        <span class="sr-only">Next</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    </a>
                </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection

