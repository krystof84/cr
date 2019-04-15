<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex">
    <title>Zadanie rekrutacyjne</title>
    <meta name="description" content="">

    <link rel="stylesheet" href="./src/css/main.css"/>
</head>
<body>

<nav class="navbar" id="navbar">
    <div class="container">
        <a href="/" class="logo"> 
            <img src="./src/img/logo-2x.png">
        </a>

        <div class="navbar-toogle" id="navbar-toogle">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <ul class="navbar-menu" id="navbar-menu">
            <li class="navbar-menu__item"><a href="#">I stopnia</a></li>
            <li class="navbar-menu__item"><a href="#">II stopnia</a></li>
            <li class="navbar-menu__item"><a href="#">Podyplomowe</a></li>
            <li class="navbar-menu__item"><a href="#">Szkolenia</a></li>
            <li class="navbar-menu__item"><a href="#">Usługi</a></li>
        </ul>
    </div>
</nav>

<section class="owl-carousel owl-theme slider" id="slider">
    <div class="item slide slide--1">
        <div class="container container--slider">
            <h1 class="slide__heading">
                Będziesz uczyć się z ciekawością.<br/>
                <span>Obiecujemy.</span>   
            </h1>

            <div class="slide__cta">
                <a href="#" class="btn btn--white">Zobacz więcej</a>
                <a href="#" class="btn btn--transparent">Umów się z aniołem</a>
            </div>

        </div>
    </div>

    <div class="item slide slide--2">
        <div class="container container--slider">
            <p class="slide__heading">
                Będziesz uczyć się z ciekawością.<br/>
                <span>Obiecujemy.</span>   
            </p>

            <div class="slide__cta">
                <a href="#" class="btn btn--white">Zobacz więcej</a>
                <a href="#" class="btn btn--transparent">Umów się z aniołem</a>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <section class="infoSection infoSection--1 infoSection--imageRight"> 
        <div class="infoSection__text">
            <h2 class="infoSection__header">Dla kogo?</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere similique hic dolore, numquam doloribus animi consectetur, voluptatum esse nihil nulla quisquam laborum ratione cum fuga ad totam vitae incidunt minus blanditiis voluptates? Tempora dicta aperiam, porro voluptatum dignissimos minus eveniet.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci veniam architecto modi assumenda nesciunt illum corporis doloribus? Asperiores beatae odit ducimus, non voluptatum assumenda architecto, hic quam debitis voluptas consequatur minima eligendi, repellendus laborum dicta! Consectetur praesentium omnis ad nobis laborum quo possimus, accusantium, qui, expedita voluptate enim modi cumque. Facilis reiciendis nam sequi quos quae <a href="#">dolorem quidem aliquam sunt!</a></p>
            <p>Wymagane od kandydata:</p>
            <ul>
                <li>Ukończone studia wyższe</li>
                <li>Przygotowanie pedagogiczne</li>
            </ul>
        </div>
        <div class="infoSection__image">
            <img src="./src/img/pic-1.jpg" alt="Dla kogo?">
        </div>
    </section>

    <section class="infoSection infoSection--2 infoSection--imageLeft"> 
        <div class="infoSection__image">
            <img src="./src/img/pic-2.jpg" alt="Po co?">
        </div>
        <div class="infoSection__text">
            <h3 class="infoSection__header">Po co?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod repellendus tempore assumenda officiis placeat fuga obcaecati vel asperiores nemo harum cum doloribus quibusdam veniam reiciendis voluptas, dicta porro eum eos accusantium similique totam quam. Vero porro vitae, nesciunt quam sapiente harum deleniti sunt distinctio! Magni, reprehenderit quos, explicabo delectus pariatur vitae voluptas voluptatum dolore repudiandae deserunt sit dolores blanditiis assumenda asperiores aut, aliquam illo nemo soluta officia. Perferendis ad culpa voluptas officia mollitia earum tenetur?</p>
        </div>
    </section>

    <section class="infoSection infoSection--3 infoSection--imageRight"> 
        <div class="infoSection__text">
            <h2 class="infoSection__header">Z kim?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed doloremque tenetur ipsum, voluptatem voluptas dolorum inventore, neque perferendis nobis eius, molestias illo at a quod numquam iure est odit? Ab commodi quidem autem labore vero nulla animi, quae nihil repudiandae tenetur dicta atque dolore officiis asperiores quasi quas fugit temporibus.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit error, omnis totam accusantium quibusdam sequi atque officiis rem perferendis voluptates, quidem ab ullam nesciunt fugiat? Esse eaque suscipit autem minima possimus earum et fugit accusamus!</p>
        </div>
        <div class="infoSection__image">
            <img src="./src/img/pic-3.jpg" alt="Z kim?">
        </div>
    </section>
</div>

<section class="contact">
        <div class="formContainer">

            <p class="contact-header">Nie znalazłeś opdowiedniego kontaktu?</p>
            <p class="contact-subheader">Skorzystaj z formularza</p>

            <form action="" class="form" id="form">
                <div class="form__row">
                    <div class="form__group">
                        <input type="email" id="name" class="form__field" placeholder="Imię">
                        <label for="name" class="form__label">Imię</label>
                    </div>
                    <div class="form__group">
                        <input type="email" id="surname" class="form__field" placeholder="Nazwisko">
                        <label for="surname" class="form__label">Nazwisko</label>
                    </div>
                </div>
                
                <div class="form__group">
                    <input type="email" id="email" class="form__field form__field--error" placeholder="Your Email">
                    <label for="email" class="form__label">Adres E-mail</label>
                </div>

                <div class="form__group">
                    <textarea id="message" class="form__field" placeholder="Your Message" rows="6"></textarea>
                    <label for="message" class="form__label">Treść wiadomości</label>
                </div>

                <div class="form__group">
                    <label for="agree"><input type="checkbox" name="agree" id="agree" class="form__checkboxAgree"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci deserunt animi accusantium facilis quasi dolor hic, nostrum repellat ut sed quas eaque quidem sunt, sequi ducimus. Enim unde eligendi ex nemo! Sit ad eveniet facere laudantium, quo modi nam molestiae?</label>
                </div>

                <div class="form__group">
                    <button type="submit" value="Wyślij" class="form__submit btn btn--blue">Wyślij</button>
                </div>
            </form>
            
        </div> 
</section>

<footer class="mainFooter">
    <div class="container">
        <div class="f-1">
            <address>
                ul.Głogowska 10<br/>
                61-719 Poznań<br/>
                tel. <a href="tel:+48612711000">61 27 11 000</a>
            </address>

            <div id="map" class="map">

            </div>
        </div>
        <div class="f-2">
            <p class="f-desc">O nas</p>
            <ul>
                <li><a href="#">Dlaczego CDV</a></li>
                <li><a href="#">Kadra naukowa</a></li>
                <li><a href="#">Dla mediów</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
        </div>
        <div class="f-3">
            <p class="f-desc">Dla kandydata</p>
            <ul>
                <li><a href="#">Poradnik maturzysty</a></li>
                <li><a href="#">Rekrutacja</a></li>
                <li><a href="#">Kredyt studencki</a></li>
                <li><a href="#">Studia dla cudzoziemców</a></li>
            </ul>
        </div>
        <div class="f-3">
            <p class="f-desc">Dla studenta</p>
            <ul>
                <li><a href="#">Wirtualna uczelnia</a></li>
                <li><a href="#">Stypendia</a></li>
                <li><a href="#">Biuro Karier</a></li>
                <li><a href="#">Studiuj dalej</a></li>
            </ul>
        </div>
        <div class="f-4">
            <p class="f-desc">Dla biznesu</p>
            <ul>
                <li><a href="#">Współpraca z biznesem</a></li>
                <li><a href="#">Emotions LAB</a></li>
                <li><a href="#">Wynajem sal</a></li>
                <li><a href="#">Znajdź pracownika</a></li>
            </ul>
        </div>
        <div class="f-5">
            <p class="f-desc">Na skróty</p>
            <ul>
                <li><a href="#">Aktualności</a></li>
                <li><a href="#">Wydarzenia</a></li>
                <li><a href="#">Konferencje</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </div>
        <p class="author">Projekt i realizacja: Crafton</p>
    </div>
</footer>

<!-- DEV ONLY -->
<script src="http://crafton.test:35729/livereload.js?snipver=1"></script>


<!-- Init map -->
<script>
    function initMap() {
        var options = {
            center: {lat: 52.4031273, lng: 16.9078014},
            zoom: 15,
            disableDefaultUI: true,
            styles:
            [
                {
                    "elementType": "geometry",
                    "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                    ]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [
                    {
                        "visibility": "off"
                    }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [
                    {
                        "color": "#616161"
                    }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                    ]
                },
                {
                    "featureType": "administrative.land_parcel",
                    "elementType": "labels.text.fill",
                    "stylers": [
                    {
                        "color": "#bdbdbd"
                    }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [
                    {
                        "color": "#757575"
                    }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [
                    {
                        "color": "#ffffff"
                    }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.text.fill",
                    "stylers": [
                    {
                        "color": "#757575"
                    }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [
                    {
                        "color": "#dadada"
                    }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text.fill",
                    "stylers": [
                    {
                        "color": "#616161"
                    }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "geometry",
                    "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                    ]
                },
                {
                    "featureType": "transit.station",
                    "elementType": "geometry",
                    "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                    {
                        "color": "#c9c9c9"
                    }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                    ]
                }
                ]
        }

        var map = new google.maps.Map(document.getElementById('map'), options);
        var marker = new google.maps.Marker({
            position: {
                lat: 52.4031273,
                lng: 16.9078014
            },
            map: map,
            icon: 'src/img/map-marker.png'
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBn_cjddas_wiDltYSNsUxk-sq5KTCFpgs&callback=initMap" async defer></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="./src/js/owl.carousel.min.js"></script>
<script src="./src/js/main.js"></script>

</body>
</html>