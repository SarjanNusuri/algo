<!-- Navigation Menu -->
<div  :class="open ? 'block absolute top-full right-4 z-50 w-60 bg-white dark:bg-gray-800 shadow-lg rounded-lg p-4' : 'hidden lg:flex lg:items-center lg:space-x-6'" class="lg:static lg:w-auto">
  <div class="flex flex-col gap-3 py-2 pl-7 lg:p-0 lg:space-x-6 lg:flex-row">
    <a href="#home" class="nav-link relative text-gray-700 dark:text-gray-300 hover:text-indigo-600 after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[2px] after:bg-indigo-500 after:transition-all after:duration-300 hover:after:w-full">Beranda</a>
    <a href="#about" class="nav-link relative text-gray-700 dark:text-gray-300 hover:text-indigo-600 after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[2px] after:bg-indigo-500 after:transition-all after:duration-300 hover:after:w-full">Tentang</a>
    <a href="#services" class="nav-link relative text-gray-700 dark:text-gray-300 hover:text-indigo-600 after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[2px] after:bg-indigo-500 after:transition-all after:duration-300 hover:after:w-full">Layanan</a>
    <a href="#portfolio" class="nav-link relative text-gray-700 dark:text-gray-300 hover:text-indigo-600 after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[2px] after:bg-indigo-500 after:transition-all after:duration-300 hover:after:w-full">Portofolio</a>
    <a href="#clients" class="nav-link relative text-gray-700 dark:text-gray-300 hover:text-indigo-600 after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[2px] after:bg-indigo-500 after:transition-all after:duration-300 hover:after:w-full">Klien</a>
    <a href="#contact" class="nav-link relative text-gray-700 dark:text-gray-300 hover:text-indigo-600 after:content-[''] after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[2px] after:bg-indigo-500 after:transition-all after:duration-300 hover:after:w-full">Kontak</a>

  </div>
</div>

<!-- Right Section -->
<div class="flex items-center space-x-4 mr-0.5 md:mr-0">

  <!-- Dark Mode Toggle (Desktop only) -->
  <div class="flex items-center gap-3">
    <button
      @click="toggle()"
      class="relative hidden w-12 h-6 transition-colors rounded-full md:flex"
      :class="theme === 'dark' ? 'bg-gray-600' : 'bg-gray-300'"
      aria-label="Toggle dark mode"
    >
      <!-- Bulatan geser -->
      <span
        class="absolute top-0.5 left-0.5 w-5 h-5 bg-white rounded-full transition-transform"
        :class="theme === 'dark' ? 'translate-x-6' : 'translate-x-0'"
      ></span>

      <!-- Ikon -->
      <span
        class="absolute text-xs transition-opacity -translate-y-1/2 left-1 top-1/2"
        :class="theme === 'dark' ? 'opacity-0' : 'opacity-100'"
      >
        🌙
      </span>
      <span
        class="absolute text-xs transition-opacity -translate-y-1/2 right-1 top-1/2"
        :class="theme === 'dark' ? 'opacity-100' : 'opacity-0'"
      >
        ☀️
      </span>
    </button>
  </div>

  <!-- Start Project Button -->
  <a href="#paket" class="p-1 text-[0.50rem] ss:px-3 ss:py-2 text-white transition rounded-full shadow-md  ss:text-[0.75rem] md:text-lg lg:text-xl md:px-4 md:py-2 bg-gradient-to-r from-indigo-500 to-cyan-400 hover:opacity-90">Mulai Proyek</a>
  
  <button @click="open = !open" class="p-0 m-0 rounded-md sm:p-2 sm:ml-2 lg:hidden"   aria-label="Toggle menu">
    <svg 
      width="22" height="22" viewBox="0 0 24 24" fill="none" class="text-slate-900 dark:text-white">
      <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
    </svg>
  </button>

</div>