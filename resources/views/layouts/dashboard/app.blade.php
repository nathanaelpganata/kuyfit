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
    <div class="flex flex-col">
        @include('layouts.dashboard.navbar')

        <div class="flex flex-row">
            @include('layouts.dashboard.sidebar')
<<<<<<< Updated upstream

            @yield('content')
=======
            <div class="lg:pl-[260px] pt-20 bg-white w-full" >
                @yield('content')
            </div>
>>>>>>> Stashed changes
        </div>
    </div>
</body>

</html>
