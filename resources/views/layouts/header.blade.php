

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

    <nav class="main-nav-one nav-right stricky">
        <div class="container" style="padding-left:0px;padding:right:0px">
            <div class="inner-container">
                <div class="logo-box">

                @stack('menu')

                </div><!-- /.logo-box -->
                <div class="main-nav__main-navigation">
                    <ul class="main-nav__navigation-box">

                   <li><a href="/about-us">About Us</a></li>
                   <li><a href="/our-services">Our Services</a></li>
                   <li><a href="/tours-by-type">Tours By Type</a></li>
                   <li><a href="/private-tour">Private Tours</a></li>
                   <li><a href="/contact-us">Contact Us</a></li>


                    </ul><!-- /.main-nav__navigation-box -->

                    <div class="mobile-only" style="font-size:14px;margin-left: 35px;margin-top: 75px;color: white;font-weight:700;font-family:Inter"><p style="color: white;">Hummingbird</p>


                        <div style="margin: 0px;display: grid;">
                            <div style="cursor: pointer;display:contents;" class="re-address">
                                <span style="font-weight: 400 !important;font-family: Inter;font-size:14px;text-decoration:underline">Wisma Parlo, No 72, Jalan Kampong Attap</span>
                                <span style="font-weight: 400 !important;font-family: Inter;font-size:14px;text-decoration:underline">50460 Kuala Lumpur , Malaysia</span></div><div style="margin: 0px;margin-top: 30px;display: grid;">
                            </div>
                            <span style="font-weight: 400 !important;font-family: Inter;font-size:14px">Tel: +60123019260</span>
                            <span style="font-weight: 400 !important;font-family: Inter;font-size:14px">enquiry@hummingbird.my</span>
                            <span style="font-weight: 400 !important;font-family: Inter;font-size:14px">KPL No. 0218</span>
                        </div>
                    </div>

                </div>



            </div><!-- /.inner-container -->
        </div><!-- /.container -->
    </nav><!-- /.main-nav-one -->


@stack('header')

</section>
