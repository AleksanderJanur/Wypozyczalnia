<?php
    print_r($_GET);
$myparam = str_replace(".php/", "", $_GET['lok']);
$myparam = str_replace("samochodów", "samochodów <br>", $myparam);
$myparam = str_replace("-", " ", $myparam);
?>
<!DOCTYPE html>
<html lang="pl-pl">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $myparam;?>">
    <meta name="keywords" content="Samochody, wyożyczalnia, fastcars24, kraków, warszawa, katowice, śląsk,<?php echo $myparam;?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FastCars - <?php echo $myparam;?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Section Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="canvas-open">
    <i class="icon_menu"></i>
</div>
<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <i style="color:#e0e028" class="icon_close"></i>
    </div>
    <div class="search-icon  search-switch">
        <i class="icon_search"></i>
    </div>
    <div class="header-configure-area">
        <div class="language-option">
            <img src="/img/flag.jpg" alt="">
            <span>EN <i class="fa fa-angle-down"></i></span>
            <div class="flag-dropdown">
                <ul>
                    <li><a href="#">Zi</a></li>
                    <li><a href="#">Fr</a></li>
                </ul>
            </div>
        </div>
        <a href="#" class="bk-btn">Booking Now</a>
    </div>
    <nav class="mainmenu mobile-menu">
        <ul>
            <li class="active"><a href="./index.html">Start</a></li>
            <li><a href="./o-nas.html">O nas</a></li>
            <li><a href="./nasze-samochody.html">Nasze samochody</a></li>
            <li><a href="./lokalizacje.html">Lokalizacje</a>
                <ul class="dropdown">
                    <li><a href="./lokalizacje.html">Częstochowa</a></li>
                    <li><a href="#">Gliwice</a></li>
                    <li><a href="#">Jelenia Góra</a></li>
                    <li><a href="#">Katowice</a></li>
                </ul>
            </li>
            <li><a href="./oferta.html">News</a></li>
            <li><a href="./kontakt.html">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="top-social">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
<!--        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-tripadvisor"></i></a>-->
        <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
    <ul class="top-widget">
        <li><i class="fa fa-phone"></i> (12) 345 67890</li>
        <li><i class="fa fa-envelope"></i> info.colorlib@gmail.com</li>
    </ul>
</div>
<!-- Offcanvas Menu Section End -->

<!-- Header Section Begin -->
<header class="header-section">
    <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="tn-left">
                        <li><i class="fa fa-phone"></i> (+48) 111 222 333 </li>
                        <li><i class="fa fa-envelope"></i> email@test.pl</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="tn-right">
                        <div class="top-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <!--                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                            <a href="#"><i class="fa fa-tripadvisor"></i></a>-->
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <a style="color:#000000;" href="#" class="bk-btn">Zarezerwuj teraz</a>
                        <div class="language-option">
                            <img src="/myImg/poland.png" alt="">
                            <span>PL <i class="fa fa-angle-down"></i></span>
                            <div class="flag-dropdown">
                                <ul>
                                    <li><img src="/myImg/poland.png" alt=""><a style="color:#000000;" href="#">PL</a></li>
                                    <li><img src="/img/flag.jpg" alt=""><a style="color:#000000;" href="#">EN</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="/myImg/logoTest.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="nav-menu">
                        <nav class="mainmenu">
                            <ul>
                                <li><a href="./index.html">Start</a></li>
                                <li><a href="./o-nas.html">O nas</a></li>
                                <li><a href="./nasze-samochody.html">Nasze Samochody</a></li>
                                <li class="active"><a href="./lokalizacje.html">Lokalizacje</a>
                                    <ul class="dropdown">
                                        <li><a href="./lokalizacje.html">Częstochowa</a></li>
                                        <li><a href="#">Gliwice</a></li>
                                        <li><a href="#">Jelenia Góra</a></li>
                                        <li><a href="#">Katowice</a></li>
                                    </ul>
                                </li>
                                <li><a href="./oferta.html">Oferta</a></li>
                                <li><a href="./kontakt.html">Kontakt</a></li>
                            </ul>
                        </nav>
                        <div class="nav-right search-switch">
                            <i class="icon_search"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
    <!-- Header End -->

    <!-- Blog Details Hero Section Begin -->

<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Lokalizacje</h2>
                    <div class="bt-option">
                        <a href="./index.html">Start</a>
                        <span><?php echo $myparam;?>></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="aboutus-page-section spad fruit_section">
    <div class="container">
        <!--            <div class="about-page-services">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="ap-service-item set-bg" data-setbg="img/about/about-p1.jpg">
                                    <div class="api-text">
                                        <h3>Restaurants Services</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="ap-service-item set-bg" data-setbg="img/about/about-p2.jpg">
                                    <div class="api-text">
                                        <h3>Travel & Camping</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="ap-service-item set-bg" data-setbg="img/about/about-p3.jpg">
                                    <div class="api-text">
                                        <h3>Event & Party</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
        <section class="aboutus-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-page-text">
                            <div class="section-title">
                                <div class="heading_container">
                                    <hr>
                                    <h2 style="color:#ffffff;font-size:25px">
                                        <?php echo $myparam ?>

                                    </h2>
                                </div>
                                <span>RaceCar24</span>
<!--                                <h3 style="color:#ffffff">Wypożyczalnia samochodów sportowych i luksusowych</h3>-->
                            </div>
<!--                            <p style="color:#e0e028;">Oferujemy Państwu wynajem samochodów sportowych oraz luksusowych na terenie Wrocławia oraz możliwość dostarczenia samochodu pod dowolny adres na terenie Polski oraz Europy.</p>-->
                            <p class="s-para">Dla każdego z naszych klientów, w oparciu o jego potrzeby i preferencje, jesteśmy w stanie przygotować atrakcyjną, indywidualną ofertę wynajmu. Wynajem samochodów luksusowych wiąże się z dodatkowymi, równie luksusowymi opcjami, które możemy zaproponować naszym klientom.

                                Są to m.in. podstawienie samochodu pod wskazany przez klienta adres, samochód z kierowcą itp. Przygotowana przez nas oferta jest wyjątkowo atrakcyjna dzięki naszemu wydajnemu modelowi działania. Minimalizując koszty jesteśmy w stanie zaproponować ceny niespotykane u konkurencji. Możemy powiedzieć, że oferujemy najtańszy wynajem samochodów sportowych i luksusowych na rynku.

                                W naszej ofercie znajdują się pojazdy najlepszych na Świecie marek.

                                Do każdego klienta podchodzimy indywidualnie, dlatego nasza oferta jest jedną z najlepszych na rynku. Konkurencyjne ceny oraz najlepsze samochody – to połączenie sprawia, że nasza oferta skierowana jest do niemal każdego fana motoryzacji.

                                Oferujemy zarówno najem długoterminowy jak i wynajem samochodu na doby.  Spraw prezent sobie lub Twoim bliskim i wybierz jeden z samochodów oferowanych przez RaceCars24.

                                Nieważne czy szukasz krzykliwego, sportowego hot-hatch’a, czy szybkiej, luksusowej limuzyny – w naszej ofercie na pewno znajdziesz idealny samochód sportowy na wynajem.</p>
                            <a href="#" class="primary-btn about-btn">Dowiedz się więcej</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-pic">
                            <div class="row">
                                <img src="/myImg/auto1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<section class="services-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>RACECAR24</span>
                    <h2>Skontaktuj się z nami</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="far fa-envelope fa-3x"></i>
                    <h4>Email</h4>
                    <p>email@test.pl</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="fas fa-phone fa-3x"></i>
                    <h4>Telefon</h4>
                    <p>(+48) 111 222 333</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="fas fa-map-marker-alt fa-3x"></i>
                    <h4>Adres</h4>
                    <p>Adres 111, Miasto</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Recommend Blog Section End -->

    <!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="footer-text">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ft-about">
                        <div class="logo">
                            <a href="#">
                                <img src="/myImg/footerLogoTest.png" alt="">
                            </a>
                        </div>
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a style="color:#e0e028;text-decoration: underline;" href="https://colorlib.com" target="_blank">RaceCars</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="ft-contact">
                        <h6>Nawigacja</h6>
                        <ul>
                            <li><a href="index.html">Start</a></li>
                            <li><a href="./o-nas.html">O nas</a></li>
                            <li><a href="./nasze-samochody.html">Nasze Samochody</a></li>
                            <li ><a href="./lokalizacje.html">Lokalizacje</a>
                            <li><a href="./oferta.html">Oferta</a></li>
                            <li><a href="./kontakt.html">Kontakt</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="ft-about">
                        <div class="fa-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i style="color:#e0e028" class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/jquery.slicknav.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>