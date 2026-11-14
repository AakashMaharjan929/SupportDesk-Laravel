document.addEventListener('DOMContentLoaded', () => {

    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebar-overlay');

    const toggleButton = document.getElementById('toggle-sidebar');
    const closeButton = document.getElementById('close-sidebar');

    const passwordButton = document.getElementById('passwordButton');
    const password = document.getElementById('password');

    if (!sidebar || !overlay || !toggleButton) {
        console.error('Sidebar elements not found!');
        return;
    }

    // Open sidebar
    toggleButton.addEventListener('click', () => {
        sidebar.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');
    });

    // Close sidebar
    closeButton?.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });

    // Close when clicking outside
    overlay.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });

});

//  function togglePassword(id, button) {
//         const input = document.getElementById(id);

//         if (input.type === 'password') {
//             input.type = 'text';
//         } else {
//             input.type = 'password';
//         }
//     }