// Fixed variable name
let menuIcon = document.querySelector('#menu_icon');
let navbar = document.querySelector('.navbar');

// Toggle menu icon and navbar on click
menuIcon.onclick = () => {
    menuIcon.classList.toggle('fa-xmark');
    navbar.classList.toggle('active');
};

// Scroll section active link
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    let top = window.scrollY;

    sections.forEach(sec => {
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if (top >= offset && top < offset + height) {
            navLinks.forEach(link => {
                link.classList.remove('active');
            });
            document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
        }
    });

    // Sticky header
    let header = document.querySelector('header');
    header.classList.toggle('sticky', top > 100);

    // Remove menu icon and navbar when scrolling
    menuIcon.classList.remove('fa-xmark');
    navbar.classList.remove('active');
};

// Scroll Reveal animations
ScrollReveal({
    distance: '80px',
    duration: 2000,
    delay: 200,
});

ScrollReveal().reveal('.home_content, .heading', { origin: 'top' });
ScrollReveal().reveal('.home_img,.skill_content,.ducation, .contact form', { origin: 'bottom' });
ScrollReveal().reveal('.home_content h1, .about_img', { origin: 'left' });
ScrollReveal().reveal('.home_content p, .about_content ,.education_table', { origin: 'right' });
