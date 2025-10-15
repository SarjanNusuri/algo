<!-- Tentang Kami + Visi Misi (dengan flex layout) -->
<section id="about" class="py-20">
  <div class="container mx-auto px-6 lg:px-12">
    
    <!-- Flex container: Stack in mobile, side-by-side in desktop -->
    <div class="flex flex-col lg:flex-row gap-10 items-start">

      <div class="lg:w-1/2">
        <!-- Kiri: Tentang Kami -->
        <div data-aos="fade-up"> 
          <h3 class="text-3xl font-bold mb-4">Tentang AlgoTri</h3>
          <p class="text-slate-600 mb-6 dark:text-zinc-300">
            Algotri adalah startup teknologi yang bergerak di bidang pengembangan website, desain UI/UX, dan desain grafis modern.
            Kami hadir untuk membantu bisnis dan organisasi membangun identitas digital yang kuat melalui solusi inovatif, layanan berkualitas, serta kolaborasi jangka panjang.
            Dengan mengutamakan kreativitas dan teknologi terkini, Algotri menjadi mitra terpercaya dalam mewujudkan transformasi digital yang berdampak nyata.
          </p>
          <!-- List Fitur -->
          <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <!-- 1 -->
            <li class="flex gap-3 items-start">
              <div class="w-10 h-10 bg-indigo-600 text-white rounded-lg flex items-center justify-center font-bold">1</div>
              <div>
                <div class="font-semibold">Kreativitas Tanpa Batas</div>
                <div class="text-sm text-slate-500">Ide segar dan inovatif menjadi dasar setiap karya yang kami hasilkan.</div>
              </div>
            </li>
            <!-- 2 -->
            <li class="flex gap-3 items-start">
              <div class="w-10 h-10 bg-indigo-600 text-white rounded-lg flex items-center justify-center font-bold">2</div>
              <div>
                <div class="font-semibold">Lingkungan Kolaboratif</div>
                <div class="text-sm text-slate-500">Budaya kerja terbuka yang mendorong pertukaran ide dan inovasi.</div>
              </div>
            </li>
            <!-- 3 -->
            <li class="flex gap-3 items-start">
              <div class="w-10 h-10 bg-indigo-600 text-white rounded-lg flex items-center justify-center font-bold">3</div>
              <div>
                <div class="font-semibold">Nilai Inti</div>
                <div class="text-sm text-slate-500">Integritas, kreativitas, dan tanggung jawab membentuk dasar langkah kami.</div>
              </div>
            </li>
            <!-- 4 -->
            <li class="flex gap-3 items-start">
              <div class="w-10 h-10 bg-indigo-600 text-white rounded-lg flex items-center justify-center font-bold">4</div>
              <div>
                <div class="font-semibold">Fokus Klien</div>
                <div class="text-sm text-slate-500">Menempatkan kebutuhan dan kepuasan klien sebagai prioritas utama.</div>
              </div>
            </li>
          </ul>
        </div>


        <!-- Tim Kami (Masih di dalam bagian kiri) -->
        <section id="tim" class="mt-12" data-aos="fade-right">
          <h3 class="text-3xl font-bold text-center mb-5 pt-8">Tim Kami</h3>
          <div class="bg-gradient-to-b from-white to-slate-50 px-6 pb-5 rounded-2xl shadow-md">
            <div class="p-6 flex flex-col justify-center">
              <p class="text-slate-600 leading-relaxed text-center">
                Kami adalah tim kreatif di balik <span class="font-semibold text-indigo-600">Algotri</span>,
                yang terdiri dari individu dengan minat besar di bidang
                <strong>Web Development, UI/UX Design,</strong> dan <strong>Desain Grafis</strong>.
                Kami percaya bahwa kolaborasi, ide segar, dan semangat belajar adalah kunci
                untuk menciptakan solusi digital yang berdampak nyata.
              </p>
            </div>
          </div>
        </section>
      </div>

      <!-- Kanan: Visi & Misi -->
      <div id="visi-misi" class="lg:w-1/2 p-6 pb-0 lg:p-0 rounded-2xl">
        <h3 class="text-3xl font-bold text-center mb-10" data-aos="fade-up">Visi & Misi Kami</h3>

        <div class="visi-misi">
          <!-- Visi -->
          <div class="lg:w-[30rem] md:mx-auto p-8 rounded-2xl bg-white shadow-xl mb-10" data-aos="fade-left">
            <div class="flex items-center mb-4">
              <div class="icon w-14 h-14 rounded-xl bg-indigo-50 flex items-center justify-center mr-4">
                <svg class="w-7 h-7 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
              </div>
              <h4 class="font-semibold text-2xl dark:bg-linear-45 dark:from-satu dark:to-dua dark:bg-clip-text dark:text-transparent dark:font-bold">Visi</h4>
            </div>
            <p class="text-slate-600 leading-relaxed ">
              Menjadi startup teknologi terdepan yang menghadirkan solusi digital inovatif, desain kreatif,
              dan layanan unggul untuk mendukung transformasi digital di Indonesia dan dunia.
            </p>
          </div>

          <!-- Misi -->
          <h4 class="text-xl font-semibold mb-4 lg:pl-12 px-2" data-aos="fade-right">Misi Kami</h4>
          <div class="flex flex-col md:flex-row flex-wrap justify-center px-2 md:px-[3rem">
            <!-- Column 1 --> 
            <div class="lg:space-y-8 lg:mt-0 lg:mx-auto w-full lg:w-max">
              <!-- Card 1 -->
              <div class="lg:w-[11rem] lg:h-[13rem] mb-8 m-0 bg-white p-5 pt-8 rounded-xl shadow-xl" data-aos="fade-right">
                <div class="flex items-center mb-2">
                  <div class="w-10 h-10 bg-indigo-100 text-indigo-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path d="M12 3v1m0 16v1m8.66-10h-1M4.34 12h-1M16.95 7.05l-.7.7M7.76 16.24l-.7.7M16.95 16.95l-.7-.7M7.76 7.76l-.7-.7M9 12a3 3 0 106 0 3 3 0 00-6 0z"/>
                    </svg>
                  </div>
                  <h4 class="font-semibold ml-3 dark:bg-linear-45 dark:from-satu dark:to-dua dark:bg-clip-text dark:text-transparent">Inovasi</h4>
                </div>
                <p class="text-sm text-slate-500">Selalu menghadirkan solusi digital terbaru.</p>
              </div>

              <!-- Card 2 -->
              <div class="lg:w-[11rem] lg:h-[13rem] bg-white p-5 pt-8 rounded-xl shadow-xl" data-aos="fade-up" data-aos-delay="400">
                <div class="flex items-center mb-2">
                  <div class="w-10 h-10 bg-indigo-100 text-indigo-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 17.75l-6.172 3.245 1.179-6.873-5-4.868 6.9-1.002L12 2l3.093 6.252 6.9 1.002-5 4.868 1.179 6.873z"/></svg>
                  </div>
                  <h4 class="font-semibold ml-3 dark:bg-linear-45 dark:from-satu dark:to-dua dark:bg-clip-text dark:text-transparent">Kualitas</h4>
                </div>
                <p class="text-sm text-slate-500">Layanan terbaik, profesional, dan terpercaya.</p>
              </div>
            </div>

            <!-- Column 2 (Zigzag offset) -->
            <div class="lg:space-y-8 mt-8 lg:mx-auto w-full lg:w-max">
              <!-- Card 3 -->
              <div class="lg:w-[11rem] lg:h-[13rem] mb-8 m-0 bg-white p-5 pt-8 rounded-xl shadow-xl" data-aos="fade-left" data-aos-delay="200">
                <div class="flex items-center mb-2">
                  <div class="w-10 h-10 bg-indigo-100 text-indigo-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5.121 17.804A9 9 0 1118.364 4.561 9 9 0 015.121 17.804z"/></svg>
                  </div>
                  <h4 class="font-semibold ml-3 dark:bg-linear-45 dark:from-satu dark:to-dua dark:bg-clip-text dark:text-transparent">Identitas</h4>
                </div>
                <p class="text-sm text-slate-500">Memperkuat brand serta desain yang khas.</p>
              </div>

              <!-- Card 4 -->
              <div class="lg:w-[11rem] lg:h-[13rem] bg-white p-5 pt-8 rounded-xl shadow-xl" data-aos="fade-down" data-aos-delay="500">
                <div class="flex items-center mb-2">
                  <div class="w-10 h-10 bg-indigo-100 text-indigo-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 11c0-1.657 1.343-3 3-3h2a3 3 0 010 6h-2a3 3 0 01-3-3zm0 0v7m0 0a3 3 0 01-3-3H7a3 3 0 110-6h2a3 3 0 013 3z"/></svg>
                  </div>
                  <h4 class="font-semibold ml-3 dark:bg-linear-45 dark:from-satu dark:to-dua dark:bg-clip-text dark:text-transparent">Kolaborasi</h4>
                </div>
                <p class="text-sm text-slate-500">Membangun kerja sama jangka panjang dengan klien.</p>
              </div>
            </div>
          </div>
        </div>      
      </div>
    </div>
  </div>
</section>
