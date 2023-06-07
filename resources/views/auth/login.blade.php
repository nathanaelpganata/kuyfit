@extends('layouts.base')

@section('title', 'Signin')
@section('content')
    <div class="flex flex-row items-center justify-center h-screen gap-0 px-6 my-20 xl:gap-10 md:my-0">
        <div class="flex flex-col lg:w-[650px]">
            <div class="flex flex-col items-center gap-2 sm:flex-row">
                <h1 class="text-3xl font-semibold">Login to </h1>
                <img src="{{ asset('images/logo-singup.png') }}" alt="logo" class="w-[200px] h-[53px]">
            </div>
            <form class="flex flex-col gap-4 mt-6" action="" method="POST">
                @csrf
                <label class="text-lg font-medium">Email</label>
                <input type="email"
                    class="px-3 py-2 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-400"
                    placeholder="Insert your email here." name="email">
                <label class="text-lg font-medium">Password</label>
                <input type="password"
                    class="px-3 py-2 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-400"
                    placeholder="Insert your Password here." name="password">
                <button type="submit"
                    class="py-2 font-medium text-white transition-colors bg-blue-500 rounded-lg hover:bg-[#01B2FE] w-[150px]">Login</button>
            </form>
            <div class="flex flex-col justify-center mt-6">
                <p class="text-lg">Don't have an account? <a href="#" class="text-blue-500 hover:underline">Sign
                        up</a></p>
                <a href="/" class="mt-4 text-lg hover:underline">Back to home</a>
            </div>
        </div>
        <div class="hidden lg:flex w-[775px] h-[445px]">
            <img src="{{ asset('/images/signin.png') }}" alt="signin" width="2000" height="10">
        </div>
    </div>
@endsection
