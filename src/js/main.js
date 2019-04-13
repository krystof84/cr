$(document).ready(function() {
    $("#slider").owlCarousel({
        items: 1,
        nav: true,
        navText: ['<span class="icon-arrow-left"></span>', '<span class="icon-arrow-right"></span>'],
    });
});

function stickyMenuOnScroll() {
    window.onscroll = function() {
        var navbar = document.getElementById("navbar");
        var navbarPosition = navbar.offsetTop;
    
        if(window.pageYOffset > navbarPosition) {
            navbar.classList.add('navbar--sticky');
        } else {
            navbar.classList.remove('navbar--sticky');
        }
    };
}
stickyMenuOnScroll();

function toggleMenu() {
    var navbarToggle = document.getElementById('navbar-toogle');

    navbarToggle.addEventListener('click', function() {
        document.getElementById('navbar-menu').classList.toggle('navbar-menu--mobile');
    });
}
toggleMenu();