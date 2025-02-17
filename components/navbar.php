<div class="flex items-center justify-between bg-white p-4 shadow-md rounded-lg mx-2 sm:mx-4 mt-4 top-0 z-10">
    <div class="flex items-center">
        <button id="sidebarCollapseBtn" class="text-gray-500 hover:text-gray-600 flex flex-col gap-1 p-1">
            <div class="w-5 h-0.5 bg-gray-600"></div>
            <div class="w-3.5 h-0.5 bg-gray-600/70"></div>
            <div class="w-2.5 h-0.5 bg-gray-600/50"></div>
        </button>
    </div>

    <div class="absolute left-1/2 transform -translate-x-1/2 flex items-center">
        <div class="relative mr-2 hidden sm:block">
            <i class="fas fa-cloud text-[#20B2AA] text-xl"></i>
            <i class="fas fa-sun text-[#20B2AA] text-2xl absolute" style="top: -10px; left: -10px;"></i>
        </div>
        <h1 class="text-lg sm:text-2xl font-bold">
            <span class="text-[#40E0D0]">Greenhouse</span>
            <span class="text-[#20B2AA]">Monitoring</span>
        </h1>
    </div>

    <div class="flex items-center">
        <button id="themeToggleBtn" class="text-gray-500 hover:text-gray-600 mr-2 sm:mr-4 p-2 rounded-full transition-colors duration-300">
            <i class="far fa-sun text-xl sm:text-2xl hidden" id="sunIcon"></i>
            <i class="far fa-moon text-xl sm:text-2xl" id="moonIcon"></i>
        </button>
        <div class="flex items-center relative">
            <div class="relative">
                <?php
                // Menentukan path gambar berdasarkan lokasi file
                $currentFile = basename($_SERVER['PHP_SELF']);
                $imagePath = (strpos($currentFile, 'node') !== false) 
                    ? '../assets/image/lutfi.jpg'  // Untuk file di folder pages
                    : 'assets/image/lutfi.jpg';    // Untuk file di root
                ?>
                <img alt="Administrator profile picture" 
                     class="rounded-full w-8 h-8 sm:w-10 sm:h-10" 
                     src="<?php echo $imagePath; ?>"/>
                <span class="absolute bottom-0 right-0 w-2 h-2 sm:w-2.5 sm:h-2.5 bg-teal-500 border-2 border-white rounded-full"></span>
            </div>
            <div class="ml-2 hidden sm:block">
                <p class="text-gray-700">Administrator</p>
                <p class="text-gray-500 text-sm">admin</p>
            </div>
        </div>
    </div>
</div>
<div class="bg-white p-3 sm:p-4 shadow-md text-center text-gray-500 mt-2 sm:mt-4 mx-2 sm:mx-4 rounded-lg">
    <span id="currentTime" class="text-sm sm:text-base">Last update: </span>
</div>

<script>
    function updateTime() {
        const now = new Date();
        const formattedTime = now.toLocaleString('id-ID', {
            timeZone: 'Asia/Jakarta',
            year: 'numeric',
            month: '2-digit',
            day: '2-digit',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        });
        document.getElementById('currentTime').textContent = `Last update: ${formattedTime} WIB`;
    }

    updateTime();
    setInterval(updateTime, 1000); // Update setiap detik

    document.getElementById('sidebarCollapseBtn').addEventListener('click', function() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        
        if (sidebar.classList.contains('-translate-x-full')) {
            // Buka sidebar
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
        } else {
            // Tutup sidebar
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        }
    });

    // Fungsi untuk toggle tema
    const themeToggleBtn = document.getElementById('themeToggleBtn');
    const sunIcon = document.getElementById('sunIcon');
    const moonIcon = document.getElementById('moonIcon');
    const body = document.body;
    const cards = document.querySelectorAll('.bg-white');
    const texts = document.querySelectorAll('.text-gray-500, .text-gray-700');

    let isDark = localStorage.getItem('theme') === 'dark';
    if (isDark) {
        document.documentElement.classList.add('dark');
        enableDarkMode(); // Tambahkan ini untuk mengaktifkan dark mode saat halaman dimuat
    }

    themeToggleBtn.addEventListener('click', () => {
        isDark = !isDark;
        if (isDark) {
            document.documentElement.classList.add('dark');
            enableDarkMode(); // Tambahkan ini untuk mengaktifkan dark mode saat tombol ditekan
        } else {
            document.documentElement.classList.remove('dark');
            disableDarkMode(); // Tambahkan ini untuk menonaktifkan dark mode saat tombol ditekan
        }
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
    });

    function enableDarkMode() {
        sunIcon.classList.remove('hidden');
        moonIcon.classList.add('hidden');
        body.classList.add('bg-gray-900');
        body.classList.remove('bg-gray-100');
        
        // Ubah warna card dan sidebar
        document.querySelectorAll('.bg-white, #sidebar').forEach(element => {
            element.classList.remove('bg-white');
            element.classList.add('bg-gray-800');
        });

        // Ubah warna teks
        document.querySelectorAll('.text-gray-500, .text-gray-700, .text-gray-600').forEach(text => {
            if (text.classList.contains('text-gray-500')) {
                text.classList.remove('text-gray-500');
                text.classList.add('text-gray-400');
            }
            if (text.classList.contains('text-gray-700')) {
                text.classList.remove('text-gray-700');
                text.classList.add('text-gray-300');
            }
            if (text.classList.contains('text-gray-600')) {
                text.classList.remove('text-gray-600');
                text.classList.add('text-gray-400');
            }
        });

        // Ubah warna border dan shadow
        document.querySelectorAll('.shadow-md, .shadow-sm').forEach(element => {
            element.classList.add('border', 'border-gray-700');
        });
    }

    function disableDarkMode() {
        moonIcon.classList.remove('hidden');
        sunIcon.classList.add('hidden');
        body.classList.remove('bg-gray-900');
        body.classList.add('bg-gray-100');
        
        // Kembalikan warna card dan sidebar
        document.querySelectorAll('.bg-gray-800, #sidebar').forEach(element => {
            element.classList.add('bg-white');
            element.classList.remove('bg-gray-800');
        });

        // Kembalikan warna teks
        document.querySelectorAll('.text-gray-400, .text-gray-300').forEach(text => {
            if (text.classList.contains('text-gray-400')) {
                text.classList.add('text-gray-500');
                text.classList.remove('text-gray-400');
            }
            if (text.classList.contains('text-gray-300')) {
                text.classList.add('text-gray-700');
                text.classList.remove('text-gray-300');
            }
        });

        // Kembalikan warna border dan shadow
        document.querySelectorAll('.shadow-md, .shadow-sm').forEach(element => {
            element.classList.remove('border', 'border-gray-700');
        });
    }
</script> 