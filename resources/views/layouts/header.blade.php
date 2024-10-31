

<section class="banner-section">

    <nav class="main-nav-one nav-left stricky" >
        <div class="container" style="padding-left:0px;padding:right:0px">
            <div class="inner-container">
                <div class="logo-box">
                    <a href="/">
                        @stack('logo')
                    </a>
                </div><!-- /.logo-box -->


            </div><!-- /.inner-container -->
        </div><!-- /.container -->
    </nav><!-- /.main-nav-one -->

    <nav class="main-nav-one nav-right stricky" style="position: absolute;top: 20px; right: 20px; z-index: 10; /*">
        <div class="container" style="padding-left:0px;padding:right:0px">
            <div class="inner-container">
                <div class="logo-box">

                @stack('menu')

                </div><!-- /.logo-box -->
                <div class="main-nav__main-navigation">
                    <ul class="main-nav__navigation-box">

                   <li><a href="/">Home</a></li>
                   <li><a href="/about-us">About Us</a></li>
                   <li><a href="/our-services">Our Services</a></li>
                   <li><a href="/tours-by-type">Tours By Type</a></li>
                   <li><a href="/private-tour">Private Tours</a></li>
                   <li><a href="/contact-us">Contact Us</a></li>


                    </ul><!-- /.main-nav__navigation-box -->

                    <div class="mobile-only" style="margin-left: 35px;margin-top: 75px;color: white;font-weight:700"><p style="color: white;">Hummingbird</p>


                        <div style="margin: 0px;display: grid;">
                            <span style="font-weight: 400 !important;!i;!;font-family: system-ui;font-size:14px">Wisma Parlo, No 72, Jalan Kampong Attap</span>
                            <span style="font-weight: 400 !important;!i;!;font-family: system-ui;font-size:14px">50460 Kuala Lumpur , Malaysia</span></div><div style="margin: 0px;margin-top: 30px;display: grid;">
                            <span style="font-weight: 400 !important;!i;!;font-family: system-ui;font-size:14px">Tel: +6012-3456789</span>
                            <span style="font-weight: 400 !important;!i;!;font-family: system-ui;font-size:14px">enquiry@hummingbird.my</span>
                            <span style="font-weight: 400 !important;font-family: system-ui;font-size:14px">KPL No.0218</span>
                        </div>
                    </div>

                </div>



            </div><!-- /.inner-container -->
        </div><!-- /.container -->
    </nav><!-- /.main-nav-one -->


@stack('header')

</section>
