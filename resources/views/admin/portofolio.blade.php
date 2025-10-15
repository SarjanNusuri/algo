<x-layout>
  <x-mainAdmin>
    <section id="view-overview" x-data="{showModalTambah: false}" class="view">
      <!-- Page Header -->
      <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
          <h1 class="text-2xl font-bold text-gray-800">Kelola Portfolio</h1>
        <div class="flex gap-3">
          <button @click="showModalTambah = true" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg flex items-center gap-2 text-sm font-medium transition-colors">
            <i class="fa fa-plus"></i>
            Tambah Portofolio
          </button>
        </div>
      </div>

      <!-- Portfolio Table -->
      <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
          <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
              <tr>
                <th class="text-left py-4 px-6 text-sm font-semibold text-gray-700">Judul</th>
                <th class="text-left py-4 px-6 text-sm font-semibold text-gray-700">Kategori</th>
                <th class="text-left py-4 px-6 text-sm font-semibold text-gray-700">Gambar</th>
                <th class="text-left py-4 px-6 text-sm font-semibold text-gray-700">Link</th>
                <th class="text-left py-4 px-6 text-sm font-semibold text-gray-700">Aksi</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
            @forelse($portfolio ?? []  as $item)
              <tr class="hover:bg-gray-50 transition-colors">
                                   
              <td class="py-4 px-6 text-gray-600 text-sm max-w-xs">
                                        <p class="line-clamp-2">{{ $item['title'] }}</p>
                                    </td>
                                    
                                   
                                    <td class="py-4 px-6">
                                        <span class="font-semibold text-gray-900">{{ $item['kategori'] ?? 'Custom' }}</span>
                                    </td>
                                    <td class="py-4 px-3">
                                      {{ $item['gambar'] }}

                                    </td>
                                    <td class="py-4 px-3">
                                      {{ $item['link'] }}

                                    </td>
                                 
                                    <td class="py-4 px-6 flex gap-2">
                                      <button type="submit" class="text-indigo-600 hover:text-indigo-800 text-sm">Edit</button>
                                      <form action="{{ route('portfolio.destroy',$item['id_portfolio']) }}" method="POST" onsubmit="return confirm('yakin hapus portfolio ini??')">
                                      @csrf
                                      @method('DELETE') 
                                      <button class="text-red-600 hover:text-red-800 text-sm">Hapus</button>
                                    </form>
                                    </td>
                                </tr>
            @empty <tr>
               <td colspan="7" class="py-6 px-6 text-center text-gray-500">Belum ada Portfolio.</td>
            </tr>
            @endforelse
            </tbody>
          </table>
        </div>
      </div>

      <!-- modal tambah -->
      <div x-show="showModalTambah" x-transition class="fixed inset-0 flex items-center justify-center z-50" aria-modal="true" role="dialog">
        <div @click.away="showModalTambah = false" class="bg-white text-blue-600 rounded-lg shadow-lg w-full max-w-2xl mx-4">
          <!-- Header -->
          <div class="flex items-center justify-between p-4 border-b">
            <h2 class="text-lg font-semibold">Tambah Portfolio</h2>
            <button @click="showModalTambah = false" class="text-gray-500 hover:text-gray-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>

          <!-- Body -->
          <form id="formService" action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data" class="p-4 space-y-4">
          @csrf 

            <div>
              <label class="block text-sm font-medium mb-1">Judul</label>
              <input  name="title" type="text" class="w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 px-3 py-2" required />
            </div>

            <div>
              <label class="block text-sm font-medium mb-1">Kategori</label>
              <textarea id="kategori" name="kategori" rows="4" class="w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200"></textarea>
            </div>

            <div>
              <label class="block text-sm font-medium mb-1">Gambar</label>
              <input id="gambar" name="gambar" type="file" class="w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200">
            </div>

            <div>
              <label class="block text-sm font-medium mb-1">Link</label>
              <input id="link" name="link" type="text" class="w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200">
            </div>
           
            <!-- Footer -->
            <div class="flex justify-end pt-4 border-t">
              <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Simpan</button>
            </div>
          </form>
        </div>
      </div>

    </section>
  </x-mainAdmin>
</x-layout>