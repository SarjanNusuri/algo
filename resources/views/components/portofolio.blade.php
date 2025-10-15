<section id="portfolio" class="py-20">
 
    <!-- FLEX CONTAINER -->
    <div class="container mx-auto px-6 lg:px-12">
      <h3 class="text-3xl font-bold text-center mb-10" data-aos="fade-up">Portofolio Terpilih</h3>
      @forelse($portfolios as $item)
        
       
      <div class="portfolio-grid columns-1 sm:columns-2 lg:columns-3 gap-4 " data-aos="fade-up" data-aos-delay="150">
        <!-- Card 1 -->
        <a href="https://portfolio-dhtz.vercel.app">
          <div class="portfolio-item mb-4 break-inside-avoid rounded-xl overflow-hidden shadow-lg">
            <img src="{{ asset('storage/portfolio/portofolio-adhit.png') }}" alt="Project 1" class="w-full h-auto object-cover">
            <div class="p-4 bg-white">
              <div class="font-semibold">{{ $item->nama }}</div>
              <div class="text-xs text-slate-500 mt-1">{{ $item->kategori }}</div>
            </div>
          </div>
        </a>
        @empty
        <div class=" flex" >
          <div class="p-6 bg-white shadow rounded-2xl sm:w-80 lg:w-95 xl:w-110" >
           <p class="text-black text-center">
            belum ada 
           </p> 
        </div>
        </div>
        @endforelse

      </div>

     
    </div>
      
      
   
  </div>
</section>
