<x-layout>
  <x-mainAdmin>
    <section id="view-overview" class="view">
      <!-- Cards Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <!-- Card -->
        <div class="bg-white p-4 rounded-md shadow">
          <div class="flex justify-between items-center">
            <div>
              <h6 class="text-sm text-gray-500">Proyek</h6>
              <div class="text-2xl font-bold" id="stat-projects">{{ $proyek }}</div>
            </div>
            <div class="text-indigo-500 text-3xl">
              <i class="fa fa-briefcase"></i>
            </div>
          </div>
        </div>
        <div class="bg-white p-4 rounded-md shadow">
          <div class="flex justify-between items-center">
            <div>
              <h6 class="text-sm text-gray-500">pesan</h6>
              <div class="text-2xl font-bold" id="stat-projects">0</div>
            </div>
            <div class="text-green-500 text-3xl">
              <i class="fa fa-envelope-open"></i>
            </div>
          </div>
        </div>
        <div class="bg-white p-4 rounded-md shadow">
          <div class="flex justify-between items-center">
            <div>
              <h6 class="text-sm text-gray-500">Klien</h6>
              <div class="text-2xl font-bold" id="stat-projects">0</div>
            </div>
            <div class="text-yellow-500 text-3xl">
              <i class="fa fa-handshake-o"></i>
            </div>
          </div>
        </div>
        <div class="bg-white p-4 rounded-md shadow">
          <div class="flex justify-between items-center">
            <div>
              <h6 class="text-sm text-gray-500">pengguna</h6>
              <div class="text-2xl font-bold" id="stat-projects">0</div>
            </div>
            <div class="text-cyan-400 text-3xl">
              <i class="fa fa-users"></i>
            </div>
          </div>
        </div>

        <!-- Tambahkan 3 card lainnya sama seperti di atas -->
        <!-- ... -->
      </div>

      <!-- Charts -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <div class="lg:col-span-2 bg-white shadow rounded-xl p-6">
          <h3 class="text-gray-700 font-semibold mb-4 text-lg">Grafik Proyek (6 bulan)</h3>
          <div class="h-[300px]">
            <canvas id="chartProjects"></canvas>
          </div>
        </div>
        <div class="bg-white shadow rounded-xl p-6">
          <h3 class="text-gray-700 font-semibold mb-4 text-lg">Distribusi Layanan</h3>
          <div class="h-[300px] flex items-center justify-center">
            <canvas id="chartServices"></canvas>
          </div>
        </div>
      </div>

      <!-- Recent messages table -->
      <div class="bg-white p-4 rounded-md shadow mt-6">
          <div class="flex justify-between items-center mb-4">
            <h6 class="text-lg font-semibold">Pesan Terbaru</h6>
            <button id="clearMsgs" class="px-3 py-1 text-sm border border-red-500 text-red-500 rounded hover:bg-red-50">
              Hapus Semua
            </button>
          </div>
          <div class="overflow-auto">
            <table id="tableRecentMsgs" class="w-full text-sm text-left border-collapse">
              <thead class="text-gray-600 border-b">
                <tr>
                  <th class="py-2 px-3">Nama</th>
                  <th class="py-2 px-3">Email</th>
                  <th class="py-2 px-3">Pesan</th>
                  <th class="py-2 px-3">Tanggal</th>
                  <th class="py-2 px-3">Aksi</th>
                </tr>
              </thead>
              <tbody class="text-gray-700"></tbody>
            </table>
          </div>
      </div>
      
    </section>
    </x-mainAdmin>
  @push('scripts')
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets/js/grafik.js') }}"></script>
  @endpush
</x-layout>
<script>
  const projectLabels = {!! json_encode($projectLabels) !!};
const projectData = {!! json_encode($projectData) !!};

const serviceLabels = {!! json_encode($serviceLabels) !!};
const serviceData = {!! json_encode($serviceData) !!};

const ctxProjects = document.getElementById("chartProjects").getContext("2d");
const chartProjects = new Chart(ctxProjects, {
    type: "line",
    data: {
        labels: projectLabels,
        datasets: [
            {
                label: "Proyek",
                data: projectData,
                borderColor: "#6366f1",
                backgroundColor: "rgba(99, 102, 241, 0.1)",
                borderWidth: 3,
                fill: true,
                tension: 0.4,
                pointBackgroundColor: "#6366f1",
                pointBorderWidth: 0,
                pointRadius: 6,
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: "top",
                align: "end",
                labels: {
                    boxWidth: 12,
                    boxHeight: 12,
                    font: { size: 12 },
                },
            },
        },
        scales: {
            x: {
                grid: { display: false },
                ticks: { font: { size: 11 } },
            },
            y: {
                beginAtZero: true,
                grid: { color: "#f1f5f9" },
                ticks: { font: { size: 11 } },
            },
        },
        elements: {
            point: { hoverRadius: 8 },
        },
    },
});

// Grafik Layanan (Doughnut Chart)
const ctxServices = document.getElementById("chartServices").getContext("2d");
const chartServices = new Chart(ctxServices, {
    type: "doughnut",
    data: {
        labels: serviceLabels,
        datasets: [
            {
                data: serviceData,
                backgroundColor: ["#6366f1", "#06b6d4", "#f59e0b"],
                borderWidth: 0,
                cutout: "60%",
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: "bottom",
                labels: {
                    padding: 20,
                    font: { size: 11 },
                    usePointStyle: true,
                    pointStyle: "circle",
                },
            },
        },
    },
});

</script>