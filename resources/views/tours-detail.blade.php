@extends('layouts.app')

@section('title', 'detail')

@php
$encoded = urldecode(request('name'));

$tour = config('tour.tours.'.$encoded);
@endphp



@section('content')

@push('header')
    <div class="banner-carousel thm__owl-carousel owl-theme owl-carousel" >

        <!-- Slide Item  -->

        <div class="slide-item" >
            <div class="image-layer lazy-image" style="background-image: url('{{$tour['image']}}');"></div>


        </div>
    </div>
@endpush
@push('logo')
        <img class="logo-res" src="/assets/images/humming-bird-white.png" alt="">
   @endpush
   @push('menu')
    <a href="#" style="color:white" class="side-menu__toggler"><i class="muzex-icon-menu"></i></a>
   @endpush

<div class="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div><!-- /.preloader -->




<div class="page-wrapper">



    <section class="blog-one blog-standard-page">
        <div class="container" style="padding-left:0px;padding:right:0px">


            <div class="row" style="align-items: unset;">


                <div class="col-lg-4 mobile-off" >
                    <div class="sidebar__single">
                        <ul class="sidebar-index" style="list-style:none">
                            <li><a href="#introduction" class="index-link">Introduction</a></li>
                            <li><a href="#itinerary" class="index-link">Itinerary</a></li>
                            <li><a href="#tourfare" class="index-link">Tour Fare</a></li>
                            <li><a href="#paymentterms" class="index-link">Payment Terms</a></li>
                            <li><a href="#included" class="index-link">What's Included</a></li>
                            <li><a href="#excluded" class="index-link">What's Not Included</a></li>
                            <li><a href="#tnc" class="index-link">Terms & Conditions</a></li>
                            <li><button class="book-now-desktop">Book Now</button></li>
                        </ul>
                    </div>
                </div>

                <!-- Left Content -->
                <div class="col-lg-8 col-12 detail-content-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-one__single">

                                <div class="blog-one__content">
                                    <ul style="padding-left:0px;list-style:none">
                                        <li>
                                            <div class="">
                                                <ul class="title-list inline">
                                                    @foreach($tour['tags'] as $tag)
                                                    <li class="title-item">
                                                        <div class="title-button" value="{{$tag}}">{{$tag}}</div>
                                                    </li>

                                                    @endforeach
                                                </ul>
                                            </div><!-- /.event-three__content -->

                                        </li>
                                    </ul>
                                    <h3 style="font-size:32px;font-family">{{$tour['name']}}</h3>
                                    <div class="mobile-off">
                                        <div class="row">
                                            <div class="col-1"><img src="/assets/images/destination.png" style="width: 15px;height: 15px;"></div>
                                            <div class="col-11 res-padding" ><p style="font-family:sans-serif">{{$tour['destination'] ?? ''}}</p></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-1"><img src="/assets/images/clock.png" style="width: 15px;height: 15px;"></div>
                                            <div class="col-11 res-padding" ><p style="font-family:sans-serif">From {{ Carbon\Carbon::parse($tour['from_date'])->format('d M Y') }} to {{Carbon\Carbon::parse($tour['to_date'])->format('d M Y')}} | {{$tour['days'] ?? 0}} days {{($tour['days'] ?? 0) - 1}} nights </p></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-1"><img src="/assets/images/pax.png" style="width: 15px;height: 15px;"></div>
                                            <div class="col-11 res-padding" ><p style="font-family:sans-serif">Group Size: Minimum {{$tour['minimum_pax'] ?? 0}} pax
                                            (Maximum {{$tourp['max_pax'] ?? 0}} pax)</p></div>
                                        </div>
                                    </div>

                                    <div class="desktop-off">
                                        <div class="row">
                                            <div class="col-1"><img src="/assets/images/destination.png" style="width: 15px;height: 15px;"></div>
                                            <div class="col-11 res-padding" ><p style="font-family:sans-serif">{{$tour['destination'] ?? ''}}</p></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-1"><img src="/assets/images/clock.png" style="width: 15px;height: 15px;"></div>
                                            <div class="col-11 res-padding" ><p style="font-family:sans-serif">{{$tour['days'] ?? 0}} days {{($tour['days'] ?? 0) - 1}} nights </p></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-1"><img src="/assets/images/pax.png" style="width: 15px;height: 15px;"></div>
                                            <div class="col-11 res-padding" ><p style="font-family:sans-serif">Minimum group size of {{$tour['minimum_pax'] ?? 0}} persons + {{$tour['leaders'] ?? 0}} tour leaders</p></div>
                                        </div>
                                    </div>


                                    <h3 style="margin-top:35px" id="introduction">Introduction</h3>


                                    @foreach ($tour['introduction'] as $introduction)
                                        <p style="font-size:14px">{{$introduction}}</p><br>
                                    @endforeach

                                </p>

                                <h3 style="margin-top:30px" id="itinerary" >Itinerary</h3>
                                <p style="font-size:12px">Tour itineraries are subject to change. We will inform you of any amendments as soon as we become aware of them.</p>

                                    @foreach ( $tour['itinerary'] as $key => $itinerary)


                                    <div class="day-section">
                                        <div class="day-number">Day {{$itinerary['day']}} {{$itinerary['range'] > 0 ? ' - '. $itinerary['range'] : ''}}</div>
                                        <div class="day-title">{{$itinerary['title'] ?? ''}}</div>
                                        <div class="toggle-arrow" onclick="toggleContent('content{{$key}}')">
                                            <img style="display:block" id ="content{{$key}}_up" src="/assets/images/up.png">
                                            <img style="display:none" id ="content{{$key}}_down" src="/assets/images/down.png">

                                        </div>
                                    </div>
                                    <div class="content" style="display:none" id="content{{$key}}">
                                        <ul style="mobile-padding-left">
                                            @foreach ($itinerary['highlights'] as $highlights)
                                                <li>{{$highlights}}</li>
                                            @endforeach

                                        </ul>

                                        <div>
                                            <p style="font-weight:700">Accomodation</p>
                                            <p> {{$itinerary['accommodation']}} </p>
                                        </div>

                                        <div>
                                            <p style="font-weight:700">Meal Included</p>
                                            <p> {{$itinerary['accommodation']}} </p>
                                        </div>

                                    </div>
                                    @endforeach

                                    <h3 style="margin-top:35px" id="tourfare">Tour Fare</h3>
                                    <p class="bold-small" style="background-color: #D3B89D;padding: 14px 0px 5px 15px;">
                                        Estimated Tour Fare per Person
                                    </p>
                                    <div style="display:flex">
                                        <span class="tour_fare_desc">
                                            Ground Fare
                                        </span>
                                        <span class="tour_fare_price">
                                            From RM {{number_format($tour['tour_fare']['total']) ?? 0}}
                                        </span>
                                    </div>

                                    <p class="bold-small" style="background-color: #D3B89D;padding: 14px 0px 5px 15px;">
                                        Optional Add-Ons
                                    </p>
                                    <div style="display:flex;border-bottom: 1px solid black;padding-bottom:10px;margin-bottom:10px">
                                        <span class="tour_fare_desc">
                                            Additional cost for single room occupancy
                                        </span>
                                        <span class="tour_fare_price">
                                            From RM {{number_format($tour['tour_fare']['additional']) ?? 0}}
                                        </span>
                                    </div>
                                    <div style="display:flex;border-bottom: 1px solid black;padding-bottom:10px;margin-bottom:10px">
                                        <span class="tour_fare_desc">
                                            International return flight fare (with check-in luggage)
                                        </span>
                                        <span class="tour_fare_price">
                                            From RM {{number_format($tour['tour_fare']['return']) ?? 0}}
                                        </span>
                                    </div>


                                    <p style="margin-top:20px">
                                      TOUR FARE VALIDITY
                                    </p>
                                    <ul>
                                        @foreach ($tour['validity'] as $validity)
                                            <li>
                                                {{$validity}}
                                            </li>
                                        @endforeach


                                    </ul>

                                    <h3 class="mobile-off" id="paymentterms">Payment Terms</h3>
                                    <h3 class="bold-small desktop-off" id="paymentterms">Payment Terms</h3>

                                    <ul>
                                        @foreach ($tour['payment_terms'] as $payment_terms)
                                            <li>
                                                {{$payment_terms}}
                                            </li>
                                        @endforeach
                                    </ul>

                                    <div id="included" class="row">
                                        <div class="col-lg-6">
                                            <h3>What's Included</h3>
                                            <ul>
                                                @foreach ($tour['whats_included'] as $whats_included)
                                                    <li>
                                                        {{$whats_included}}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        <div id="excluded" class="col-lg-6">
                                            <h3>What's Not Included</h3>
                                            <ul>
                                                @foreach ($tour['whats_excluded'] as $whats_excluded)
                                                    <li>
                                                        {{$whats_excluded}}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>



                                    </div>
                                    <div>
                                        <a href="https://wa.me/60123019260?text={{$tour['name']}}" target="_blank">
                                            <button class="book-now-desktop" >Book Now</button>
                                        </a>


                                        <a  href="/tnc" target="_blank">
                                            <button class="custom-button">Click here to view our terms and conditions</button>
                                        </a>

                                    </div>



                                </div><!-- /.blog-one__content -->

                            </div><!-- /.blog-one__single -->

                        </div><!-- /.col-lg-12 -->


                    </div><!-- /.row -->
                </div><!-- /.col-lg-8 -->

                <!-- Right Sidebar -->

                    </div><!-- /.sidebar -->
                    <div>

                        <button class="desktop-off full-width-button" style="padding-left: 0px;padding-right:0px">Book Now</button>


                    </div>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-one blog-grid-page -->

    @include('layouts.footer')
</div><!-- /.page-wrapper -->

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
            <img src="assets/images/logo-1-1.png" alt="" width="143">
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
        <p class="side-content__block__text site-footer__copy-text"><a href="#">Muzex</a> <i class="fa fa-copyright"></i> 2020 All Right Reserved</p>
    </div><!-- /.side-content__block-inner -->
</div><!-- /.side-content__block -->

<div class="side-menu__block">

    @stack('menu')
        <!-- /.fa fa-close --></a>

    <div class="side-menu__block-overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.side-menu__block-overlay -->
    <div class="side-menu__block-inner ">

        <a href="/" class="side-menu__logo"><img src="assets/images/logo-light-1-1.png" alt="" width="143"></a>
        <nav class="mobile-nav__container">
            <!-- content is loading via js -->
        </nav>
        <p class="side-menu__block__copy">(c) 2020 <a href="#">Muzex</a> - All rights reserved.</p>
        <div class="side-menu__social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-google-plus"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
        </div>
    </div><!-- /.side-menu__block-inner -->
</div><!-- /.side-menu__block -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
@endsection

@push('styles')
    <link rel="stylesheet" href="/assets/css/detail.css">
@endpush

@push('scripts')


    <script>

            $('.banner-carousel').owlCarousel({
                items: 1,
                margin: 0,
                dots: false,
                nav: true,
                smartSpeed: 0, // Set to 0 for no transition speed
                autoplay: false,
                autoplayTimeout: 6000,
                autoplayHoverPause: false,
                animateIn: false, // Make sure this is false
                animateOut: false, // Make sure this is false
                loop: true // Optional, depending on whether you want it to loop
            });

            function toggleContent(id) {
                console.log('toggleContent');
                const content = document.getElementById(id);
                content.style.display = content.style.display === 'none' ? 'block' : 'none';
                const content_image_up = document.getElementById(id+'_up');
                const content_image_down = document.getElementById(id+'_down');

                content_image_up.style.display = content.style.display === 'none' ? 'block' : 'none';
                content_image_down.style.display = content.style.display === 'none' ? 'none' : 'block';

            }


            // JavaScript/jQuery to detect scroll position and set active class

            $('.index-link').on('click', function() {
                const links = document.querySelectorAll(".index-link");

                    links.forEach((link) => {
                        link.classList.remove("active");
                        // if (link.getAttribute("href") === "#" + current) {
                        //     link.classList.add("active");
                        // }
                        $(this).addClass("active");
                    });

            });

            window.onscroll = function() {
                var banner = document.querySelector('.sidebar__single').pageYOffset;
                var sidebar = document.querySelector('.sidebar__single');
                var contentPosition = document.querySelector('#tourfare').offsetTop;
                console.log(window.pageYOffset);
                // Add the 'fixed-sidebar' class when scrolling past the content position
                if (window.pageYOffset >= 897) {
                    sidebar.classList.add('fixed-sidebar');
                } else {
                    sidebar.classList.remove('fixed-sidebar');
                }
            };



    </script>
@endpush
