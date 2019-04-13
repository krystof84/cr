<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie rekrutacyjne</title>
    <meta name="description" content="">

    <link rel="stylesheet" href="./src/css/main.css"/>
</head>
<body>

<nav class="navbar">
    <div class="container">
        <a href="/" class="logo"> 
            <img src="./src/img/logo-2x.png">
        </a>

        <div class="navbar-toogle">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <ul class="navbar-menu">
            <li class="navbar-menu__item"><a href="#">I stopnia</a></li>
            <li class="navbar-menu__item"><a href="#">II stopnia</a></li>
            <li class="navbar-menu__item"><a href="#">Podyplomowe</a></li>
            <li class="navbar-menu__item"><a href="#">Szkolenia</a></li>
            <li class="navbar-menu__item"><a href="#">Usługi</a></li>
        </ul>
    </div>
</nav>

<section class="owl-carousel owl-theme" id="slider">
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

<!-- DEV ONLY -->
<script src="http://crafton.test:35729/livereload.js?snipver=1"></script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="./src/js/owl.carousel.min.js"></script>
<script src="./src/js/main.js"></script>

</body>
</html>