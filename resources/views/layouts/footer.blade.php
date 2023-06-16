<footer class="bg-[#01B2FE] text-white py-6 h-72">
    <div class="container flex items-center justify-between mx-auto">
        <div class="flex items-center">
            <img src="/images/kuyfitlogotulisan.png" alt="Logo" class="h-20">
        </div>
        <nav class="flex flex-col items-start mt-20 font-poppins">
            <a class="mb-4 mr-4 text-xl font-bold">Menu</a>
            @if(Auth::check())
                <a href="/home" class="mr-4 text-lg text-white hover:underline underline-offset-4 decoration-[#FFFFFF] decoration-2">Home</a>
            @else
                <a href="/" class="mr-4 text-lg text-white hover:underline underline-offset-4 decoration-[#FFFFFF] decoration-2">Home</a>
            @endif
            <a href="/explore" class="mr-4 text-lg text-white hover:underline underline-offset-4 decoration-[#FFFFFF] decoration-2">Explore</a>
            <a href="/myorders" class="mr-4 text-lg text-white hover:underline underline-offset-4 decoration-[#FFFFFF] decoration-2">Orders</a>
        </nav>
        <nav class="flex flex-col items-start mt-20 mr-9 font-poppins">
            <a class="mb-4 mr-4 text-xl font-bold">Contact Info</a>
            <a href="mailto:kuyfit@gmail.com" class="mr-4 text-lg text-white hover:underline underline-offset-4 decoration-[#FFFFFF] decoration-2">kuyfit@gmail.com</a>
            <a href="https://www.google.com/maps?q=DepartemenSIstemInformasiITS, Surabaya" class="mr-4 text-lg text-white hover:underline underline-offset-4 decoration-[#FFFFFF] decoration-2">Keputih, Surabaya</a>
            <a href="tel:+123456789" class="mr-4 text-lg text-white hover:underline underline-offset-4 decoration-[#FFFFFF] decoration-2">+123 456 789</a>
        </nav>
    </div>
</footer>
