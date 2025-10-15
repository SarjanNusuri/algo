<header class="fixed z-100 p-2 transition-colors duration-300 w-full md:p-4 backdrop-blur">
  <nav class="w-full py-4 border-0 rounded-lg shadow-2xl dark:bg-linear-90 dark:from-empat dark:via-satu dark:to-dua ">
    <!-- <span class="material-icons">back</span> -->
    <div x-data="{open: false}" class="flex items-center justify-between px-4 mx-auto max-w-7xl md:px-8">
      <!-- Logo -->
      <div class="flex items-center space-x-3">
        <div class="flex items-center justify-center w-10 h-10 text-lg font-bold rounded-md">
          <img src="{{asset('assets/image/logo.png') }}" alt="Logo Algotri" class="object-cover w-10 h-10 rounded-lg dark:hidden">
          <img src="{{asset('assets/image/Logodark.png') }}" alt="Logo Algotri" class="object-cover w-10 h-10 rounded-lg dark:block hidden">
        </div>
          <div>
          {{-- <h1 class="text-3xl font-bold text-transparent bg-linear-45 from-satu to-tiga bg-clip-text dark:text-white">
          ALGOTRI</h1> --}}
          <div>
            <img src="{{asset('assets/image/AlgoTri.png') }}" alt="" class="w-29 block dark:hidden ">
            <img src="{{asset('assets/image/Algo.png') }}" alt="" class="w-29 dark:block hidden ">
          </div>
          <p class="text-sm text-gray-500 dark:text-gray-300">Digital Solutions</p>
        </div>
      </div>

    {{ $slot }}
    </div>

  </nav>

</header>