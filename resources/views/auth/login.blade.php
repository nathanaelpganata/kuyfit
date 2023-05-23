@extends('layouts.base')

@section('title', 'Signin')
@section('content')
    <div class="flex flex-row justify-center items-center h-screen gap-0 xl:gap-10 px-6 my-20 md:my-0">
        <div class="flex flex-col w-full lg:w-[650px]">
            <div class="flex flex-col sm:flex-row items-center gap-2">
                <h1 class="text-3xl font-semibold">Login to </h1>
                <img src="{{ asset('images/logo-singup.png') }}" alt="logo" class="w-[200px] h-[53px]">
            </div>
            <form class="flex flex-col gap-4 mt-6" action="" method="POST">
                @csrf
                <label class="text-lg font-medium">Email</label>
                <input type="email"
                    class="border border-gray-400 rounded-lg py-2 px-3 focus:outline-none focus:border-blue-400"
                    placeholder="Insert your email here." name="email">
                <label class="text-lg font-medium">Password</label>
                <input type="password"
                    class="border border-gray-400 rounded-lg py-2 px-3 focus:outline-none focus:border-blue-400"
                    placeholder="Insert your Password here." name="password">
                <button type="submit"
                    class="bg-blue-500 text-white font-medium py-2 rounded-lg hover:bg-blue-600 transition-colors">Login</button>
            </form>
            <div class="flex flex-col items-center justify-center mt-6">
                <p class="text-lg">Don't have an account? <a href="#" class="text-blue-500 hover:underline">Sign
                        up</a></p>
                <a href="/" class="text-lg mt-4 hover:underline">Back to home</a>
            </div>
        </div>
        <div class="hidden lg:flex w-[650px] h-[360px]">
            <img src="{{ asset('/images/signin.png') }}" alt="signin" width="2000" height="10">
        </div>
    </div>
@endsection
