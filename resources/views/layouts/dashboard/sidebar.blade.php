<div
  class="flex-col h-screen w-[260px] bg-[#01B2FE] text-white fixed top-0 left-0 z-10 hidden lg:flex px-[30px] py-[40px] text-lg scroll overflow-y-auto"
>
  <div class="flex justify-center">
    <img
      class="w-[170px] h-[89px]"
      src="{{ asset('images/logo-dashboard.png') }}"
    />
  </div>
  <div class="flex flex-col mt-16 space-y-4">
    <a
      href="{{ route('dashboard.home') }}"
      class="flex items-center gap-2 font-semibold p-[10px] rounded-[10px] hover:bg-gradient-green-br {{ Route::currentRouteName() == 'dashboard.home' ? 'bg-white text-black' : 'bg-transparent text-white hover:bg-white/50 hover:text-black' }}"
      ><x-heroicon-s-squares-2x2
        class="w-6 h-6 {{ Route::currentRouteName() == 'dashboard.home' ? 'bg-white text-black' : 'bg-transparent text-white hover:bg-white/50' }}"
      />Dashboard</a
    >
    <a
      href="{{ route('dashboard.pesanan') }}"
      class="flex items-center gap-2 font-semibold p-[10px] rounded-[10px] hover:bg-gradient-green-br {{ Route::currentRouteName() == 'dashboard.pesanan' || Route::is('dashboard.pesanan.*') ? 'bg-white text-black' : 'bg-transparent text-white hover:bg-white/50' }}"
      ><x-tabler-receipt
        class="w-6 h-6 {{ Route::currentRouteName() == 'dashboard.pesanan' || Route::is('dashboard.pesanan.*') ? 'bg-white text-black' : 'bg-transparent text-white hover:bg-white/50 hover:text-black' }}"
      />Pesanan</a
    >
    <a
      href="{{ route('dashboard.lapangan') }}"
      class="flex items-center gap-2 font-semibold p-[10px] rounded-[10px] hover:bg-gradient-green-br {{ Route::currentRouteName() == 'dashboard.lapangan' || Route::is('dashboard.lapangan.*') ? 'bg-white text-black' : 'bg-transparent text-white hover:bg-white/50' }}"
      ><x-tabler-soccer-field
        class="w-6 h-6 {{ Route::currentRouteName() == 'dashboard.lapangan' || Route::is('dashboard.lapangan.*') ? 'bg-white text-black' : 'bg-transparent text-white hover:bg-white/50 hover:text-black' }}"
      />Lapangan</a
    >
  </div>
</div>
