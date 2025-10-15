<section id="home" class="pt-28">
  <div class="container px-6 mx-auto lg:px-12">
    <div class="grid items-center gap-12 lg:grid-cols-2">
      <!-- left content -->
      <div data-aos="fade-right" class="space-y-6">
        <h1 class="text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">Membangun <span class="text-transparent bg-clip-text bg-linear-180 from-satu to-tiga">Solusi Digital</span> yang Mempesona</h1>
        <p class="max-w-2xl text-lg text-slate-600 dark:text-zinc-300">Kami adalah startup digital yang berfokus pada pengembangan website, UI/UX, dan branding. AlgoTri menggabungkan logika, kreativitas, dan teknologi untuk menciptakan solusi digital yang efisien dan modern</p>

        <div class="flex flex-wrap gap-4">
          <a href="#portfolio" class="px-5 py-3 font-semibold rounded-full btn-outline">Lihat Portofolio</a>
          <a href="#contact" class="px-5 py-3 rounded-full btn-primary">Konsultasi Gratis</a>
        </div>

        <div class="grid grid-cols-3 gap-4 mt-6">
          <div class="p-4 bg-white shadow-sm rounded-xl">
            <div class="text-2xl font-bold text-indigo-600" data-count="120">{{ $proyek }}</div>
            <div class="text-xs text-slate-500">Proyek Selesai</div>
          </div>
          <div class="p-4 bg-white shadow-sm rounded-xl">
            <div class="text-2xl font-bold text-indigo-600" data-count="85">{{ $rating }}</div>
            <div class="text-xs text-slate-500">Klien Puas</div>
          </div>
          <div class="p-4 bg-white shadow-sm rounded-xl">
            <div class="text-2xl font-bold text-indigo-600" data-count="4">5</div>
            <div class="text-xs text-slate-500">Anggota Tim</div>
          </div>
        </div>
      </div>

      <!-- right visual -->
     <div data-aos="fade-left" class="relative flex items-center justify-center h-[400px] mt-30 mb-20">
       <div class="container relative top-24 h-96 w-full flex justify-center hue-rotate-animation">
      <div class="cloud relative w-72 z-50 cloud-shadow cloud-before cloud-after">
        <img src="{{asset('assets/image/AlgoTri.png') }}" alt="Logo Awan" class="mx-auto w-72 max-w-full h-auto relative z-10 font-normal p-4 rounded-lg uppercase bg-inherit dark:hidden" />
        <img src="{{asset('assets/image/Algo.png') }}" alt="Logo Awan" class="mx-auto w-72 max-w-full h-auto relative z-10 font-normal p-4 rounded-lg uppercase bg-inherit dark:block hidden" />
      </div>
    </div>
    </div>
  </div>
</section>