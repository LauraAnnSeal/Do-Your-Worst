const burgerNav = document.querySelector('#open-menu-btn')
const closeNav = document.querySelector('#close-menu-btn')
const wrapper = document.querySelector('.wrapper')
const menu = document.querySelector('#menu')
let isOpen = false;

const openMenu = () => {
    wrapper.style.left = '0';
    wrapper.style.opacity = '1';
    menu.style.left = '0';
    menu.style.opacity = '1';
    isOpen = true;
}

const closeMenu = () => {
    wrapper.style.left = '100vw';
    wrapper.style.opacity = '0';
    menu.style.left = '100vw';
    menu.style.opacity = '0';
    isOpen = false;
}

burgerNav.addEventListener('click', () => {
    openMenu();
})
closeNav.addEventListener('click', () => {
    closeMenu();
})
wrapper.addEventListener('click', () => {
    closeMenu();
})