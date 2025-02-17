const sidebar = document.getElementById('sidebar');
const sidebarToggle = document.getElementById('sidebarToggle');
const sidebarOverlay = document.getElementById('sidebarOverlay');
const themeToggleBtn = document.getElementById('themeToggleBtn');
const currentTimeElement = document.getElementById('currentTime');
let isSidebarOpen = true;

function toggleSidebar() {
    isSidebarOpen = !isSidebarOpen;
    
    if (window.innerWidth <= 768) {
        if (isSidebarOpen) {
            sidebar.classList.add('sidebar-expanded');
            sidebar.classList.remove('sidebar-collapsed');
            sidebarOverlay.classList.remove('hidden');
        } else {
            sidebar.classList.remove('sidebar-expanded');
            sidebar.classList.add('sidebar-collapsed');
            sidebarOverlay.classList.add('hidden');
        }
    }
}

// Toggle button click handler
sidebarToggle.addEventListener('click', toggleSidebar);

// Overlay click handler
sidebarOverlay.addEventListener('click', toggleSidebar);

// Handle window resize
window.addEventListener('resize', () => {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    
    if (window.innerWidth > 1024) {
        sidebar.classList.remove('-translate-x-full');
        if (overlay) {
            overlay.classList.add('hidden');
        }
    } else {
        sidebar.classList.add('-translate-x-full');
    }
});

// Initialize sidebar state on load
if (window.innerWidth <= 768) {
    sidebar.classList.add('sidebar-collapsed');
    isSidebarOpen = false;
}

function updateTime() {
    const now = new Date();
    const formattedTime = now.toLocaleString('id-ID', {
        year: 'numeric',
        month: '2-digit',
        day: '2-digit',
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
        hour12: false
    });
    currentTimeElement.textContent = `Last update: ${formattedTime} WIB`;
}

setInterval(updateTime, 1000);
updateTime();

// Tambahkan event listener untuk menutup sidebar saat klik di luar
document.addEventListener('click', (e) => {
    const sidebar = document.getElementById('sidebar');
    const sidebarBtn = document.getElementById('sidebarCollapseBtn');
    
    if (!sidebar.contains(e.target) && !sidebarBtn.contains(e.target) && window.innerWidth <= 1024) {
        sidebar.classList.add('-translate-x-full');
        const overlay = document.getElementById('sidebarOverlay');
        if (overlay) {
            overlay.classList.add('hidden');
        }
    }
});

// Theme toggle functionality
function updateTheme(isDark) {
    if (isDark) {
        document.documentElement.classList.add('dark');
        document.body.classList.add('dark');
        document.body.style.backgroundColor = '#111827';
        
        // Update card backgrounds
        document.querySelectorAll('.bg-white, .bg-gray-100').forEach(el => {
            el.classList.add('bg-gray-800');
            el.classList.remove('bg-white', 'bg-gray-100');
        });
        
        // Update text colors
        document.querySelectorAll('.text-gray-500, .text-gray-600, .text-gray-700').forEach(el => {
            el.classList.add('text-gray-400');
            el.classList.remove('text-gray-500', 'text-gray-600', 'text-gray-700');
        });

        // Update container backgrounds
        document.querySelectorAll('.dark\\:bg-gray-800').forEach(el => {
            el.classList.add('bg-gray-800');
        });
    } else {
        document.documentElement.classList.remove('dark');
        document.body.classList.remove('dark');
        document.body.style.backgroundColor = '#F9FAFB';
        
        // Update card backgrounds
        document.querySelectorAll('.bg-gray-800').forEach(el => {
            el.classList.remove('bg-gray-800');
            el.classList.add('bg-white');
        });
        
        // Update text colors
        document.querySelectorAll('.text-gray-400').forEach(el => {
            el.classList.remove('text-gray-400');
            el.classList.add('text-gray-700');
        });

        // Update container backgrounds
        document.querySelectorAll('.dark\\:bg-gray-800').forEach(el => {
            el.classList.remove('bg-gray-800');
        });

        // Reset semua background ke putih
        document.querySelectorAll('.bg-gray-800, .dark\\:bg-gray-800').forEach(el => {
            el.style.backgroundColor = '#ffffff';
        });
    }

    // Update charts background
    const charts = document.querySelectorAll('canvas');
    charts.forEach(chart => {
        chart.style.backgroundColor = isDark ? '#1F2937' : '#ffffff';
    });
}

// Initialize theme on load
const isDarkMode = localStorage.getItem('theme') === 'dark';
updateTheme(isDarkMode);

// Add event listener for theme toggle
document.getElementById('themeToggleBtn')?.addEventListener('click', () => {
    const isDark = document.documentElement.classList.contains('dark');
    localStorage.setItem('theme', isDark ? 'light' : 'dark');
    updateTheme(!isDark);
});