<?php
$myparam = str_replace(".php/", "", $_GET['lok']);
$myparam = str_replace("samochodów", "samochodów <br>", $myparam);
$myparam2 = str_replace("samochodów", "samochodów", $myparam);
$myparam = str_replace("-", " ", $myparam);
?>
<!DOCTYPE html>
<html lang="pl-pl">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $myparam2;?>">
    <meta name="keywords" content="Samochody, wyożyczalnia, fastcars24, kraków, warszawa, katowice, śląsk,<?php echo $myparam2;?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FastCars - <?php echo $myparam2;?></title>

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
    <link rel="shortcut icon" type="image/x-icon" href="myImg/logoTop.png"/>
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
        <i class="icon_close"></i>
    </div>
    <!--        <div class="search-icon  search-switch">
                <i class="icon_search"></i>
            </div>-->
    <div class="header-configure-area">
        <div class="language-option">
            <img src="/myImg/poland.png" alt="">
            <span>PL <i class="fa fa-angle-down"></i></span>
            <div class="flag-dropdown">
                <ul>
                    <li style="padding-bottom: 10px;"><img src="/myImg/poland.png" alt=""><a href="#">PL</a></li>
                    <li><img src="/img/flag.jpg" alt=""><a href="#">EN</a></li>
                </ul>
            </div>
        </div>
        <a href="#" class="bk-btn">Zarezerwuj teraz</a>
    </div>
    <nav class="mainmenu mobile-menu">
        <ul>
            <li><a href="/">Start</a></li>
            <li><a href="/#nasze_samochody">Nasze samochody</a></li>
            <li><a href="/o-nas">O nas</a></li>
            <li class="active"><a href="/lokalizacje/Wynajem-samochodów-sportowych-Sosnowiec">Lokalizacje</a>
                <ul class="dropdown">
                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Częstochowa">Częstochowa</a></li>
                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Gliwice">Gliwice</a></li>
                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Katowice">Katowice</a></li>
                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Kraków">Kraków</a></li>
                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Sosnowiec">Sosnowiec</a></li>
                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Warszawa">Warszawa</a></li>
                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Sopot">Sopot</a></li>
                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowychLeszno">Leszno</a></li>
                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Legnica">Legnica</a></li>
                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Wrocław">Wrocław</a></li>
                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Poznań">Poznań</a></li>
                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Opole">Opole</a></li>
                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Lublin">Lublin</a></li>
                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Łódź">Łódź</a></li>
                </ul>
            </li>
            <li><a href="/oferta">Oferta</a></li>
            <li><a href="/kontakt">Kontakt</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="top-social">
        <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
        <!--            <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-tripadvisor"></i></a>-->
        <a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
    </div>
    <ul class="top-widget emailAndPhone">
        <li><a href="mailto:biuro@fastcars24.com"><i class="fa fa-envelope"></i> biuro@fastcars24.com
</a></li>
        <li><a href="tel:+48 786 862 109"><i class="fa fa-phone"></i> +48 786 862 109 </a></li>
        <li><a href="tel:+48 537 417 462"><i class="fa fa-phone"></i> +48 532 718 466 </a></li>
    </ul>
</div>
<!-- Offcanvas Menu Section End -->

<!-- Header Section Begin -->
<header class="header-section">
    <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="tn-left emailAndPhone">
                        <li><a href="mailto:biuro@fastcars24.com"><i class="fa fa-envelope"></i> biuro@fastcars24.com
</a></li>
                        <li><a href="tel:+48 786 862 109"><i class="fa fa-phone"></i> +48 786 862 109 </a></li>
                        <li><a href="tel:+48 537 417 462"><i class="fa fa-phone"></i> +48 532 718 466 </a></li>
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
                        <a  href="#" class="bk-btn">Zarezerwuj teraz</a>
                        <div class="language-option">
                            <img src="/myImg/poland.png" alt="">
                            <span>PL <i class="fa fa-angle-down"></i></span>
                            <div class="flag-dropdown">
                                <ul>
                                    <li style="padding-bottom: 10px;"><img src="/myImg/poland.png" alt=""><a href="#">PL</a></li>
                                    <li><img src="/img/flag.jpg" alt=""><a href="#">EN</a></li>
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
                        <a href="/">
                            <img src="/myImg/logo2.png" alt="">
                        </a>
                    </div>
                </div>
                <li class="col-lg-10">
                    <div class="nav-menu">
                        <nav class="mainmenu">
                            <ul>
                                <li><a href="/">Start</a></li>
                                <li><a href="/#nasze_samochody" >Nasze Samochody</a></li>
                                <li><a href="/o-nas">O nas</a></li>
                                <li class="active"><a href="/lokalizacje/Wynajem-samochodów-sportowych-Kraków">Lokalizacje</a>
                                    <ul class="dropdown">
                                        <li>
                                            <div class="row" style="width: 250px;background-color: #18F105
;">
                                                <ul class="list-unstyled col-md-6">
                                                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Częstochowa">Częstochowa</a></li>
                                                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Gliwice">Gliwice</a></li>
                                                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Katowice">Katowice</a></li>
                                                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Kraków">Kraków</a></li>
                                                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Sosnowiec">Sosnowiec</a></li>
                                                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Warszawa">Warszawa</a></li>
                                                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Sopot">Sopot</a></li>
                                                </ul>
                                                <ul style="padding-left:25px;" class="list-unstyled col-md-6">
                                                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowychLeszno">Leszno</a></li>
                                                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Legnica">Legnica</a></li>
                                                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Wrocław">Wrocław</a></li>
                                                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Poznań">Poznań</a></li>
                                                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Opole">Opole</a></li>
                                                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Lublin">Lublin</a></li>
                                                    <li><a href="/lokalizacje/Wynajem-samochodów-sportowych-Łódź">Łódź</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="/oferta">Oferta</a></li>
                                <li><a href="/kontakt">Kontakt</a></li>
                            </ul>
                        </nav>
                        <!--                            <div class="nav-right search-switch">
                                                        <i class="icon_search"></i>
                                                    </div>-->
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
                        <span><?php echo $myparam;?></span>
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
                                <span>FastCars24</span>
<!--                                <h3 style="color:#ffffff">Wypożyczalnia samochodów sportowych i luksusowych</h3>-->
                            </div>
<!--                            <p style="color:#18F105
;">Oferujemy Państwu wynajem samochodów sportowych oraz luksusowych na terenie Wrocławia oraz możliwość dostarczenia samochodu pod dowolny adres na terenie Polski oraz Europy.</p>-->
                            <p class="s-para">Siedziba wypożyczalni FastCars24 znajduje się w Sosnowcu. To jednak nie oznacza, że działamy jedynie na terenie tego miasta - dostosowujemy się do potrzeb Klientów, dlatego zasięg naszych usług obejmuje teren całej Polski!
                                <br><br>
                                W naszej bogatej ofercie można znaleźć, m.in. opcję wypożyczenia samochodu z transportem pod wskazany adres. To z pewnością duże ułatwienie dla współczesnego kierowcy. Gwarantujemy szybkość i sprawność w wypełnieniu wszelkich formalności.
                                <br><br
                                Zdecydowałeś/aś się na samochód z FastCars24? Teraz bez obaw możesz bezpiecznie wyruszyć w drogę!
                            </p>
<!--                            <a href="#" class="primary-btn about-btn">Dowiedz się więcej</a>-->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-pic">
                            <div class="row">
                                <img style="border: 1px solid #18F105
; margin-top:30px;" src="/myImg/mazdasrodek.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<section class="services-section spad"style="padding-top: 125px!important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>FastCars24</span>
                    <h2>Skontaktuj się z nami</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="far fa-envelope fa-3x"></i>
                    <h4>Email</h4>
                    <p>biuro@fastcars24.com
</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="fas fa-phone fa-3x"></i>
                    <h4>Telefon</h4>
                    <p>+48 786 862 109</p>
                    <p>+48 532 718 466</p>
                </div>
            </div>
            <!--                <div class="col-lg-3 col-sm-6">
                                <div class="service-item">
                                    <i class="fas fa-phone fa-3x"></i>
                                    <h4>Telefon</h4>
                                    <p>+48 532 718 466</p>
                                </div>
                            </div>-->
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="fas fa-map-marker-alt fa-3x"></i>
                    <h4>Adres</h4>
                    <p>Wspólna 3A, 41-200 Sosnowiec</p>
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
                                <img src="/myImg/logo2Footer.png" alt="">
                            </a>
                        </div>
                        <p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a style="color:#18F105
;text-decoration: underline;" href="#" target="_blank">FastCars</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="ft-contact">
                        <h6>Nawigacja</h6>
                        <ul>
                            <li><a href="index">Start</a></li>
                            <li><a href="./#nasze_samochody">Nasze Samochody</a></li>
                            <li><a href="./o-nas">O nas</a></li>
                            <li ><a href="./lokalizacje.php">Lokalizacje</a>
                            <li><a href="./oferta">Oferta</a></li>
                            <li><a href="./kontakt">Kontakt</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="ft-about">
                        <div class="fa-social">
                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
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
            <div class="search-close-switch"><i style="color:#18F105
" class="icon_close"></i></div>
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
