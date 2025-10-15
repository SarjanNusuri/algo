<x-layout>
  <x-mainAdmin>
    <section x-data="{ open: false }" id="view-users" class="view">
    <div class="flex justify-between items-center mb-4">
      <h4 class="text-2xl font-bold text-gray-800">Manajemen Pengguna</h4>
      <button @click="open = true" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded flex items-center gap-2" id="addUserBtn">
        <i class="fa fa-user-plus"></i>
        Tambah Pengguna
      </button>
    </div>

    <div class="bg-white shadow rounded p-4">
      <div class="overflow-x-auto">
        <table class="w-full">
              <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                  <th class="text-left py-4 px-6 text-sm font-semibold text-gray-700">Nama</th>
                  <th class="text-left py-4 px-6 text-sm font-semibold text-gray-700">Email</th>
                  <th class="text-left py-4 px-6 text-sm font-semibold text-gray-700">Role</th>
                  <th class="text-left py-4 px-6 text-sm font-semibold text-gray-700">Aksi</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200">
                <tr>
                  <td colspan="7" class="py-6 px-6 text-center text-gray-500">Belum ada anggota.</td>
                </tr>
              </tbody>
            </table>
      </div>
    </div>

      <!-- Modal Update Profile-->
      <div x-show="open" x-transition class="fixed inset-0 z-50 flex items-center justify-center">
        <!-- Modal content -->
        <div @click.away="open = false" class="bg-white max-w-3xl w-full rounded-lg shadow-lg p-6 relative">
          <button @click="open = false" class="absolute top-2 right-3 text-gray-600 hover:text-red-500">✖</button>

          <!-- Modal Title -->
          <h2 class="text-xl font-semibold mb-4 text-gray-800">Tambah Pengguna</h2>

          <!-- FORM CONTENT -->
          <form id="formService" class="p-4 space-y-4">
            <input type="hidden" id="serviceId" />

            <div>
              <label class="block text-sm font-medium mb-1">Nama</label>
              <input id="serviceTitle" type="text" class="w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 px-3 py-2" required />
            </div>

            <div>
              <label class="block text-sm font-medium mb-1">Email</label>
              <input id="serviceTitle" type="email" class="w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 px-3 py-2" required />
            </div>

            <div>
              <label class="block text-sm font-medium mb-1">Role</label>
              <input id="serviceTitle" type="email" class="w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 px-3 py-2" required />
            </div>

            <div>
              <label class="block text-sm font-medium mb-1">Deskripsi</label>
              <textarea id="serviceDesc" rows="4" class="w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200"></textarea>
            </div>

            <!-- Footer -->
            <div class="mt-6 text-right">
              <button @click="open = false" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400 mr-2">Cancel</button>
              <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Tambah Profile</button>
            </div>
          </form>

          
        </div>
      </div>
    </section>
  </x-mainAdmin>
</x-layout>