document.addEventListener('DOMContentLoaded', function() {
    const themeToggleBtn = document.getElementById('themeToggleBtn');
    const themeIcon = document.getElementById('themeIcon');
    let isDarkMode = localStorage.getItem('darkMode') === 'true';

    // Fungsi untuk mengatur tema
    function setTheme(isDark) {
        if (isDark) {
            document.documentElement.classList.add('dark');
            themeIcon.classList.remove('fa-sun');
            themeIcon.classList.add('fa-moon');
            themeIcon.style.color = '#ffffff';
            document.body.style.backgroundColor = '#1a202c';
            document.body.style.color = '#ffffff';
        } else {
            document.documentElement.classList.remove('dark');
            themeIcon.classList.remove('fa-moon');
            themeIcon.classList.add('fa-sun');
            themeIcon.style.color = 'gray';
            document.body.style.backgroundColor = '#f3f4f6';
            document.body.style.color = '#000000';
        }
        localStorage.setItem('darkMode', isDark);
    }

    // Set tema awal
    setTheme(isDarkMode);

    // Event listener untuk toggle tema
    if (themeToggleBtn) {
        themeToggleBtn.addEventListener('click', () => {
            isDarkMode = !isDarkMode;
            setTheme(isDarkMode);
        });
    }
}); 