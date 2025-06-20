const menuButton = document.getElementById('menu-bar');
const navModules = document.querySelector('.nav__modules');

menuButton.addEventListener('click', () => {
    navModules.classList.toggle('active');
});
