<!-- Hero -->
<section class=" text-center text-white relative overflow-hidden pt-24">
  <div class="absolute inset-0 opacity-10 bg-[url('https://www.toptal.com/designers/subtlepatterns/patterns/double-bubble-outline.png')]"></div>
  <div class="relative z-10 bg-gradient-to-r from-indigo-900 via-purple-800 to-indigo-700 mx-4 py-[5rem] rounded-2xl">
    <!-- Judul -->
    <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold mb-4">Paket Layanan AlgoTri</h1>
    <p class="md:text-lg text-sm text-slate-200 max-w-2xl mx-auto">
      Pilih paket terbaik sesuai kebutuhan digital Anda. Dari website, desain UI/UX, hingga branding grafis.
    </p>
  </div>
</section>

  <!-- Paket Web Development -->
  <section class="py-20">
    <div class="container mx-auto px-6 lg:px-12">
      <h2 class="md:text-3xl text-2xl font-bold text-center mb-12">
        <span class="bg-indigo-100 text-indigo-700 md:px-4 md:py-2 p-2 rounded-full">Paket Web Development</span>
      </h2>

      <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        
        <!-- Basic -->
        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition flex flex-col relative" data-aos="fade-up">
          <div class="text-center mb-4">
            <span class="bg-gray-100 text-gray-700 px-4 py-1 rounded-full text-sm font-bold">Basic</span>
          </div>
          <p class="text-slate-500 mb-4 text-center">Website sederhana untuk personal/portofolio.</p>
          <div class="text-center mb-6 relative">
            <span class="line-through text-slate-400">Rp 750.000</span>
            <div class="text-xl font-extrabold text-indigo-700">Rp 250.000 - Rp 500.000</div>
            {{-- <span class="absolute -top-2.5 -right-2.5 bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded-full">-40%</span> --}}
            <span class="price-badge bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded-full">-40%</span>
          </div>
          <hr class="border-t border-slate-200 mb-6">
          <ul class="text-slate-600 space-y-2 text-sm mb-6">
            <li>✔ Website statis</li>
            <li>✔ 3 Halaman</li>
            <li>✔ Desain responsif</li>
          </ul>
          <form action="{{ route('paket.store') }}" method="POST" class="mt-auto">
            @csrf
            <input type="hidden" name="nama" value="website sederhana">
            <input type="hidden" name="jenis" value="webdev">
            <input type="hidden" name="harga" value="250000">
            <button class="text-center block w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
              Pesan Paket Ini
            </button>
          </form>
        </div>

        <!-- Pro -->
        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition flex flex-col relative" data-aos="fade-up" data-aos-delay="100">
          <div class="text-center mb-4">
            <span class="bg-blue-100 text-blue-700 px-4 py-1 rounded-full text-sm font-bold">Pro</span>
          </div>
          <p class="text-slate-500 mb-4 text-center">Website bisnis dengan fitur dinamis.</p>
          <div class="text-center mb-6 relative">
            <span class="line-through text-slate-400 block">Rp 5.000.000</span>
            <div class="text-xl font-extrabold text-indigo-700">Rp 2.500.000 - Rp 4.000.000</div>
            <span class="price-badge bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded-full">-33%</span>
          </div>
          <hr class="border-t border-slate-200 mb-6">
          <ul class="text-slate-600 space-y-2 text-sm mb-6">
            <li>✔ Website dinamis</li>
            <li>✔ 6 Halaman</li>
            <li>✔ SEO dasar</li>
          </ul>
          <form action="{{ route('paket.store') }}" method="POST" class="mt-auto">
            @csrf
            <input type="hidden" name="nama" value="website bisnis">
            <input type="hidden" name="jenis" value="webdev">
            <input type="hidden" name="harga" value="2500000">
            <button class="text-center block w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
              Pesan Paket Ini
            </button>
          </form>
        </div>

        <!-- Premium -->
        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition flex flex-col relative" data-aos="fade-up" data-aos-delay="200">
          <div class="text-center mb-4">
            <span class="bg-amber-100 text-amber-700 px-4 py-1 rounded-full text-sm font-bold">Premium</span>
          </div>
          <p class="text-slate-500 mb-4 text-center">Solusi lengkap untuk perusahaan.</p>
          <div class="text-center mb-6 relative">
            <span class="line-through text-slate-400 block">Rp 15.000.000</span>
            <div class="text-xl font-extrabold text-indigo-700">Rp 5.000.000 - Rp 10.000.000</div>
            <span class="price-badge bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded-full">-29%</span>
          </div>
          <hr class="border-t border-slate-200 mb-6">
          <ul class="text-slate-600 space-y-2 text-sm mb-6">
            <li>✔ Website custom</li>
            <li>✔ Dashboard & API</li>
            <li>✔ 10 Halaman</li>
            <li>✔ Maintenance 3 bulan</li>
          </ul>
          <form action="{{ route('paket.store') }}" method="POST" class="mt-auto">
            @csrf
            <input type="hidden" name="nama" value="solusi lengkap untuk perusahaan">
            <input type="hidden" name="jenis" value="webdev">
            <input type="hidden" name="harga" value="5000000">
            <button class="text-center block w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
              Pesan Paket Ini
            </button>
          </form>
        </div>

        <!-- Paket Ultimate & Enterprise masih dikomentari -->
      </div>
    </div>
  </section>


  <!-- Paket UI/UX Design -->
  <section class="py-20 bg-slate-50">
    <div class="container mx-auto px-6 lg:px-12">
      <h2 class="md:text-3xl text-xl font-bold text-center mb-12">
        <span class="bg-purple-100 text-purple-700 md:px-4 md:py-2 p-2 rounded-full">Paket UI/UX Design</span>
      </h2>

      <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

        <!-- Basic -->
        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition flex flex-col relative" data-aos="fade-up">
          <div class="text-center mb-4">
            <span class="bg-gray-100 text-gray-700 px-4 py-1 rounded-full text-sm font-bold">Basic</span>
          </div>
          <p class="text-slate-500 mb-4 text-center">Wireframe & desain sederhana.</p>
          <div class="text-center mb-6 relative">
            <span class="line-through text-slate-400 block">Rp 8.000.000</span>
            <div class="text-xl font-extrabold text-purple-700">Rp 250.000</div>
            <span class="price-badge bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded-full">-38%</span>
          </div>
          <hr class="border-t border-slate-200 mb-6">
          <ul class="text-slate-600 space-y-2 text-sm mb-6">
            <li>✔ Wireframe sederhana</li>
            <li>✔ 3 Halaman UI</li>
            <li>✔ Feedback revisi 1x</li>
          </ul>
          <form action="{{ route('paket.store') }}" method="POST" class="mt-auto">
            @csrf
            <input type="hidden" name="nama" value="wireframe & desain sederhana">
            <input type="hidden" name="jenis" value="ui/ux">
            <input type="hidden" name="harga" value="250000">
            <button class="text-center block w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
              Pesan Paket Ini
            </button>
          </form>
        </div>
        <!-- end basic -->

        <!-- Pro -->
        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition flex flex-col relative" data-aos="fade-up" data-aos-delay="100">
          <div class="text-center mb-4">
            <span class="bg-blue-100 text-blue-700 px-4 py-1 rounded-full text-sm font-bold">Pro</span>
          </div>
          <p class="text-slate-500 mb-4 text-center">Desain UI interaktif dengan usability dasar.</p>
          <div class="text-center mb-6 relative">
            <span class="line-through text-slate-400 block">Rp 1.000.000</span>
            <div class="text-xl font-extrabold text-purple-700">Rp 450.000 - Rp 750.000</div>
            <span class="price-badge bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded-full">-25%</span>
          </div>
          <hr class="border-t border-slate-200 mb-6">
          <ul class="text-slate-600 space-y-2 text-sm mb-6">
            <li>✔ Wireframe detail</li>
            <li>✔ 6 Halaman UI</li>
            <li>✔ Prototype interaktif</li>
            <li>✔ 2x revisi</li>
          </ul>
          <form action="{{ route('paket.store') }}" method="POST" class="mt-auto">
            @csrf
            <input type="hidden" name="nama" value="desain UI interaktif dengan usability dasar">
            <input type="hidden" name="jenis" value="ui/ux">
            <input type="hidden" name="harga" value="450000">
            <button class="text-center block w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
              Pesan Paket Ini
            </button>
          </form>
        </div>
        <!-- end pro -->

        <!-- Premium -->
        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition flex flex-col relative" data-aos="fade-up" data-aos-delay="200">
          <div class="text-center mb-4">
            <span class="bg-green-100 text-green-700 px-4 py-1 rounded-full text-sm font-bold">Premium</span>
          </div>
          <p class="text-slate-500 mb-4 text-center">Desain profesional dengan riset pengguna.</p>
          <div class="text-center mb-6 relative">
            <span class="line-through text-slate-400 block">Rp 6.000.000</span>
            <div class="text-xl font-extrabold text-purple-700">Rp 2.500.000 - Rp 5.000.000</div>
            <span class="price-badge bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded-full">-25%</span>
          </div>
          <hr class="border-t border-slate-200 mb-6">
          <ul class="text-slate-600 space-y-2 text-sm mb-6">
            <li>✔ Riset pengguna</li>
            <li>✔ 10 Halaman UI</li>
            <li>✔ Prototype interaktif</li>
            <li>✔ Usability testing</li>
          </ul>
          <form action="{{ route('paket.store') }}" method="POST" class="mt-auto">
            @csrf
            <input type="hidden" name="nama" value="desain profesional dengan riset pengguna">
            <input type="hidden" name="jenis" value="ui/ux">
            <input type="hidden" name="harga" value="3000000">
            <button class="text-center block w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
              Pesan Paket Ini
            </button>
          </form>
        </div>
        <!-- end premium -->

        <!-- Ultimate (Masih dikomentari) -->
        <!--
        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition flex flex-col relative" data-aos="fade-up" data-aos-delay="300">
          <div class="text-center mb-4">
            <span class="bg-amber-100 text-amber-700 px-4 py-1 rounded-full text-sm font-bold">Ultimate</span>
          </div>
          <p class="text-slate-500 mb-4 text-center">Solusi UI/UX enterprise.</p>
          <div class="text-center mb-6 relative">
            <span class="line-through text-slate-400 block">Rp 70.000.000</span>
            <div class="text-2xl font-extrabold text-purple-700">Rp 50.000.000</div>
            <span class="price-badge bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded-full">-29%</span>
          </div>
          <hr class="border-t border-slate-200 mb-6">
          <ul class="text-slate-600 space-y-2 text-sm mb-6">
            <li>✔ Full flow mapping</li>
            <li>✔ 20 Halaman UI</li>
            <li>✔ Prototype + Animasi</li>
            <li>✔ Testing mendalam</li>
          </ul>
          <form action="" method="POST" class="mt-auto">
            @csrf
            <input type="hidden" name="nama" value="solusi UI/UX enterprise">
            <input type="hidden" name="jenis" value="ui/ux">
            <input type="hidden" name="harga" value="50000000">
            <button class="text-center block w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
              Pesan Paket Ini
            </button>
          </form>
        </div>
        -->

        <!-- Enterprise (Masih dikomentari) -->
        <!--
        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition flex flex-col relative" data-aos="fade-up" data-aos-delay="400">
          <div class="text-center mb-4">
            <span class="bg-purple-600 text-white px-4 py-1 rounded-full text-sm font-bold">Enterprise</span>
          </div>
          <p class="text-slate-500 mb-4 text-center">Custom design system skala besar.</p>
          <div class="text-center mb-6 relative">
            <span class="line-through text-slate-400 block">Rp 150.000.000</span>
            <div class="text-2xl font-extrabold text-purple-700">Rp 120.000.000</div>
            <span class="price-badge bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded-full">-20%</span>
          </div>
          <hr class="border-t border-slate-200 mb-6">
          <ul class="text-slate-600 space-y-2 text-sm mb-6">
            <li>✔ Design system lengkap</li>
            <li>✔ 30+ Halaman UI</li>
            <li>✔ Kolaborasi tim dev</li>
            <li>✔ Support 2 tahun</li>
          </ul>
          <form action="" method="POST" class="mt-auto">
            @csrf
            <input type="hidden" name="nama" value="custom design system skala besar">
            <input type="hidden" name="jenis" value="ui/ux">
            <input type="hidden" name="harga" value="120000000">
            <button class="text-center block w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
              Pesan Paket Ini
            </button>
          </form>
        </div>
        -->

      </div>
    </div>
  </section>

  <!-- Paket Desain Grafis & Branding -->
  <section class="py-20">
    <div class="container mx-auto px-6 lg:px-12">
      <h2 class="md:text-3xl text-[18px] font-bold text-center mb-12">
        <span class="bg-pink-100 text-pink-700 md:px-4 md:py-2 p-2 rounded-full">
          Paket Desain Grafis & Branding
        </span>
      </h2>

      <!-- Section: Basic -->
      <div class="mb-16 bg-white p-10 rounded-2xl shadow-lg">
        <h3 class="text-center mb-6">
          <span class="bg-blue-100 text-blue-700 md:px-4 md:py-2 p-2 rounded-full inline-block font-semibold text-xl">
            Basic
          </span>
        </h3>
        <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
          <!-- Card Basic -->
          <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition flex flex-col" data-aos="fade-up">
            <p class="text-slate-500 mb-4 text-center">Power Point</p>
            <div class="text-center mb-6 relative">
              <span class="line-through text-slate-400 block">Rp 4.000.000</span>
              <div class="text-2xl font-extrabold text-pink-700">Rp 6.000/slide</div>
              <span class="price-badge bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded-full">-38%</span>
            </div>
            <hr class="border-t border-slate-200 mb-6">
            <ul class="text-slate-600 space-y-2 text-sm mb-6">
              <li>✔ 1 Konsep desain</li>
              <li>✔ 2x revisi</li>
            </ul>
            <form action="{{ route('paket.store') }}" method="POST">
              @csrf
              <input type="hidden" name="nama" value="logo & desain sederhana">
              <input type="hidden" name="jenis" value="paket desain grafis & branding">
              <input type="hidden" name="harga" value="2500000">
              <button class="mt-auto text-center block w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
                Pesan Paket Ini
              </button>
            </form>
          </div>
          <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition flex flex-col" data-aos="fade-up">
            <p class="text-slate-500 mb-4 text-center">Desain Poster</p>
            <div class="text-center mb-6 relative">
              <span class="line-through text-slate-400 block">Rp 4.000.000</span>
              <div class="text-2xl font-extrabold text-pink-700">Rp 30.000</div>
              <span class="price-badge bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded-full">-38%</span>
            </div>
            <hr class="border-t border-slate-200 mb-6">
            <ul class="text-slate-600 space-y-2 text-sm mb-6">
              <li>✔ 2 Konsep desain</li>
              <li>✔ 2x revisi</li>
            </ul>
            <form action="{{ route('paket.store') }}" method="POST">
              @csrf
              <input type="hidden" name="nama" value="logo & desain sederhana">
              <input type="hidden" name="jenis" value="paket desain grafis & branding">
              <input type="hidden" name="harga" value="2500000">
              <button class="mt-auto text-center block w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
                Pesan Paket Ini
              </button>
            </form>
          </div>
          <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition flex flex-col" data-aos="fade-up">
            <p class="text-slate-500 mb-4 text-center">Poster infografis</p>
            <div class="text-center mb-6 relative">
              <span class="line-through text-slate-400 block">Rp 4.000.000</span>
              <div class="text-2xl font-extrabold text-pink-700">Rp 35.000 - Rp 70.000</div>
              <span class="price-badge bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded-full">-38%</span>
            </div>
            <hr class="border-t border-slate-200 mb-6">
            <ul class="text-slate-600 space-y-2 text-sm mb-6">
              <li>✔ 1 Konsep desain</li>
              <li>✔ 2x revisi</li>
            </ul>
            <form action="{{ route('paket.store') }}" method="POST">
              @csrf
              <input type="hidden" name="nama" value="logo & desain sederhana">
              <input type="hidden" name="jenis" value="paket desain grafis & branding">
              <input type="hidden" name="harga" value="2500000">
              <button class="mt-auto text-center block w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
                Pesan Paket Ini
              </button>
            </form>
          </div>
        </div>
      </div>

      <!-- Section: Middle -->
      <div class="mb-16 bg-white p-10 rounded-2xl shadow-lg">
        <h3 class="text-center mb-6">
          <span class="bg-green-100 text-green-700 md:px-4 md:py-2 p-2 rounded-full inline-block font-semibold text-xl">
            Middle
          </span>
        </h3>
        <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
          <!-- Card Basic -->
          <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition flex flex-col" data-aos="fade-up">
            <p class="text-slate-500 mb-4 text-center">Desain Kemasan.</p>
            <div class="text-center mb-6 relative">
              <span class="line-through text-slate-400 block">Rp 4.000.000</span>
              <div class="text-2xl font-extrabold text-pink-700">Rp 30.000 - Rp 60.000</div>
              <span class="price-badge bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded-full">-38%</span>
            </div>
            <hr class="border-t border-slate-200 mb-6">
            <ul class="text-slate-600 space-y-2 text-sm mb-6">
              <li>✔ 2 Konsep desain</li>
              <li>✔ 1x revisi</li>
              <li>✔ 1 tampilan mockup</li>
            </ul>
            <form action="{{ route('paket.store') }}" method="POST">
              @csrf
              <input type="hidden" name="nama" value="logo & desain sederhana">
              <input type="hidden" name="jenis" value="paket desain grafis & branding">
              <input type="hidden" name="harga" value="2500000">
              <button class="mt-auto text-center block w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
                Pesan Paket Ini
              </button>
            </form>
          </div>
          <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition flex flex-col" data-aos="fade-up">
            <p class="text-slate-500 mb-4 text-center">Feed Instagram.</p>
            <div class="text-center mb-6 relative">
              <span class="line-through text-slate-400 block">Rp 4.000.000</span>
              <div class="text-2xl font-extrabold text-pink-700">Rp 10.000/kotak</div>
              <span class="price-badge bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded-full">-38%</span>
            </div>
            <hr class="border-t border-slate-200 mb-6">
            <ul class="text-slate-600 space-y-2 text-sm mb-6">
              <li>✔ 2 Konsep layout</li>
              <li>✔ 2x revisi</li>
              <li>✔ 1 tampilan mockup</li>
            </ul>
            <form action="{{ route('paket.store') }}" method="POST">
              @csrf
              <input type="hidden" name="nama" value="logo & desain sederhana">
              <input type="hidden" name="jenis" value="paket desain grafis & branding">
              <input type="hidden" name="harga" value="2500000">
              <button class="mt-auto text-center block w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
                Pesan Paket Ini
              </button>
            </form>
          </div>
        </div>
      </div>

      <!-- Section: Premium -->
      <div class="mb-16 bg-white p-10 rounded-2xl shadow-lg">
        <h3 class="text-center mb-6">
          <span class="bg-purple-100 text-purple-700 md:px-4 md:py-2 p-2 rounded-full inline-block font-semibold text-xl">
            Pro
          </span>
        </h3>
        <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
          <!-- Card Basic -->
          <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition flex flex-col" data-aos="fade-up">
            <p class="text-slate-500 mb-4 text-center">Logo.</p>
            <div class="text-center mb-6 relative">
              <span class="line-through text-slate-400 block">Rp 4.000.000</span>
              <div class="text-2xl font-extrabold text-pink-700">Rp 100.000 - Rp 500.000</div>
              <span class="price-badge bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded-full">-38%</span>
            </div>
            <hr class="border-t border-slate-200 mb-6">
            <ul class="text-slate-600 space-y-2 text-sm mb-6">
              <li>✔ Diskusi sampai sesuai request</li>
              <li>✔ 3x revisi</li>
              <li>✔ Logo guide</li>
              <li>✔ 2 mockup </li>
            </ul>
            <form action="{{ route('paket.store') }}" method="POST">
              @csrf
              <input type="hidden" name="nama" value="logo & desain sederhana">
              <input type="hidden" name="jenis" value="paket desain grafis & branding">
              <input type="hidden" name="harga" value="2500000">
              <button class="mt-auto text-center block w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
                Pesan Paket Ini
              </button>
            </form>
          </div>
          <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition flex flex-col" data-aos="fade-up">
            <p class="text-slate-500 mb-4 text-center">Design Dokumen/Proposal.</p>
            <div class="text-center mb-6 relative">
              <span class="line-through text-slate-400 block">Rp 4.000.000</span>
              <div class="text-2xl font-extrabold text-pink-700">Rp 2.000/lembar</div>
              <span class="price-badge bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded-full">-38%</span>
            </div>
            <hr class="border-t border-slate-200 mb-6">
            <ul class="text-slate-600 space-y-2 text-sm mb-20">
              <li>✔ Diskusi sampai sesuai request</li>
              <li>✔ 3x revisi</li>
            </ul>
            <form action="{{ route('paket.store') }}" method="POST">
              @csrf
              <input type="hidden" name="nama" value="logo & desain sederhana">
              <input type="hidden" name="jenis" value="paket desain grafis & branding">
              <input type="hidden" name="harga" value="2500000">
              <button class="mt-auto text-center block w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
                Pesan Paket Ini
              </button>
            </form>
          </div>
          <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition flex flex-col" data-aos="fade-up">
            <p class="text-slate-500 mb-4 text-center">Ilustrasi Maskot.</p>
            <div class="text-center mb-6 relative">
              <span class="line-through text-slate-400 block">Rp 4.000.000</span>
              <div class="text-2xl font-extrabold text-pink-700">Rp 300.000</div>
              <span class="price-badge bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded-full">-38%</span>
            </div>
            <hr class="border-t border-slate-200 mb-6">
            <ul class="text-slate-600 space-y-2 text-sm mb-6">
              <li>✔ Diskusi Konsep sampai sesuai request</li>
              <li>✔ 3x revisi</li>
              <li>✔ 3 pose(tampak depan/samping/belakang)</li>
              <li>✔ 2 mockup </li>
            </ul>
            <form action="{{ route('paket.store') }}" method="POST">
              @csrf
              <input type="hidden" name="nama" value="logo & desain sederhana">
              <input type="hidden" name="jenis" value="paket desain grafis & branding">
              <input type="hidden" name="harga" value="2500000">
              <button class="mt-auto text-center block w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
                Pesan Paket Ini
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Customisasi -->
  <section class="py-20 bg-gradient-to-r from-purple-900 to-indigo-800 text-white">
    <div class="container mx-auto px-6 lg:px-12 text-center" data-aos="zoom-in">
      <h2 class="text-3xl font-bold mb-6">Paket Customisasi & Konsultasi</h2>
      <p class="mb-6 max-w-2xl mx-auto">Jika paket standar tidak sesuai kebutuhan, kami siap berdiskusi untuk solusi custom yang fleksibel.</p>
         <form action="{{ route('paket.store') }}" method="POST">
            @csrf
            <input type="hidden" name="nama" value="haii...">
            <input type="hidden" name="jenis" value="paket customisasi & Konsultasi">
            <input type="hidden" name="harga" value="0">
            <button class="inline-block bg-yellow-400 text-indigo-900 font-semibold py-3 px-6 rounded-lg hover:bg-yellow-300 transition">
         Hubungi Kami
        </button>
          </div>
  </section>
