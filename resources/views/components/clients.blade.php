<section id="clients" class="py-20 ">
  <div class="container px-6 mx-auto align-items-center">
    <h3 class="mb-10 text-3xl font-bold text-center" data-aos="fade-up">Klien & Testimonial</h3>

    <div class="swiper mySwiper" data-aos="fade-up">
      <div class="swiper-wrapper">
        <!-- slide 1 -->
         @forelse($client as $clients)
        <div class="p-6 swiper-slide">
          <div class="p-6 bg-white shadow rounded-2xl">
            <div class="flex items-center gap-4 mb-4">
              <img src="{{ asset('storage/user/'. $clients->foto) }}" class="object-cover w-12 h-12 rounded-full" alt="">
              <div>
                <div class="font-semibold dark:text-slate-800">{{ $clients['nama'] }}</div>
                <div class="text-xs text-slate-500">{{ $clients['profesi'] }}</div>
              </div>
            </div>
            <p class="text-slate-600">"{{ $clients['pesan'] }}"</p>
          </div>
        </div>
        @empty
        
        <!-- slide 2 -->
        <!-- <div class="p-6 swiper-slide">
          <div class="p-6 bg-white shadow rounded-2xl">
            <div class="flex items-center gap-4 mb-4">
              <img src="https://source.unsplash.com/80x80/?face,woman" class="object-cover w-12 h-12 rounded-full" alt="">
              <div>
                <div class="font-semibold dark:text-slate-800">Arif</div>
                <div class="text-xs text-slate-500">Manager, LocalBiz</div>
              </div>
            </div>
            <p class="text-slate-600">"Desain UI/UXnya intuitive dan elegan. Proses cepat dan rapi."</p>
          </div>
        </div> -->
        
        <!-- slide 3 -->
        <div class="p-6 swiper-slide ">
          <div class="p-6 bg-white shadow rounded-2xl">
            <p class="text-black text-center">
              belum ada 
            </p> 
          </div>
        </div>
      </div>
      @endforelse

      <!-- pagination -->
      <div class="mt-6 swiper-pagination"></div>
    </div>
  </div>
</section>