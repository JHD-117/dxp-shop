import './bootstrap';
import 'preline';
document.addEventListener('livewire:navigated', () => { 
    window.HSStaticMethods.autoInit();
})

// Theme toggle - DELETE
// const themeToggleBtn = document.getElementById('theme-toggle');
// const lightIcon = document.getElementById('theme-toggle-light-icon');
// const darkIcon = document.getElementById('theme-toggle-dark-icon');

// function setThemeIcons() {
//     if (document.documentElement.classList.contains('dark')) {
//         lightIcon.classList.remove('hidden');
//         darkIcon.classList.add('hidden');
//     } else {
//         darkIcon.classList.remove('hidden');
//         lightIcon.classList.add('hidden');
//     }
// }

// // Inicial
// if (
//     localStorage.theme === 'dark' ||
//     (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
// ) {
//     document.documentElement.classList.add('dark');
// } else {
//     document.documentElement.classList.remove('dark');
// }

// setThemeIcons();

// // Toggle
// themeToggleBtn?.addEventListener('click', () => {
//     document.documentElement.classList.toggle('dark');

//     localStorage.theme = document.documentElement.classList.contains('dark')
//         ? 'dark'
//         : 'light';

//     setThemeIcons();
// });
