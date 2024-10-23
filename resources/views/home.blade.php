@extends('layouts.app')

@section('title', 'hummingbird')


@section('content')
<!-- Banner Section -->
    @push('header')
        <div class="banner-carousel thm__owl-carousel owl-theme owl-carousel" >

            <!-- Slide Item  -->

            <div class="slide-item">
                <div class="image-layer lazy-image" style="background-image: url('assets/images/home-banner.png');background-position:center;"></div>

                <div class="container bg-title-margin" >
                    <div class="content-box text-center">
                        <h3>For travelers, <br> By travelers</h3>

                    </div>
                </div>
            </div>
        </div>
   @endpush

   @push('logo')
        <img class="logo-res" src="/assets/images/humming-bird-white.png" alt="">
   @endpush

   @push('menu')
    <a href="#" style="color:white" class="side-menu__toggler"><i class="muzex-icon-menu"></i></a>
   @endpush

   <div class="centered-section abt-us-title">
        <p style="text-align:center;margin-bottom:0px;font-size:1.4rem" class="mobile-only">Crafting journeys that go beyond</p>
        <p style="text-align:center;font-size:1.4rem" class="mobile-only">the surface</p>
        <p style="text-align:center;margin-bottom:0px;font-size:1.4rem" class="desktop-only">Crafting journeys that go beyond</p>
        <p style="text-align:center;font-size:1.4rem" class="desktop-only">the surface</p>
        <p style="line-height:22px;font-size: 1em;">True travelers seek more than just destinations — they crave experiences that resonate with their curiosity and passion.
            "For travelers, by travelers" reflects Hummingbird’s commitment to crafting journeys that go beyond the surface,
            designed by people who understand the difference between being a tourist and being a traveler.</p>
            <div style="display:flex;column-gap:10px;margin-bottom:50px">
        <p style="line-height:22px;font-size: 1em;">About Hummingbird</p><a href="/about-us" style="width:32px;height:33px;margin-top:-6px" class="redirect-button">→</a>
            </div>
        <p style="text-align:center;margin-bottom:20px;font-size:1.4rem">We know what it means to dive deeper, to find authenticity, and to embrace the unexpected.</p>
        <p style="line-height:22px;font-size: 1em;">Our itineraries aren’t just about checking boxes—they’re tailored to your sense of adventure, with the same care and insight we seek for ourselves. We’re here to ensure that every moment of your journey feels as fulfilling as the one you’ve imagined, because we’ve been there too.</p>

    </div>



    <div class="centered-section">
        <p style="text-align:center;margin-bottom:0px;font-size:1.4rem">Tours by Type</p>
    </div>


    {{-- images --}}

    <div class="image-row">
        <div class="image-container"  onclick="redirect('adventure')">
            <img src="{{asset('assets/images/home/adventure.png')}}" alt="Image 1">
            <div class="image-text">Adventure</div>
        </div>
        <div class="image-container" onclick="redirect('culture')">
            <img src="{{asset('assets/images/home/culture.png')}}" alt="Image 1">
            <div class="image-text">Culture</div>
        </div>
    </div>

    <div class="image-row" >
        <div class="image-container" onclick="redirect('wellness')">
            <img src="{{asset('assets/images/home/wellness.JPG')}}" alt="Image 1">
            <div class="image-text">Wellness</div>
        </div>
        <div class="image-container" onclick="redirect('lifestyle')">
            <img src="{{asset('assets/images/home/art lifestyle.JPG')}}" alt="Image 1">
            <div class="image-text">Art & Lifestyle</div>
        </div>
    </div>


    <div class="private-tours-bg" style="background-image: url('/assets/images/home/private tours.png');">

        <div class="private-box">
            <h2 style="font-size: 2em;padding: 30px;">Private Tours</h2>
            <p class="private-tour-size" style="font-size: 1em;">
                Wish to explore new destinations with your family and friends only?
                Our private tour service is for families and friends who want to create unforgettable memories together,
                all while enjoying a private &amp; personalised travel experience.
            </p><div style="display:flex;column-gap:10px;place-content: center;margin-bottom: 10px;">
        <p style="line-height:22px;font-size: 1rem;padding-top:20px;padding-bottom:20px">Private Tour</p><a href="/about-us" style="width:32px;height:33px;margin-top:15px" class="redirect-button">→</a>
            </div>
        </div>
    </div>


    @include('layouts.footer')
</div><!-- /.about-cta__wrapper -->


@endsection

@push('styles')
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


        console.log('all good');

        });

        function redirect(type){
            window.location.href = '/tours-by-type/'+'?type='+type;
        }

    </script>
@endpush

