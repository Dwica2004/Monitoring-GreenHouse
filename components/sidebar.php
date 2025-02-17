<div id="sidebar" class="fixed lg:static w-64 bg-white dark:bg-gray-800 transition-all duration-300 ease-in-out h-full transform -translate-x-full lg:translate-x-0 z-50">
    <div class="m-3 bg-white dark:bg-gray-800 rounded-xl shadow flex flex-col h-full border border-white dark:border-white">
        <div class="p-4 flex items-center">
            <div class="relative">
                <i class="fas fa-cloud text-teal-600 text-xl"></i>
                <i class="fas fa-sun text-teal-600 text-2xl absolute" style="top: -10px; left: -10px;"></i>
            </div>
            <span class="ml-3"><span class="text-teal-400 text-xl font-semibold">WSN</span> 
            <span class="text-teal-600 text-xl font-semibold">Monitoring</span></span>
        </div>
        
        <!-- Menu utama dengan flex-grow agar mengisi ruang tersedia -->
        <div class="flex-grow px-4">
            <h2 class="text-gray-700 text-lg">Home</h2>
            <ul class="mt-2">
                <li class="py-2 px-4 rounded-lg <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'bg-teal-100 text-teal-500' : 'text-gray-700'; ?>">
                    <div class="flex items-center">
                        <div class="w-5 h-5 relative mr-2">
                            <div class="w-full h-3 bg-white rounded border border-black"></div>
                            <div class="w-3 h-2 absolute bottom-[4px] left-1/2 -translate-x-1/2 rounded-b-lg overflow-hidden" style="clip-path: polygon(50% 0, 100% 100%, 0 100%); background: black;"></div>
                        </div>
                        <a href="/IOT/project1/index.php" class="w-full">Node Sensor 1</a>
                    </div>
                </li>
                <li class="py-2 px-4 mt-2 rounded-lg <?php echo basename($_SERVER['PHP_SELF']) == 'node2.php' ? 'bg-teal-100 text-teal-500' : 'text-gray-700'; ?>">
                    <div class="flex items-center">
                        <div class="w-5 h-5 relative mr-2">
                            <div class="w-full h-3 bg-white rounded border border-black"></div>
                            <div class="w-3 h-2 absolute bottom-[4px] left-1/2 -translate-x-1/2 rounded-b-lg overflow-hidden" style="clip-path: polygon(50% 0, 100% 100%, 0 100%); background: black;"></div>
                        </div>
                        <a href="/IOT/project1/pages/node2.php">Node Sensor 2</a>
                    </div>
                </li>
                <li class="py-2 px-4 mt-2 rounded-lg <?php echo basename($_SERVER['PHP_SELF']) == 'node3.php' ? 'bg-teal-100 text-teal-500' : 'text-gray-700'; ?>">
                    <div class="flex items-center">
                        <div class="w-5 h-5 relative mr-2">
                            <div class="w-full h-3 bg-white rounded border border-black"></div>
                            <div class="w-3 h-2 absolute bottom-[4px] left-1/2 -translate-x-1/2 rounded-b-lg overflow-hidden" style="clip-path: polygon(50% 0, 100% 100%, 0 100%); background: black;"></div>
                        </div>
                        <a href="/IOT/project1/pages/node3.php">Node Sensor 3</a>
                    </div>
                </li>
                <li class="py-2 px-4 mt-2 rounded-lg <?php echo basename($_SERVER['PHP_SELF']) == 'node4.php' ? 'bg-teal-100 text-teal-500' : 'text-gray-700'; ?>">
                    <div class="flex items-center">
                        <div class="w-5 h-5 relative mr-2">
                            <div class="w-full h-3 bg-white rounded border border-black"></div>
                            <div class="w-3 h-2 absolute bottom-[4px] left-1/2 -translate-x-1/2 rounded-b-lg overflow-hidden" style="clip-path: polygon(50% 0, 100% 100%, 0 100%); background: black;"></div>
                        </div>
                        <a href="/IOT/project1/pages/node4.php">Node Sensor 4</a>
                    </div>
                </li>
            </ul>
            
            <div class="mt-4">
                <h3 class="text-gray-700 text-lg">APPS</h3>
                <ul>
                    <li class="py-2 px-4 mt-2 rounded-lg hover:bg-teal-50 text-gray-700">
                        <div class="flex items-center">
                            <div class="w-5 h-5 rounded-full border-2 border-gray-600 flex items-center justify-center mr-2">
                                <i class="far fa-user text-sm text-gray-600"></i>
                            </div>
                            <a href="#" class="w-full" onclick="showComingSoonAlert(event)">Pengaturan Akun</a>
                        </div>
                    </li>
                </ul>
                <div id="comingSoonAlert" class="hidden mt-2 p-2 bg-teal-50 text-teal-600 text-xs rounded-lg border border-teal-200">
                    <i class="fas fa-info-circle mr-1"></i>
                    Fitur ini akan segera dirilis!
                </div>
            </div>
        </div>

        <!-- Profile section di bagian bawah -->
        <div class="p-4 border-t">
            <div class="flex items-center p-3 rounded-lg hover:bg-teal-50 transition-colors cursor-pointer">
                <div class="relative">
                    <?php
                    // Menentukan path gambar berdasarkan lokasi file
                    $currentFile = basename($_SERVER['PHP_SELF']);
                    $imagePath = (strpos($currentFile, 'node') !== false) 
                        ? '../assets/image/lutfi.jpg'  // Untuk file di folder pages
                        : 'assets/image/lutfi.jpg';    // Untuk file di root
                    ?>
                    <img alt="Administrator profile picture" 
                         class="rounded-full w-10 h-10" 
                         src="<?php echo $imagePath; ?>"/>
                    <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-teal-500 border-2 border-white rounded-full"></span>
                </div>
                <div class="ml-3 flex-grow">
                    <p class="text-sm text-gray-900">Administrator</p>
                    <p class="text-xs text-gray-500">admin</p>
                </div>
                <button class="p-1 hover:bg-teal-200 rounded-full transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 3.095A10 10 0 0 0 12.6 3C7.298 3 3 7.03 3 12s4.298 9 9.6 9q.714 0 1.4-.095M21 12H11m10 0c0-.7-1.994-2.008-2.5-2.5M21 12c0 .7-1.994 2.008-2.5 2.5" color="#000" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<div id="sidebarOverlay" class="fixed inset-0 bg-black opacity-50 hidden z-40 lg:hidden" onclick="closeSidebar()"></div>

<script>
function showComingSoonAlert(event) {
    event.preventDefault();
    const alert = document.getElementById('comingSoonAlert');
    alert.classList.remove('hidden');
    setTimeout(() => {
        alert.classList.add('hidden');
    }, 3000);
}

function closeSidebar() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    
    sidebar.classList.add('-translate-x-full');
    overlay.classList.add('hidden');
}

// Tutup sidebar saat ukuran layar berubah ke desktop
window.addEventListener('resize', () => {
    if (window.innerWidth >= 1024) { // lg breakpoint
        document.getElementById('sidebar').classList.remove('-translate-x-full');
        document.getElementById('sidebarOverlay').classList.add('hidden');
    } else {
        document.getElementById('sidebar').classList.add('-translate-x-full');
    }
});
</script> 