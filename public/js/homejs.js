const menuIcon = document.querySelector('#menu-icon');
const navbar = document.querySelector('.navbar');

let closeTimeout; // simpan timer

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-menu');
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
};

// BILA CURSOR KELUAR → DELAY TUTUP
navbar.addEventListener('mouseleave', () => {
    closeTimeout = setTimeout(() => {
        navbar.classList.remove('active');
        menuIcon.classList.add('bx-menu');
        menuIcon.classList.remove('bx-x');
    }, 400); // ⏱️ 400ms delay (boleh tukar)
});

// BILA CURSOR MASUK BALIK → CANCEL TUTUP
navbar.addEventListener('mouseenter', () => {
    clearTimeout(closeTimeout);
});

function toggleDropdown(headerButton) {
            // Get the dropdown content and header
            const content = headerButton.nextElementSibling;
            
            // Toggle active classes
            headerButton.classList.toggle('active');
            content.classList.toggle('active');
        }
