<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col w-full">
        @include('layouts.dashboard.navbar')
        <div class="flex flex-row">
            @include('layouts.dashboard.sidebar')
            <div class="flex lg:pl-[260px] pt-20 bg-[#F4F4F4] w-full" >
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
