<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>华总</title> -->
    <title>@yield('title')</title>


    <meta name="description" content="hummingbird">
    <meta property="og:title" content="hummingbird"/>
    <meta property="og:description" content="hummingbird" />
    <meta property="og:url" content="https://hummingbird.my/" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="hummingbird" />
    <meta property="og:image" content="https://dama-huazong.com/assets/images/humming-bird.png" />

    <meta property="og:type" content="article" />

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/images/favicon/site.webmanifest">

    <!-- Fonts URL -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700%7CPlayfair+Display:400,500,600,700,800,900%7CWork+Sans:300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/hover-min.css">
    <link rel="stylesheet" href="/assets/css/muzex-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css?v=3.1">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <link rel="stylesheet" href="/assets/css/customs.css">

        @stack('styles')

</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div><!-- /.preloader -->

    <div class="page-wrapper">
        @include('layouts.header')

        @yield('content')
    </div>

    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- /.search-popup__inner -->
    </div><!-- /.search-popup -->

    <div class="side-content__block">
        <div class="side-content__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-content__block-overlay -->
        <div class="side-content__block-inner ">
            <a href="/">
                <img src="/assets/images/logo-1-1.png" >
            </a>
            <div class="side-content__block-about">
                <h3 class="side-content__block__title">About Us</h3><!-- /.side-content__block__title -->
                <p class="side-content__block-about__text">We must explain to you how all seds this mistakens idea off denouncing pleasures and praising pain was born and I will give you a completed accounts off the system and </p><!-- /.side-content__block-about__text -->
                <a href="#" class="thm-btn side-content__block-about__btn">Get Consultation</a>
            </div><!-- /.side-content__block-about -->
            <hr class="side-content__block-line" />
            <div class="side-content__block-contact">
                <h3 class="side-content__block__title">Contact Us</h3><!-- /.side-content__block__title -->
                <ul class="side-content__block-contact__list">
                    <li class="side-content__block-contact__list-item">
                        <i class="fa fa-map-marker"></i>
                        Rock St 12, Newyork City, USA
                    </li><!-- /.side-content__block-contact__list-item -->
                    <li class="side-content__block-contact__list-item">
                        <i class="fa fa-phone"></i>
                        <a href="tel:526-236-895-4732">(526) 236-895-4732</a>
                    </li><!-- /.side-content__block-contact__list-item -->
                    <li class="side-content__block-contact__list-item">
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:example@mail.com">example@mail.com</a>
                    </li><!-- /.side-content__block-contact__list-item -->
                    <li class="side-content__block-contact__list-item">
                        <i class="fa fa-clock"></i>
                        Week Days: 09.00 to 18.00 Sunday: Closed
                    </li><!-- /.side-content__block-contact__list-item -->
                </ul><!-- /.side-content__block-contact__list -->
            </div><!-- /.side-content__block-contact -->
            <p class="side-content__block__text site-footer__copy-text"><a href="#">华总</a> <i class="fa fa-copyright"></i> 2020 All Right Reserved</p>
        </div><!-- /.side-content__block-inner -->
    </div><!-- /.side-content__block -->

    <div class="side-menu__block">

        <a href="#" class="side-menu__toggler side-menu__close-btn"><i class="fa fa-times"></i>
            <!-- /.fa fa-close --></a>

        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->

        <div class="side-menu__block-inner res-sidewidth">

            <a href="/" class="side-menu__logo "><img class="logo-res logo-margin" src="/assets/images/humming-bird-white.png" alt=""></a>

            <div style="display:block">
                <div class="menu-res">
                    <nav class="mobile-nav__container">
                        <!-- content is loading via js -->
                    </nav>

                </div>

                <div class="side-menu__block__copy desktop-only" style="align-content: center;margin-left:40px">
                    <p style="text-align: -webkit-left;margin-bottom:-8px;color:white;font-weight:700;font-family:Inter">Hummingbird</p>
                    <div style="margin: 0px;display: grid;font-size: 12px;text-align: -webkit-left;">
                        <div style="cursor: pointer;display:contents;" id="re-address">
                            <span style="font-weight: 400 !important;font-family: Inter;margin-bottom:-8px;font-size:14px;text-decoration:underline;">Wisma Parlo, No 72, Jalan Kampong Attap</span>
                            <span style="font-weight: 400 !important;font-family: Inter;margin-bottom:-8px;font-size:14px;text-decoration:underline;">50460 Kuala Lumpur , Malaysia</span></div><div style="margin: 0px;display: grid;font-size: 12px;text-align: -webkit-left;margin-top: 20px;">
                        </div>
                            <span style="font-weight: 400 !important;font-family: Inter;margin-bottom:-8px;font-size:14px">Tel: +6012-3456789</span>
                            <span style="font-weight: 400 !important;font-family: Inter;margin-bottom:-8px;font-size:14px">enquiry@hummingbird.my</span>
                            <span style="font-weight: 400 !important;font-family: Inter;margin-bottom:-8px;font-size:14px">KPL No. 0218</span>
                    </div>
                </div>
            </div>
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- Template JS -->

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/bootstrap-datepicker.min.js"></script>
    <script src="/assets/js/bootstrap-select.min.js"></script>
    <script src="/assets/js/isotope.js"></script>
    <script src="/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/assets/js/jquery.validate.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/TweenMax.min.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/jquery.lettering.min.js"></script>
    <script src="/assets/js/jquery.circleType.js"></script>

    <!-- Custom Scripts -->
    <script src="/assets/js/theme.js"></script>

        <script>

            $('#re-address').click(function(){
                var url = "https://www.google.com/maps/place/Parlo+Tours+Travel+Agency+%7C+Kuala+Lumpur/@3.1372495,101.6957696,17z/data=!3m1!4b1!4m6!3m5!1s0x31cc49db4e9f29c7:0x83e4b3a1e3c5ea7e!8m2!3d3.1372495!4d101.6957696!16s%2Fg%2F1vc7_9n6?entry=ttu&g_ep=EgoyMDI0MTExMy4xIKXMDSoASAFQAw%3D%3D";
                event.preventDefault();
                window.open(url, '_blank').focus();
            });

            $('#re-thematic').click(function(){
                var url = "/tours-by-type";
                event.preventDefault();
                window.open(url, '_blank').focus();
            });

            $('#re-private').click(function(){
                var url = "/private-tour";
                event.preventDefault();
                window.open(url, '_blank').focus();
            });

            $('.ig-link').click(function(){
                var url = "https://www.instagram.com/hummingbird_my?fbclid=IwZXh0bgNhZW0CMTAAAR1-aiFQ8MEAaS5rDOXUOk8_svQq9sVo42O8TRQI6wY8CtTi7p-kKReeCqQ_aem_00wd9JEeNI9HqfZX10rHvQ";
                event.preventDefault();
                window.open(url, '_blank').focus();
            });

            $('.fb-link').click(function(){
                var url = "https://www.facebook.com/profile.php?id=61558712066428";
                event.preventDefault();
                window.open(url, '_blank').focus();
            });




        </script>
        @stack('scripts')


</body>

</html>
