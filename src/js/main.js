// $('#slider').slick({});

$(document).ready(function() {
    $("#slider").owlCarousel({
        items: 1,
        nav: true,
        navText: ['<span class="icon-arrow-left"></span>', '<span class="icon-arrow-right"></span>']
    });
});