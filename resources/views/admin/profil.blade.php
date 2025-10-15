<x-layout>
  <x-mainAdmin>
    <section x-data="{ open: false }" class="bg-gray-100 min-h-screen p-4">
      <div class="max-w-5xl mx-auto bg-white rounded shadow p-6">
        <div class="flex justify-between items-center pb-4 mb-4 h-full w bg-slate-200 py-2 px-4 rounded-xl shadow">
          <h2 class="text-lg font-semibold text-green-600">Profil Diri</h2>
          <div class="flex space-x-2">
            <button @click="open = true" class="text-gray-600 hover:text-gray-800">
              <i class="fa fa-pencil md:pr-8"></i>
            </button>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <!-- Foto Profil -->
          <div class="flex flex-col items-center text-center">
            <div class="relative w-40 h-40 rounded-full overflow-hidden bg-green-200 flex items-center justify-center">
              <img src="{{ asset('assets/image/Algo.png') }}" alt="Foto Profil" class="w-full h-full object-cover" />
              <button  class="absolute bottom-2 right-2 bg-white p-1 rounded-full shadow">
                <i class="fas fa-camera text-gray-600"></i>
              </button>
            </div>

            <!-- Status -->
            <div class="mt-4 space-y-2">
              <div class="flex items-center space-x-4">
                <i class="fa fa-id-card text-gray-600"></i>
                <span class="bg-red-500 text-white text-xs font-semibold px-3 py-1 rounded-full">TIDAK DIKETAHUI</span>
              </div>
              <div class="flex items-center space-x-4 text-sm text-gray-700">
                <i class="fa fa-user"></i>
                <span class="px-3 py-1">Operator</span>
              </div>
              <div class="flex items-center space-x-4">
                <i class="fa fa-check-circle text-blue-500"></i>
                <span class="bg-blue-500 text-white text-xs font-semibold px-3 py-1 rounded-full">VERIFIED</span>
              </div>
            </div>
          </div>

          <!-- Identitas -->
          <div class="md:col-span-2 space-y-6">
            <div>
              <h3 class="text-green-600 font-semibold mb-1">Identitas</h3>
              <hr class="border-gray-400">
              <div class="space-y-1">
                <div>
                  <span class="text-gray-500 text-sm">Nama Lengkap</span>
                  <p class="font-bold text-gray-800">Kim Jong Un</p>
                </div>
                <div>
                  <span class="text-gray-500 text-sm">Jenis Kelamin</span>
                  <p class="text-gray-700">Laki-laki</p>
                </div>
              </div>
            </div>

            <!-- Kontak -->
            <div>
              <h3 class="text-green-600 font-semibold mb-1">Kontak</h3>
              <hr class="border-gray-400">
              <div class="space-y-2">
                <div class="flex items-center space-x-8 text-gray-700">
                  <i class="fa fa-envelope"></i>
                  <div>
                    <span class="text-sm text-gray-500">alamat email</span>
                    <p>jong@mail.com</p>
                  </div>
                </div>
                <div class="flex items-center space-x-8 text-gray-700">
                  <i class="fa fa-phone"></i>
                  <div>
                    <span class="text-sm text-gray-500">Handphone</span>
                    <p>08675673</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Tambahan JMI (opsional) -->
        <div class="mt-6">
          <div class="bg-slate-200 flex items-center justify-center text-white font-semibold p-3 rounded text-center">
            <img src="{{asset('assets/image/AlgoTri.png') }}" alt="" class="w-29 block">
          </div>
        </div>
      </div>

      <!-- Modal Update Profile-->
      <div x-show="open" x-transition class="fixed inset-0 z-50 flex items-center justify-center">
        <!-- Modal content -->
        <div @click.away="open = false" class="bg-white max-w-3xl w-full rounded-lg shadow-lg p-6 relative">
          <button @click="open = false" class="absolute top-2 right-3 text-gray-600 hover:text-red-500">✖</button>

          <!-- Modal Title -->
          <h2 class="text-xl font-semibold mb-4 text-gray-800">Edit Profile</h2>

          <!-- FORM CONTENT -->
          <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Profile Image -->
            <div class="flex flex-col items-center">
              <div class="w-40 h-40 bg-gray-200 rounded overflow-hidden flex items-center justify-center mb-4">
                <svg class="w-20 h-20 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z" />
                </svg>
              </div>
              <label class="flex items-center gap-3 px-4 py-2 bg-slate-100 text-slate-700 text-sm font-medium rounded-lg cursor-pointer hover:bg-slate-200 w-fit">
                <i class="fa fa-upload text-slate-500"></i>
                <span>Ubah Foto Profile</span>
                <input type="file" class="hidden" />
              </label>
            </div>

            <!-- Fields -->
            <div class="space-y-3 text-left">
              <div>
                <label class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" value="Keza Felice" class="mt-1 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500" />
              </div>

              <div>
                <label class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" value="admin@web.app" class="mt-1 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500" />
              </div>

              <div>
                <label class="block text-sm font-medium text-gray-700">Old Password</label>
                <input type="password" class="mt-1 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500" />
              </div>

              <div>
                <label class="block text-sm font-medium text-gray-700">New Password</label>
                <input type="password" class="mt-1 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500" />
              </div>

              <div>
                <label class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" class="mt-1 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500" />
              </div>
            </div>

            <!-- Footer -->
            <div class="mt-6 text-right">
              <button @click="open = false" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400 mr-2">Cancel</button>
              <button type="submit" class="px-4 py-2 bg-amber-300 text-white rounded hover:bg-amber-400">Update Profile</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </x-mainAdmin>
</x-layout>