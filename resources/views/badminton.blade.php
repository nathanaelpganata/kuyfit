@extends('layouts.base')

@section('title', 'Badminton')

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
            <img src="/images/bgbadminton.png" alt="" srcset="" class="w-full">
            <div
                class="w-[700px] rounded-xl px-16 py-8 bottom-[-80px] absolute ml-auto mr-auto left-0 right-0 bg-white shadow-lg">
                <div class="bg-[#80D8FB] w-[560px] h-[129px] flex rounded-xl shadow-xl m-auto font-rubik">
                    <div class="flex m-auto space-x-4">
                        <img src="/images/vectorbadminton.png" alt="">
                        <h1 class="text-6xl font-bold">Badminton</h1>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="pt-32 flex flex-row flex-wrap gap-10 px-[75px] justify-center space-x-4">
                @php($lapangans = \App\Models\Lapangan::where('sportId', '=', '3')->paginate(15))
                @foreach ($lapangans as $lapangan)
                <a href="/order/{{ $lapangan->id }}" class="block max-w-sm p-6 hover:bg-gray-100 dark:bg-white dark:hover:bg-[#80D8FB]">
                    <img src="{{ $lapangan->photo }}" alt="{{ $lapangan->venueName }}">
                    <h3 class="mt-5 mb-2 text-2xl font-bold tracking-tight text-[#363636] font-montserrat">{{ $lapangan->venueName }}</h3>
                    <div class="flex items-center space-x-2">
                        <img src="/images/vectorlokasi.png" alt="">
                        <p class="font-normal text-xl text-[#979797]">{{ $lapangan->address }}</p>
                    </div>
                </a>
                @endforeach
            </div>

            {{ $lapangans->links() }}

            {{-- <div class="my-10 mx-28">
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

    </div>
@stop

@section('layouts.footer')

@endsection
