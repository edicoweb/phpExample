// Menu
let menu = document.querySelector('.menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    navbar.classList.toggle('active');
}

// change Header Background color And Shadow On Scroll

let header = document.querySelector('header');
let menu_icon = document.querySelector('.bx-menu');
let logo = document.querySelector('.logo');

window.addEventListener('scroll', () => {
    header.classList.toggle('shadow', window.scrollY > 0);
    menu_icon.classList.toggle('menu-icon-scroll', window.scrollY > 0);
    logo.classList.toggle('logo-black', window.scrollY > 0);    
});
