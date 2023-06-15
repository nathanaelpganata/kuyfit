@extends('layouts.base')
@section('title', 'Home')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link href="https://fonts.cdnfonts.com/css/playfair-display" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .swiper-pagination-bullet {
        background-color: white;
        width: 16px;
        height: 16px;
        opacity: 100%;
        gap: 14px;
    }

    .swiper-pagination-bullet-active {
        background-color: #01B2FE !important;
        opacity: 100%;
    }

    .swiper-button-disabled {
        cursor: not-allowed;
        opacity: 0.5;
    }

    .swiper-button-next-unique .bg-[#01B2FE] .swiper-button-disabled,
    .swiper-button-prev-unique .bg-[#01B2FE] .swiper-button-disabled {
        background-color: #767E86;

    }
</style>
@section('content')
    <div class="w-full ">
        <div class="swiper mySwiper">
            <div class="font-playfair absolute top-[20%] left-8 w-[900px] z-20 text-[84px] text-white">
                <h1>
                    Start your unforgettable
                    sport with us.
                </h1>
            </div>
            <div class="font-rubik absolute bottom-2 font- left-8 w-[900px] z-20 text-xl text-white">
                <h1>
                    The best sport venues for your sport
                </h1>
            </div>
            <div class="swiper-wrapper relative">

                <div class="swiper-slide">
                    <img class="w-screen z-10" src="{{ asset('/images/landing-bola.png') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="w-screen z-10" src="{{ asset('/images/landing-bola.png') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="w-screen z-10" src="{{ asset('/images/landing-bola.png') }}" alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="mt-[140px] mx-8">
        <div class="flex flex-col gap-5">
            <h1 class="font-playfair text-[#767E86] text-6xl">
                Popular Sports Venues
            </h1>
            <hr class="bg-[#01B2FE] h-1 w-[320px]">
        </div>
        <div class="flex flex-row items-center justify-between mt-4">
            <h1 class="font-rubik text-2xl text-[#767E86]">
                The most popular sports venue around you, with complete facilities
            </h1>
            <div class="flex flex-row gap-[40px]">
                <a class="" href="">
                    <div
                        class="w-16 h-16 flex justify-center swiper-button-disabled items-center bg-[#01B2FE] swiper-button-prev-unique rounded-2xl">
                        <img src="{{ asset('/images/angle-left.svg') }}" alt="">
                    </div>
                </a>
                <a class="" href="">
                    <div
                        class="w-16 h-16 flex justify-center items-center bg-[#01B2FE] swiper-button-next-unique rounded-2xl">
                        <img class=" " src="{{ asset('/images/angle-right.svg') }}" alt="">
                    </div>
                </a>
            </div>
        </div>
        <div class="swiper Swiperku">
            <div class="flex swiper-wrapper mt-12  flex-row">
                @foreach ($lapangan as $l)
                    <div class="w-[460px] z-10 h-[610px] relative bg-black[/0.4] swiper-slide">
                        <img class="object-cover z-10 w-[460px] h-[610px] rounded-2xl"
                            src="{{ $l->photo }}" alt="">
                        <div class="flex absolute left-4 bottom-12 flex-col">
                            <h1 class="font-playfair text-[28px] text-white">{{ $l->venueName }}</h1>
                            <div class="flex gap-3 flex-row text-white font-rubik text-2xl">
                                <img class="w-8 h-8 -translate-x-2" src="{{ asset('/images/logo-location.svg') }}"
                                    alt="">
                                <h1>{{ $l->address }}</h1>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="">
            <div class="flex justify-end">
                <div class="flex flex-col gap-5">
                    <h1 class="font-playfair text-[#767E86] -translate-x-5 text-6xl">
                        Special Offer
                    </h1>
                    <hr class="bg-[#01B2FE] h-1 w-[320px]">
                </div>
            </div>
            <div class="flex flex-row items-center justify-between mt-4">
                <div class="flex flex-row gap-[40px]">
                    <a class="" href="">
                        <div
                            class="w-16 h-16 flex justify-center swiper-button-disabled items-center bg-[#01B2FE] swiper-button-prev-unique rounded-2xl">
                            <img src="{{ asset('/images/angle-left.svg') }}" alt="">
                        </div>
                    </a>
                    <a class="" href="">
                        <div
                            class="w-16 h-16 flex justify-center items-center bg-[#01B2FE] swiper-button-next-unique rounded-2xl">
                            <img class=" " src="{{ asset('/images/angle-right.svg') }}" alt="">
                        </div>
                    </a>
                </div>
                <h1 class="font-rubik text-2xl text-[#767E86]">
                    The most popular sports venue around you, with complete facilities
                </h1>
            </div>
            <div class="swiper Swiperku">
                <div class="flex swiper-wrapper mt-12  flex-row">
                    @foreach ($lapangan as $l)
                        <div class="w-[460px] z-10 h-[610px] rounded-2xl relative bg-black[/0.4] swiper-slide">
                            <div class="bg-[#FFF8F1] w-[460px]  rounded-2xl flex flex-col">
                                <img class="z-10 w-[460px] h-[230px] rounded-t-2xl"
                                src="{{ $l->photo }}" alt="">
                                <div class="px-6 py-4">
                                <h1 class="text-[#767E86] font-montserrat font-semibold text-[28px]">Grand Badminton Hall</h1>
                                <div class="flex flex-row gap-2 mt-2">
                                    <img src="{{ asset('/images/star.svg') }}" alt="">
                                    <img src="{{ asset('/images/star.svg') }}" alt="">
                                    <img src="{{ asset('/images/star.svg') }}" alt="">
                                    <img src="{{ asset('/images/star.svg') }}" alt="">
                                    <img src="{{ asset('/images/star.svg') }}" alt="">
                                </div>
                                <p class="text-[#172432] text-lg w-[389px] font-rubik mt-4">
                                    {{ $l->address }}
                                </p>
                                <div class="flex flex-row gap-2 mt-12 items-center">
                                    <p class="text-[#767E86] font-rubik text-xl">From</p>
                                    <p class="text-[#01B2FE] font-rubik text-[32px] mr-[25px]">{{ $l->price }}</p>
                                    <div class="w-[159px] flex justify-center items-center rounded-lg h-16 bg-[#01B2FE]">
                                        <a class="font-rubik  text-white text-xl" href="/explore">DETAILS</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                direction: "vertical",
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
            var swiper = new Swiper(".Swiperku", {
                slidesPerView: 3,
                spaceBetween: 80,
                loop: false,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next-unique',
                    prevEl: '.swiper-button-prev-unique'
                }

            });
        </script>
    @endsection



