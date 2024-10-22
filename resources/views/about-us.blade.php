@extends('layouts.app')

@section('title', 'humming bird')


@section('content')
<!-- Banner Section -->

@push('header')
        <div class="banner-carousel thm__owl-carousel owl-theme owl-carousel" >

            <!-- Slide Item  -->

            <div class="slide-item">
                <div class="image-layer lazy-image" style="background-image: url('assets/images/about-us/bg.png');background-position:center"></div>

                <div class="container bg-title-margin" >
                    <div class="content-box text-center">
                        <h3>For travelers, <br> By travelers</h3>

                    </div>
                </div>
            </div>
        </div>
   @endpush

   @push('logo')
        <img style="width: 198px;height: 50px;" src="/assets/images/humming-bird-white.png" alt="">
   @endpush

   @push('menu')
    <a href="#" style="color:white" class="side-menu__toggler"><i class="muzex-icon-menu"></i></a>
   @endpush

   <div class="centered-section abt-us-title">
        <p style="text-align:center;margin-bottom:0px;font-size:1.4rem" class="mobile-only">We are travelers,</p>
        <p style="text-align:center;font-size:1.4rem" class="mobile-only">crafting and curating tours for travelers</p>
        <p style="text-align:center;margin-bottom:0px;font-size:1.4rem" class="desktop-only">We are travelers,crafting and curating tours</p>
        <p style="text-align:center;font-size:1.4rem" class="desktop-only">for travelers</p>
        <p style="line-height:22px;font-size: 10px;">At Hummingbird, we believe that travel is not just about visiting new places; it's about immersing yourself in the rich tapestry of cultures, histories, and landscapes that our world has to offer. We craft and curate tours for those who see travel as a profound experience—an opportunity for personal growth, connection, and discovery.</p>
        <p style="line-height:22px;font-size: 10px;">Calling Fellow Travelers!</p>
        <p style="line-height:22px;font-size: 10px;">If you are a traveler seeking adventure, cultural enrichment, or simply a break from the ordinary, our thoughtfully crafted tours invite you to experience travel in its most profound form.</p>
        <p style="line-height:22px;font-size: 10px;">Join Hummingbird on a journey of discovery and embark on a journey that promises not just sights but meaningful experiences that will stay with you long after your travels have ended. Your adventure awaits—let’s create something extraordinary together!</p>
    </div>


    <div class="about-us-container">
        <!-- First Row: Full Width Image -->
        <div class="about-us-row">
            <img class="about-us-full-width-image" src="/assets/images/about-us/top.png" alt="Full Width Image">
        </div>

        <!-- Second Row: Left Image, Right Text -->
        <div class="about-us-row">
            <div class="about-us-col-left">
                <img class="about-us-image" src="/assets/images/about-us/map.png" alt="Left Image">
            </div>
            <div class="about-us-col-right">
                <p class="abt-content-title">Our Hummingbird-in-Chief, Kae Chong</h2>
                <p class="abt-content-word">Kae has been traveling for over 20 years. Since his backpacking journey through China in 2007, he has ventured across 5 continents, exploring diverse landscapes from the Himalayan to the Andes ranges and visiting various parts of Asia, Europe, and the Americas.</p>
                <p class="abt-content-word">Kae’s innovative and creative spirit inspires him to combine the discovery of soul-enriching destinations with the art of travel photography.</p>
                <p class="abt-content-word">Hummingbird is his personal project designed to share his extensive travel knowledge with others. Through Hummingbird, Kae aims to craft unforgettable experiences that go beyond typical trips, blending travel photography with deep cultural insights.</p>
            </div>
        </div>

        <!-- Third Row: Left Text, Right Image -->
        <div class="about-us-row">
            <div class="about-us-col-left">
                <p class="abt-content-title">Building Deep Connections</p>
                <p class="abt-content-word">Traveling to forge deep connections with the places we visit and learning from the rich tapestry of cultures and religions.</p>

            </div>
            <div class="about-us-col-right">
                <img class="about-us-image" src="/assets/images/about-us/building.png" alt="Right Image">
            </div>
        </div>

        <!-- Fourth Row: Left Image, Right Text -->
        <div class="about-us-row">
            <div class="about-us-col-left">
                <img class="about-us-image" src="/assets/images/about-us/exploration.png" alt="Left Image">
            </div>
            <div class="about-us-col-right">
                <p class="abt-content-title">Exchange and Explorotion</p>
                <p class="abt-content-word">Traveling to engage in meaningful exchanges with people from all walks of life and exploring uncharted territories.</p>
            </div>
        </div>

        <!-- Fifth Row: Left Text, Right Empty -->
        <div class="about-us-row">
            <div class="about-us-col-left">
                <p class="abt-content-title">Broadening Horizons</p>
                <p class="abt-content-word">Traveling to broaden horizons, embracing the unexpected, and finding beauty in the unfamiliar.</p>
            </div>
            <div class="about-us-col-right">
                <!-- Empty right column -->
            </div>
        </div>
    </div>


    <div class="content-container" style="background-image: url('/assets/images/abt-us.png');">
        <div class="background-box">
            <h2 class="center-heading">Ready to travel?</h2>
        <p class="center-paragraph">
            No matter which itinerary you choose, we guarantee an enriching travel experience that goes beyond the ordinary.
        </p>
        <p class="center-paragraph">
            Contact us today to learn more about our thematic, special interest, private, and collaborative tour options. Let’s embark on an unforgettable adventure together!
        </p>
            <div class="icon-container">
                <div class=" icon">
                    <img class="small-image" src="{{asset('assets/images/our-services/left-button.png')}}" alt="Icon 1">
                </div>
                <div class="icon">
                    <img class="small-image" src="{{asset('assets/images/our-services/right-button.png')}}" alt="Icon 1">
                </div>
            </div>
        </div>
    </div>




    @include('layouts.footer')
</div><!-- /.about-cta__wrapper -->


@endsection

@push('styles')
<link rel="stylesheet" href="/assets/css/bespoke.css">

    <style>
        .muzex-icon-menu{
            color:white !important;
        }
    </style>

@endpush

@push('scripts')


    <script>
        $(document).ready(function(){
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
        });







    </script>
@endpush

