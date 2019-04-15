$(document).ready(function() {
    $("#slider").owlCarousel({
        items: 1,
        nav: true,
        navText: ['<span class="icon-arrow-left"></span>', '<span class="icon-arrow-right"></span>'],
    });


    $('#video1').on('click', function(ev) {
 
        $('.popup').addClass('popup--show');
        $('.popup__content').addClass('popup__content--show');
        $("#vid1")[0].src += "?autoplay=1";
    
    });

    $('#popup__close').on('click', function() {
        $('.popup').removeClass('popup--show');
        $('.popup__content').removeClass('popup__content--show');
        $("#vid1")[0].src += "?autoplay=0";
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

function formValidation() {
    document.getElementById('form').addEventListener('submit', function(e) {
        e.preventDefault();
        var valid = false;

        var emailreg = /\S+@\S+\.\S+/;
        var email = document.getElementById('email');
        var inputs = document.getElementsByClassName('form__field');

        for(var i = 0; i < inputs.length; i++) {
            if(inputs[i].value.trim() == '') {
                inputs[i].classList.add('form__field--error');
                inputs[i].nextElementSibling.classList.add('form__label--error');
            } else {
                inputs[i].classList.remove('form__field--error');
                inputs[i].nextElementSibling.classList.remove('form__label--error');
                valid = true;
            }
        }
        
        if( !emailreg.test(email.value) ) {
            email.classList.add('form__field--error');
            email.nextElementSibling.classList.add('form__label--error');
            valid = false;
        } else {
            email.classList.remove('form__field--error');
            email.nextElementSibling.classList.remove('form__label--error');
            valid = true;
        }

        if(valid) {
            this.submit();
        }

    });


}
formValidation();


function youtubelightbox() {
    //youtube script
    // var tag = document.createElement('script');
    // tag.src = "//www.youtube.com/iframe_api";
    // var firstScriptTag = document.getElementsByTagName('script')[0];
    // firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // var player;

    // onYouTubeIframeAPIReady = function () {
    //     player = new YT.Player('player1', {
    //         // height: '244',
    //         // width: '434',
    //         videoId: 'xGwjN8AkgjA',  // youtube video id
    //         suggestedQuality: 'hd1080',
    //         playerVars: {
    //             'autoplay': 0,
    //             'rel': 0,
    //             'showinfo': 0
    //         },
    //         events: {
    //             // 'onStateChange': onPlayerStateChange
    //         }
    //     });
    // }

    // onPlayerStateChange = function (event) {
    //     if (event.data == YT.PlayerState.ENDED) {
    //         $('.start-video').fadeIn('normal');
    //     }
    // }
}
youtubelightbox();