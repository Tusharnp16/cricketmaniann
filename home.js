// Burger menu functionality for mobile view
const burger = document.querySelector('.burger');
const navLinks = document.querySelector('.nav-links');
const dropdowns = document.querySelectorAll('.dropdown');

// Toggle the mobile menu
burger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
    burger.classList.toggle('toggle');
});

// Expand submenus on click for mobile view
dropdowns.forEach(dropdown => {
    dropdown.addEventListener('click', () => {
        const dropdownMenu = dropdown.querySelector('.dropdown-menu');
        dropdownMenu.classList.toggle('show');
    });
});
