<x-layout>
  <x-mainAdmin>
    <section id="view">
      <div class="flex justify-between items-center p-6 border-b border-gray-200">
        <h3 class="text-2xl font-bold text-gray-800">Pesan Terbaru</h3>
        <button class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-lg flex items-center gap-2 text-sm font-medium transition-colors">
          <i class="fa fa-download"></i>
          Download CSV
        </button>
      </div>

      <div class="overflow-x-auto">
        <table class="w-full">
          <thead class="bg-gray-50 border-b border-gray-200">
            <tr>
              <th class="text-left py-3 px-6 text-sm font-semibold text-gray-700">Nama</th>
              <th class="text-left py-3 px-6 text-sm font-semibold text-gray-700">Email</th>
              <th class="text-left py-3 px-6 text-sm font-semibold text-gray-700">Pesan</th>
              <th class="text-left py-3 px-6 text-sm font-semibold text-gray-700">foto</th>
              <th class="text-left py-3 px-6 text-sm font-semibold text-gray-700">profesi</th>
              <th class="text-left py-3 px-6 text-sm font-semibold text-gray-700">Tanggal</th>
              <th class="text-left py-3 px-6 text-sm font-semibold text-gray-700">Aksi</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            @forelse($message as $pesan)
            <tr class="hover:bg-gray-50 transition-colors">
              <td class="py-3 px-6 text-sm font-medium text-gray-900">{{ $pesan['nama'] }}</td>
              <td class="py-3 px-6 text-sm text-gray-600">{{ $pesan['email'] }}</td>
              <td class="py-3 px-6 text-sm text-gray-600">{{ $pesan['pesan'] }}</td>
              <td class="py-3 px-6 text-sm text-gray-600"><img src="{{asset( 'storage/user/' . $pesan['foto'] )}}" alt=""></td>
              <td class="py-3 px-6 text-sm text-gray-600">{{ $pesan['profesi'] }}</td>
              <td class="py-3 px-6 text-sm text-gray-500">{{ $pesan['created_at'] }}</td>
              <td class="py-3 px-6">
                <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs font-medium transition-colors">Hapus</button>
              </td>
            </tr>
            @empty
            <tr>
               <td colspan="5" class="py-6 px-6 text-center text-gray-500">Tidak Ada Pesan terbaru.</td>
            </tr>
            @endforelse
            
          </tbody>
        </table>
      </div>
    </section>
  </x-mainAdmin>
</x-layout>