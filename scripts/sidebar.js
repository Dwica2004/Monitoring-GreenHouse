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

themeToggleBtn.addEventListener('click', () => {
    document.documentElement.classList.toggle('dark');
});

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