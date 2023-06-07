<nav class="fixed top-0 flex flex-row items-center justify-between w-full h-16 px-8 pt-4 pb-4 text-xl text-white navbar bg-transparant font-poppins"
    style="z-index:9999">
    <div>
        <img src="/images/kuyfitlogotulisan.png" alt="Logo" class="h-14"><a href="/" class="text-"></a>
    </div>
    <div class="space-x-8">
        <a href="/" class="hover:underline underline-offset-4 decoration-[#01B2FE] decoration-2">Home</a>
        <a href="/explore" class="hover:underline underline-offset-4 decoration-[#01B2FE] decoration-2">Explore</a>
        <a href="/myorders" class="hover:underline underline-offset-4 decoration-[#01B2FE] decoration-2">Order</a>
    </div>
    @if(Auth::check())
    <div class="space-x-8">
        <a href="/profil">{{ Auth::user()->email }}</a>
    </div>
    @else
    <div class="space-x-8">
        <a href="/login">Login</a>
        <a href="/register" class="bg-[#01B2FE] px-4 py-3 rounded-xl">Sign up</a>
    </div>
    @endif
</nav>
<style>
    .navbar-scroll {
        background-color: #80D8FB;
        height: 80px;
    }
</style>
<script>
    // Function to toggle navbar background color on scroll
    function toggleNavbarBackground() {
        var navbar = document.querySelector('.navbar');
        var scrollPosition = window.pageYOffset;

        if (scrollPosition > 350) {
            navbar.classList.add('navbar-scroll');
        } else {
            navbar.classList.remove('navbar-scroll');
        }
    }

    // Event listener for scroll event
    window.addEventListener('scroll', toggleNavbarBackground);
</script>
