<div class="flex h-screen overflow-hidden" x-data="{ isSidebarOpen: window.innerWidth >= 1024 }" @resize.window="isSidebarOpen = window.innerWidth >= 1024">

  {{-- SideBar --}}
  <aside class="fixed lg:static z-40 inset-y-0 left-0 transform lg:translate-x-0 lg:opacity-100 w-64 h-full bg-white shadow-lg p-4 lg:flex flex-col" x-show="isSidebarOpen"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="-translate-x-full opacity-0"
    x-transition:enter-end="translate-x-0 opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="translate-x-0 opacity-100"
    x-transition:leave-end="-translate-x-full opacity-0">

    <!-- Tombol Close (hanya tampil di mobile, pojok kanan atas) -->
    <button @click="isSidebarOpen = false" class="absolute top-4 right-4 lg:hidden text-gray-600 hover:text-gray-800 focus:outline-none z-50">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
          viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>

    <!-- Header -->
    <div class="flex items-center gap-3 mb-6">
      <div class="w-12 h-12 flex items-center justify-center">
        <img src="{{asset('assets/image/logo.png') }}" alt="Logo Algotri" class="object-cover w-10 h-10 rounded-lg">
      </div>
      <div>
        <img src="{{asset('assets/image/AlgoTri.png') }}" alt="" class="w-29 block">
        <div class="text-sm text-gray-500">Admin Panel</div>
      </div>
    </div>

    <!-- Navigation -->
    <nav class="flex flex-col space-y-2">
      <a href="{{ route('overviewadmin') }}" class="flex items-center px-3 py-2 rounded-md bg-indigo-100 text-indigo-700 font-medium" data-view="overview">
        <i class="fa fa-line-chart mr-2" aria-hidden="true"></i>
        Overview
      </a>

      <a href="{{ route('layananadmin') }}" class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100 text-gray-700" data-view="services">
        <i class="fa fa-gears mr-2"></i>
        Layanan
      </a>

      <a href="{{ route('portofolioadmin') }}" class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100 text-gray-700" data-view="portfolio">
        <i class="fa fa-image mr-2"></i>
        Portofolio
      </a>

      <a href="{{ route('pesanadmin') }}" class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100 text-gray-700" data-view="messages">
        <i class="fa fa-envelope mr-2"></i>
        Pesan
      </a>

      <a href="{{ route('penggunaadmin') }}" class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100 text-gray-700" data-view="users">
        <i class="fa fa-users mr-2"></i>
        Pengguna
      </a>

      <a href="{{ route('pengaturanadmin') }}" class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100 text-gray-700" data-view="settings">
        <i class="fa fa-cog mr-2"></i>
        Pengaturan
      </a>
      <a href="{{ route('user') }}" class="flex items-center px-3 py-2 rounded-md hover:bg-gray-100 text-gray-700" data-view="settings">
        <i class="fa fa-eye mr-2" aria-hidden="true"></i>
        Lihat Website
      </a>

      <hr class="my-4 border-gray-200">

      <a href="{{ route('logout') }}" id="logoutBtn" class="flex items-center px-3 py-2 rounded-md text-red-600 hover:bg-red-50">
        <i class="fa fa-sign-out mr-2" aria-hidden="true"></i>
        Logout
      </a>
    </nav>

    <!-- Footer -->
    <div class="mt-auto text-sm text-gray-400 pt-6">
      © 2025 TechStartup<br>Version 1.0
    </div>
  </aside>

  <main class="flex-1 p-6 bg-gray-50 overflow-y-auto">
    <!-- TOPBAR -->
    <div class="flex justify-between items-center mb-6 bg-white md:p-5 p-2 rounded-2xl shadow">
      <div class="flex items-center gap-3">
        <!-- Sidebar toggle (mobile) -->
        <button @click="isSidebarOpen = !isSidebarOpen" id="menuToggle" class="lg:hidden p-2 rounded-md bg-gray-200 hover:bg-gray-300">
          <svg class="w-5 h-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>

        <!-- Search -->
        <div class="hidden md:flex items-center gap-2 bg-white px-3 py-2 rounded-md shadow-sm border border-gray-200">
          <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M21 21l-4.35-4.35M17 11a6 6 0 1 0-12 0 6 6 0 0 0 12 0z" />
          </svg>
          <input id="globalSearch" class="outline-none text-sm w-64 bg-transparent" placeholder="Cari di dashboard..." />
        </div>
      </div>

      <!-- Right side -->
      <div class="flex items-center gap-4">
        <!-- Notification -->
        <button id="notifBtn" class="relative p-2 hover:bg-gray-100 rounded-md">
          {{-- <svg class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0 1 18 14.158V11a6 6 0 0 0-5-5.917V5a1 1 0 0 0-2 0v.083A6 6 0 0 0 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 1 1-6 0v-1m6 0H9" />
          </svg> --}}
          <i class="fa fa-bell"></i>
          <span id="notifCount" class="absolute -top-1 -right-1 bg-red-500 text-white text-xs px-1.5 py-0.5 rounded-full">0</span>
        </button>

        <!-- Profile Dropdown -->
        <div class="relative" x-data="{ open: false }" @click.away="open = false">
          <!-- Toggle Button -->
          <button
            @click="open = !open"
            class="flex items-center gap-3 focus:outline-none"
            id="userDropdownBtn"
          >
            <!-- Foto Profil -->
            <img src="{{ asset('assets/image/AlgoTri.png') }}"
                alt="profile"
                class="w-10 h-10 rounded-full object-cover" />

            <!-- Info Pengguna -->
            <div class="text-left">
              <div class="text-sm font-semibold">Admin</div>
              <div class="text-xs text-gray-500">Administrator</div>
            </div>
          </button>

          <!-- Dropdown Menu -->
          <div
            x-show="open"
            x-transition
            class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg z-50"
            style="display: none;"
          >
            <a href="{{ route('profiladmin') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">Profil</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Pengaturan</a>
            <div class="border-t border-gray-200"></div>
            <a href="#" id="logoutDrop" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Keluar</a>
          </div>
        </div>

      </div>
    </div>

    <!-- CONTENT AREA -->
    <div id="views" class="space-y-6">
      <!-- Tambahkan section lain seperti view-services, view-portfolio, dll. -->
        {{ $slot }}
    </div>
  </main>

</div>

