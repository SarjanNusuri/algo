<x-layout>
  <x-mainAdmin>
    <section x-data="{ showModalTambah: false, showModalEdit : false,service:{} }" id="view-services" class="view">
      <!-- Header -->
      <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-4">
        <div>
          <h1 class="text-2xl font-bold text-gray-800">Kelola Layanan</h1>
          <p class="text-gray-600 mt-1">Mengelola layanan yang ditawarkan AlgoTri</p>
        </div>

        <div class="flex gap-2">
          <!-- Trigger Button -->
          <button @click="showModalTambah = true" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg flex items-center gap-2 text-sm font-medium transition-colors">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Tambah Layanan
          </button>
          <button class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-lg flex items-center gap-2 text-sm font-medium transition-colors">
            <i class="fa fa-download"></i>
            Export CSV
          </button>
        </div>
      </div>

      <!-- Card Table -->
      <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
          <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
              <tr>
                <th class="text-left py-4 px-6 text-sm font-semibold text-gray-700">
                  <input type="checkbox" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" />
                </th>
                <th class="text-left py-4 px-6 text-sm font-semibold text-gray-700">Judul</th>
                <th class="text-left py-4 px-6 text-sm font-semibold text-gray-700">Deskripsi</th>
                <th class="text-left py-4 px-6 text-sm font-semibold text-gray-700">Harga</th>
                <th class="text-left py-4 px-6 text-sm font-semibold text-gray-700">Status</th>
                <th class="text-left py-4 px-6 text-sm font-semibold text-gray-700">Tanggal</th>
                <th class="text-left py-4 px-6 text-sm font-semibold text-gray-700">Aksi</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              @forelse($services ?? []  as $service)
              <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="py-4 px-6">
                                        <input type="checkbox"
                                            class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-10 h-10 bg-{{ $service['color'] ?? 'blue' }}-100 rounded-lg flex items-center justify-center">
                                                <i
                                                    class="fas fa-{{ $service['icon'] ?? 'code' }} text-{{ $service['color'] ?? 'blue' }}-600"></i>
                                            </div>
                                            <div>
                                                <span class="font-medium text-gray-900">{{ $service['title'] }}</span>
                                                <p class="text-xs text-gray-500">{{ $service['jenis'] ?? 'Development' }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 text-gray-600 text-sm max-w-xs">
                                        <p class="line-clamp-2">{{ $service['description'] }}</p>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="font-semibold text-gray-900">Rp{{ number_format( $service['price'],0,',','.') ?? 'Custom' }}</span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span
                                            class="{{ ($service['status'] ?? '') === 'setuju' ? 'text-green-600' : 'text-red-600' }}">
                                            {{ ucfirst($service['status'] ?? 'belum disetujui') }}
                                        </span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span
                                            class="text-gray-600">{{ $service['created_at'] ?? now()->format('d M Y') }}</span>
                                    </td>
                                    <td class="py-4 px-6 flex gap-2">
                                    
                                      <button @click="showModalEdit = true ; service = {{ $service->toJson() }}" class="text-indigo-600 hover:text-indigo-800 text-sm" >Edit</button>
                                    
                                      <form action="{{ route('layanan.destroy',$service['id']) }}" method="POST" onsubmit="return confirm('yakin hapus layanan ini?')">
                                      @csrf
                                      @method('DELETE') 
                                      <button class="text-red-600 hover:text-red-800 text-sm">Hapus</button>
                                    </form>
                                    </td>
                                </tr>
            @empty <tr>
               <td colspan="7" class="py-6 px-6 text-center text-gray-500">Belum ada layanan.</td>
            </tr>
            @endforelse
            </tbody>
          </table>
        </div>
      </div>

      <!-- Modal Box -->
      <div x-show="showModalTambah" x-transition class="fixed inset-0 flex items-center justify-center z-50" aria-modal="true" role="dialog">
        <div @click.away="showModalTambah = false" class="bg-white text-blue-600 rounded-lg shadow-lg w-full max-w-2xl mx-4">
          <!-- Header -->
          <div class="flex items-center justify-between p-4 border-b">
            <h2 class="text-lg font-semibold">Tambah/Edit Layanan</h2>
            <button @click="showModalTambah = false" class="text-gray-500 hover:text-gray-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>

          <!-- Body -->
          <form id="formService" action="{{ route('layanan.store') }}" method="POST" class="p-4 space-y-4">
          @csrf 
          <input type="hidden" name="user_id" id="serviceId" />

            <div>
              <label class="block text-sm font-medium mb-1">Judul</label>
              <input id="serviceTitle" name="title" type="text" class="w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 px-3 py-2" required />
            </div>

            <div>
              <label class="block text-sm font-medium mb-1">jenis</label>
              <select name="jenis" rows="4" class="w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200">
                <option name="jenis" value="web development">Web Development</option>
                <option name="jenis" value="Desain UI/UX">Design UI/UX</option>
                <option name="jenis" value="Desain Grafis & Branding">Desain Grafis & Branding</option>
              </select>
            </div>

            <div>
              <label class="block text-sm font-medium mb-1">Deskripsi</label>
              <textarea id="serviceDesc" name="description" rows="4" class="w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200"></textarea>
            </div>

            <div>
              <label class="block text-sm font-medium mb-1">Harga</label>
              <input id="servicePrice" name="price" type="text" class="w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200">
            </div>

            <div>
              <label class="block text-sm font-medium mb-1">diskon</label>
              <textarea id="serviceDisc" name="diskon" rows="4" class="w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200"></textarea>
            </div>

            <div class="hidden">
              <label class="block text-sm font-medium mb-1">Status</label>
              <input id="serviceStatus" name="status" type="text" value="pending" class="w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200">
            </div>

           

            <!-- Footer -->
            <div class="flex justify-end pt-4 border-t">
              <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Simpan</button>
            </div>
          </form>
        </div>
      </div>

      <!-- edit -->
      <div x-show="showModalEdit" x-transition class="fixed inset-0 flex items-center justify-center z-50" aria-modal="true" role="dialog">
        <div @click.away="showModalEdit = false" class="bg-white text-blue-600 rounded-lg shadow-lg w-full max-w-2xl mx-4">
          <!-- Header -->
          <div class="flex items-center justify-between p-4 border-b">
            <h2 class="text-lg font-semibold">Edit Layanan</h2>
            <button @click="showModalEdit = false" class="text-gray-500 hover:text-gray-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>

          <!-- Body -->
          <form id="formService" x-bind:action="`{{ url('/admin/layanan') }}/${service.id}`" method="POST" class="p-4 space-y-4">
          @csrf
          @method('PUT')
            <input type="hidden" name="id" x-model="service.id">
            <div>
              <label class="block text-sm font-medium mb-1">Judul</label>
              <input id="serviceTitle" name="title" type="text" x-model="service.title" class="w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 px-3 py-2"  />
            </div>

            <div>
              <label class="block text-sm font-medium mb-1">Jenis</label>
              <select id="serviceJenis" name="jenis" rows="4" x-model="service.jenis" class="w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200">
                <option name="jenis" value="web development">Web Development</option>
                <option name="jenis" value="Desain UI/UX">Desain UI/UX</option>
                <option name="jenis" value="Desain Grafis & Branding">Desain Grafis & Branding</option>
              </select>
            </div>

            <div>
              <label class="block text-sm font-medium mb-1">Deskripsi</label>
              <textarea id="serviceDesc" name="description" rows="4" x-model="service.description" class="w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200"></textarea>
            </div>

            <div>
              <label class="block text-sm font-medium mb-1">Harga</label>
              <input id="servicePrice" name="price" type="text" x-model="service.price" class="w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200">
            </div>

            <div>
              <label class="block text-sm font-medium mb-1">Diskon</label>
              <textarea id="serviceDisc" name="diskon" rows="4" x-model="service.diskon" class="w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200"></textarea>
            </div>

            <div>
              <label class="block text-sm font-medium mb-1">Status</label>
              <select id="serviceStatus" name="status" type="text" x-model="service.status" class="w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200">
                <option name="status" value="belum disetujui">Belum Disetujui</option>
                <option name="status" value="setuju">Disetujui</option>
              </select>
            </div>

           

            <!-- Footer -->
            <div class="flex justify-end pt-4 border-t">
              <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Simpan</button>
            </div>
          </form>
        </div>

    </section>
  </x-mainAdmin>
</x-layout>