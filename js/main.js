const menuMobil = document.querySelector('.movil-menu');
const columnMenu = document.querySelector('.column-menu');


menuMobil.addEventListener('click', toggleMobileMenu);

function toggleMobileMenu(){
    columnMenu.classList.toggle('inactive');
    
}