@extends('layouts.app')

@section('title', 'humming bird')


@section('content')
<!-- Banner Section -->
    @push('header')
        <div class="banner-carousel thm__owl-carousel owl-theme owl-carousel" >

            <!-- Slide Item  -->

            <div class="slide-item">
                <div class="image-layer lazy-image" style="background-image: url('assets/images/home-banner.png');"></div>

                <div class="container" style="margin-top:25%">
                    <div class="content-box text-center">
                        <h3>For Travellers, <br> By Travellers</h3>

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


   <div class="centered-section">
        <h1>Your Heading</h1>
        <p>Your paragraph goes here, providing a description or information.</p>
        <a href="#" class="redirect-button">→</a>
    </div>

    <div class="centered-section">
        <h1>Your Heading</h1>
        <p>Your paragraph goes here, providing a description or information.</p>
        <a href="#" class="redirect-button">→</a>
    </div>

    <div class="centered-section">
        <h1>Your Heading</h1>
        <p>Your paragraph goes here, providing a description or information.</p>
        <a href="#" class="redirect-button">→</a>
    </div>

    <div class="centered-section">
        <h1>Your Heading</h1>
    </div>


    {{-- images --}}

    <div class="image-row">
        <div class="image-container">
            <img src="{{asset('assets/images/home/adventure.png')}}" alt="Image 1">
            <div class="image-text">Text Over Image 1</div>
        </div>
        <div class="image-container">
            <img src="{{asset('assets/images/home/culture.png')}}" alt="Image 1">
            <div class="image-text">Text Over Image 2</div>
        </div>
    </div>

    <div class="image-row">
        <div class="image-container">
            <img src="{{asset('assets/images/home/wellness.png')}}" alt="Image 1">
            <div class="image-text">Text Over Image 3</div>
        </div>
        <div class="image-container">
            <img src="{{asset('assets/images/home/art lifestyle.png')}}" alt="Image 1">
            <div class="image-text">Text Over Image 4</div>
        </div>
    </div>

    <div class="private-tours-bg" style="background-image: url('/assets/images/home/private tours.png');">

        <div class="private-box">
            <h2 style="font-size: 2.5em; margin-bottom: 20px;">Private Tours</h2>
            <p style="font-size: 1.2em;">
                Wish to explore new destinations with your family and friends only?
                Our private tour service is for families and friends who want to create unforgettable memories together,
                all while enjoying a private & personalised travel experience.
            </p>
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

    </script>
@endpush

