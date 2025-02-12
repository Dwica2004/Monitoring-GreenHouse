<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Greenhouse Monitoring</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="styles/sidebar.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100 font-sans">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <div class="flex-none">
        <?php include 'components/sidebar.php'; ?>
    </div>
    
    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
      <!-- Navbar -->
      <?php include 'components/navbar.php'; ?>
      
      <!-- Dashboard -->
      <div class="p-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Sensor Cards -->
        <div class="bg-white p-6 rounded-xl shadow-sm text-center">
          <p class="text-6xl text-blue-500 font-semibold">83<span class="text-2xl">°C</span></p>
          <div class="flex items-center justify-center mt-2">
            <i class="fas fa-thermometer-half text-blue-500 mr-2"></i>
            <p class="text-gray-500">Suhu Udara</p>
          </div>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm text-center">
          <p class="text-6xl text-green-500 font-semibold">76<span class="text-2xl">%</span></p>
          <div class="flex items-center justify-center mt-2">
            <i class="fas fa-tint text-green-500 mr-2"></i>
            <p class="text-gray-500">Kelembapan Udara</p>
          </div>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm text-center">
          <p class="text-6xl text-yellow-500 font-semibold">3080<span class="text-2xl">Lux</span></p>
          <div class="flex items-center justify-center mt-2">
            <i class="fas fa-sun text-yellow-500 mr-2"></i>
            <p class="text-gray-500">Cahaya</p>
          </div>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm text-center">
          <p class="text-6xl text-purple-500 font-semibold">4<span class="text-2xl">%</span></p>
          <div class="flex items-center justify-center mt-2">
            <i class="fas fa-water text-purple-500 mr-2"></i>
            <p class="text-gray-500">Kelembapan Tanah</p>
          </div>
        </div>

        <!-- Status Cards -->
        <div class="bg-white p-2 rounded-xl shadow-sm text-center">
          <div class="flex items-center justify-center">
            <i class="fas fa-thermometer-half text-blue-500 mr-2"></i>
            <p class="text-gray-500">Ideal</p>
          </div>
        </div>
        <div class="bg-white p-2 rounded-xl shadow-sm text-center">
          <div class="flex items-center justify-center">
            <i class="fas fa-tint text-green-500 mr-2"></i>
            <p class="text-gray-500">Ideal</p>
          </div>
        </div>
        <div class="bg-white p-2 rounded-xl shadow-sm text-center">
          <div class="flex items-center justify-center">
            <i class="fas fa-sun text-yellow-500 mr-2"></i>
            <p class="text-gray-500">Ideal</p>
          </div>
        </div>
        <div class="bg-white p-2 rounded-xl shadow-sm text-center">
          <div class="flex items-center justify-center">
            <i class="fas fa-water text-purple-500 mr-2"></i>
            <p class="text-gray-500">Ideal</p>
          </div>
        </div>

        <!-- Control Cards -->
        <div class="bg-white p-6 rounded-xl shadow-sm text-center">
          <label class="relative inline-flex items-center cursor-pointer justify-center mb-2">
            <input type="checkbox" class="sr-only peer" checked>
            <div class="w-14 h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-blue-500"></div>
          </label>
          <p class="text-gray-500">Fan 1</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm text-center">
          <label class="relative inline-flex items-center cursor-pointer justify-center mb-2">
            <input type="checkbox" class="sr-only peer">
            <div class="w-14 h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-blue-500"></div>
          </label>
          <p class="text-gray-500">Fan 2</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm text-center">
          <label class="relative inline-flex items-center cursor-pointer justify-center mb-2">
            <input type="checkbox" class="sr-only peer" checked>
            <div class="w-14 h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-blue-500"></div>
          </label>
          <p class="text-gray-500">Mist Maker</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm text-center">
          <label class="relative inline-flex items-center cursor-pointer justify-center mb-2">
            <input type="checkbox" class="sr-only peer">
            <div class="w-14 h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-blue-500"></div>
          </label>
          <p class="text-gray-500">Grow LED</p>
        </div>

        <!-- Graph Cards -->
        <div class="bg-white p-4 rounded-xl shadow-sm col-span-2">
          <p class="text-gray-500 mb-4">Suhu</p>
          <div class="h-64 w-full">
            <canvas id="tempChart"></canvas>
          </div>
        </div>
        <div class="bg-white p-4 rounded-xl shadow-sm col-span-2">
          <p class="text-gray-500 mb-4">Kelembapan</p>
          <div class="h-64 w-full">
            <canvas id="humidChart"></canvas>
          </div>
        </div>
        <div class="bg-white p-4 rounded-xl shadow-sm col-span-2">
          <p class="text-gray-500 mb-4">Cahaya</p>
          <div class="h-64 w-full">
            <canvas id="lightChart"></canvas>
          </div>
        </div>
        <div class="bg-white p-4 rounded-xl shadow-sm col-span-2">
          <p class="text-gray-500 mb-4">Kelembapan Tanah</p>
          <div class="h-64 w-full">
            <canvas id="soilChart"></canvas>
          </div>
        </div>
      </div>
      
      <!-- Footer -->
      <?php include 'components/footer.php'; ?>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <!-- Initialize charts -->
  <script>
   const commonOptions = {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
     y: {
      beginAtZero: true,
      min: 0,
      max: 100
     }
    }
   };

   // Temperature Chart
   new Chart(document.getElementById('tempChart'), {
    type: 'line',
    data: {
     labels: ['00:28:18'],
     datasets: [{
      label: 'Suhu',
      data: [83],
      borderColor: 'rgb(59, 130, 246)',
      tension: 0.1
     }]
    },
    options: commonOptions
   });

   // Humidity Chart
   new Chart(document.getElementById('humidChart'), {
    type: 'line',
    data: {
     labels: ['00:28:18'],
     datasets: [{
      label: 'Kelembapan',
      data: [76],
      borderColor: 'rgb(34, 197, 94)',
      tension: 0.1
     }]
    },
    options: commonOptions
   });

   // Light Chart
   new Chart(document.getElementById('lightChart'), {
    type: 'line',
    data: {
     labels: ['00:28:18'],
     datasets: [{
      label: 'Cahaya',
      data: [3080],
      borderColor: 'rgb(234, 179, 8)',
      tension: 0.1
     }]
    },
    options: {
     responsive: true,
     maintainAspectRatio: false,
     scales: {
      y: {
       beginAtZero: true,
       min: 1000,
       max: 10000
      }
     }
    }
   });

   // Soil Moisture Chart
   new Chart(document.getElementById('soilChart'), {
    type: 'line',
    data: {
     labels: ['00:28:18'],
     datasets: [{
      label: 'Kelembapan Tanah',
      data: [4],
      borderColor: 'rgb(168, 85, 247)',
      tension: 0.1
     }]
    },
    options: commonOptions
   });
  </script>
  
  <script src="scripts/sidebar.js"></script>
 </body>
</html>
