@extends('layouts.app')

@section('title', 'hummingbird')


@section('content')
<!-- Banner Section -->

@push('header')
        <div class="banner-carousel thm__owl-carousel owl-theme owl-carousel" >

            <!-- Slide Item  -->

            <div class="slide-item">
                <div class="image-layer lazy-image" style="background-image: url('assets/images/bespoke.png');background-position:center;"></div>

                <div class="container bg-title-margin" >
                    <div class="content-box text-center">
                        <h3>Celebrate the spirit of <br> adventure and exploration</h3>

                    </div>
                </div>
            </div>
        </div>
   @endpush

   @push('logo')
        <img style="width:247px;height:67px" src="/assets/images/humming-bird-white.png" alt="">
   @endpush

   @push('menu')
    <a href="#" style="color:white" class="side-menu__toggler"><i class="muzex-icon-menu"></i></a>
   @endpush


   <div class="centered-section">
        <p style="font-size:32px;line-height:48px;font-weight:300">Private Tours</p>
        <p style="margin-bottom:30px;line-height:48px;font-size:14px;padding-left:5%;padding-right:5%">Wish to explore new destinations with your family and friends only? Our private tour service is for families and friends who want to create unforgettable memories together, all while enjoying a private & personalised travel experience.</p>

        <p style="font-weight:500;font-size:16px">Why choose Private Tours ?</p>
    </div>

    <div class="bespoke-container">
        <div class="left-content">
            <h5 style="font-size:24px;line-height:40px;font-weight:300">Exclusive Experiences</h5>
            <p class="desktop-padding-25" style="margin-top:35px">Enjoy the comfort of traveling with your inner circle. Our private tours allow you to share special moments without the presence of strangers.</p>
        </div>



        <div class="separator"><img src="/assets/images/line.png"></div>


        <div class="right-content">
            <h5 style="font-size:24px;line-height:40px;font-weight:300">Tailored Itineraries</h5>
            <p class="desktop-padding-25" style="margin-top:35px">Customize your journey to include activities and sights that resonate with your group’s interests—whether it’s adventure, culture, or relaxation.</p>
        </div>
    </div>

    <div style="margin-bottom:8rem" class="button-container">
        <a href="https://wa.me/60123019260?text=private tour" target="_blank"><button class="center-button book-now-desktop" style="width:188px;height:53px">Talk to Us</button></a>
    </div>



    {{-- <div class="slider-container">
        <div class="slider">
            <div class="slide">
                <div><img src="{{asset('assets/images/bespoke/tour1.png')}}" alt="Image 1"></div>
            </div>
            <div class="slide">
                <div><img src="{{asset('assets/images/bespoke/tour2.png')}}" alt="Image 2"></div>
            </div>
            <div class="slide">
                <div><img src="{{asset('assets/images/bespoke/tour3.png')}}" alt="Image 3"></div>
            </div>

        </div>

    </div> --}}

    {{-- <div class="banner-carousel thm__owl-carousel owl-theme owl-carousel" >

        <!-- Slide Item  -->

        <div class="slide-item">
        <div class="image-layer lazy-image" style="background-image: url('assets/images/home-banner.png');"></div>

    </div> --}}

    <div class="slider-container thm__owl-carousel owl-theme owl-carousel" style="z-index:9999">
        <div><img class="desktop-padding-img" src="{{asset('assets/images/bespoke/tour1.png')}}" alt="Image 1"></div>
        <div><img class="desktop-padding-img" src="{{asset('assets/images/bespoke/tour5.png')}}" alt="Image 2"></div>
        <div><img class="desktop-padding-img" src="{{asset('assets/images/bespoke/tour6.png')}}" alt="Image 3"></div>
        <!-- Add more images here -->
    </div>

    <div class="owl-nav">
        <button style="z-index:9999" class="owl-prev desktop-padding-button-left"><img src="{{asset('assets/images/bespoke/left.png')}}" alt="Previous"></button>
        <button style="z-index:9999" class="owl-next desktop-padding-button-right"><img src="{{asset('assets/images/bespoke/right.png')}}" alt="Next"></button>
    </div>



    {{-- contact us  --}}
    <div class="bespoke-content-container" style="background-image:url('/assets/images/bespoke/bg.png'); ">
        <h2 class="bespoke-title" style="font-size:16px;font-weight:600">Contact Us and Let Us Know:</h2>

        <!-- First Row -->
        <div class="bespoke-row" style="margin:6rem 0px">
            <div class="bespoke-content-item">
                <img src="{{asset('assets/images/bespoke/where.png')}}" alt="Image 1">
                <h3 style="font-weight:300;font-size:24px;line-height:40px" >Where</h3>
                <p style="font-weight:300;font-size:16px;line-height:24px;padding-left:2%;padding-right:2%;margin-top:15px">Where is your group planning to travel to?</p>

            </div>
            <div class="bespoke-content-item">
                <img src="{{asset('assets/images/bespoke/when.png')}}" alt="Image 2">
                <h3 style="font-weight:300;font-size:24px;line-height:40px">When</h3>
                <p style="font-weight:300;font-size:16px;line-height:24px;padding-left:2%;padding-right:2%;margin-top:15px">When does your group wish to travel?</p>

            </div>
            <div class="bespoke-content-item">
                <img src="{{asset('assets/images/bespoke/duration.png')}}" alt="Image 3">
                <h3 style="font-weight:300;font-size:24px;line-height:40px">Duration</h3>
                <p style="font-weight:300;font-size:16px;line-height:24px;padding-left:2%;padding-right:2%;margin-top:15px">How many days are you looking to travel?</p>

            </div>
            <div class="bespoke-content-item">
                <img src="{{asset('assets/images/bespoke/group_size.png')}}" alt="Image 4">
                <h3 style="font-weight:300;font-size:24px;line-height:40px">Group  Size</h3>
                <p style="font-weight:300;font-size:16px;line-height:24px;padding-left:2%;padding-right:2%;margin-top:15px">How many people are there in your group?</p>

            </div>

        </div>

        <!-- Second Row -->
        <div class="bespoke-row">
            <div class="bespoke-content-item">
                <img src="{{asset('assets/images/bespoke/budget.png')}}" alt="Image 5">
                <h3 style="font-weight:300;font-size:24px;line-height:40px">Budget</h3>
                <p style="font-weight:300;font-size:16px;line-height:24px;padding-left:2%;padding-right:2%;margin-top:15px">What is your group’s budget?</p>
            </div>
            <div class="bespoke-content-item">
                <img src="{{asset('assets/images/bespoke/age_group.png')}}" alt="Image 6">
                <h3 style="font-weight:300;font-size:24px;line-height:40px">Age Group</h3>
                <p style="font-weight:300;font-size:16px;line-height:24px;padding-left:2%;padding-right:2%;margin-top:15px">What is your group’s overall age?</p>
            </div>
            <div class="bespoke-content-item">
                <img src="{{asset('assets/images/bespoke/interest.png')}}" alt="Image 7">
                <h3 style="font-weight:300;font-size:24px;line-height:40px">Interest</h3>
                <p style="font-weight:300;font-size:16px;line-height:24px;padding-left:2%;padding-right:2%;margin-top:15px">What type of tour is your group interested in?</p>
            </div>
        </div>
        <div style="
    text-align-last: center;
    padding-bottom: 2rem;
"><a href="https://wa.me/60123019260?text=private tour" target="_blank">
<button class="center-button book-now-desktop">Talk to Us</button>
</a></div>
    </div>


    <div class="bespoke-mobile-content-container">
        <h2 class="bespoke-mobile-title" style="font-size:14px;line-height:24px;font-weight:600">Contact Us and Let Us Know:</h2>

        <div class="bespoke-mobile-row row">
            <div class="bespoke-mobile-content-item col-6">

                <img src="{{asset('assets/images/bespoke/where.png')}}" alt="Image 6">
                <h3 style="font-weight:300;font-size:16px;line-height:24px;margin-top:25px">Where</h3>
                <p style="font-weight:300;font-size:12px;line-height:20px;padding-left:10%;padding-right:10%">Where is your group planning to travel to?</p>
                {{-- <img src="down-arrow.png" alt="Down Arrow" class="down-arrow"> --}}
            </div>
            <div class="bespoke-mobile-content-item col-6">
                <img src="{{asset('assets/images/bespoke/when.png')}}" alt="Image 6">
                <h3 style="font-weight:300;font-size:16px;line-height:24px;margin-top:25px">When</h3>
                <p style="font-weight:300;font-size:12px;line-height:20px;padding-left:10%;padding-right:10%">When does your group wish to travel?</p>
                {{-- <img src="down-arrow.png" alt="Down Arrow" class="down-arrow"> --}}
            </div>
            <div class="bespoke-mobile-content-item col-6">
                <img src="{{asset('assets/images/bespoke/duration.png')}}" alt="Image 6">
                <h3 style="font-weight:300;font-size:16px;line-height:24px;margin-top:25px">Duration</h3>
                <p style="font-weight:300;font-size:12px;line-height:20px;padding-left:10%;padding-right:10%">How many days are you looking to travel?</p>
                {{-- <img src="down-arrow.png" alt="Down Arrow" class="down-arrow"> --}}
            </div>
            <div class="bespoke-mobile-content-item col-6">
                <img src="{{asset('assets/images/bespoke/group_size.png')}}" alt="Image 6">
                <h3 style="font-weight:300;font-size:16px;line-height:24px;margin-top:25px">Group Size</h3>
                <p style="font-weight:300;font-size:12px;line-height:20px;padding-left:10%;padding-right:10%">How many people are there in your group?</p>
                {{-- <img src="down-arrow.png" alt="Down Arrow" class="down-arrow"> --}}

            </div>
            <div class="bespoke-mobile-content-item col-6">
                <img src="{{asset('assets/images/bespoke/budget.png')}}" alt="Image 6">
                <h3 style="font-weight:300;font-size:16px;line-height:24px;margin-top:25px">Budget</h3>
                <p style="font-weight:300;font-size:12px;line-height:20px;padding-left:10%;padding-right:10%">What is your group’s budget?</p>
                {{-- <img src="down-arrow.png" alt="Down Arrow" class="down-arrow"> --}}

            </div>
            <div class="bespoke-mobile-content-item col-6">
                <img src="{{asset('assets/images/bespoke/age_group.png')}}" alt="Image 6">
                <h3 style="font-weight:300;font-size:16px;line-height:24px;margin-top:25px">Age Group</h3>
                <p style="font-weight:300;font-size:12px;line-height:20px;padding-left:10%;padding-right:10%">What is your group’s overall age?</p>
                {{-- <img src="down-arrow.png" alt="Down Arrow" class="down-arrow"> --}}

            </div>
            <div class="bespoke-mobile-content-item col-6">
                <img src="{{asset('assets/images/bespoke/interest.png')}}" alt="Image 6">
                <h3 style="font-weight:300;font-size:16px;line-height:24px;margin-top:25px">Interest</h3>
                <p style="font-weight:300;font-size:12px;line-height:20px;padding-left:10%;padding-right:10%">What type of tour is your group interested in?</p>
            </div>
        </div>
        <a href="https://wa.me/60123019260?text=private tour" target="_blank">
        <button class="center-button book-now-desktop">Talk to Us</button>
        </a>

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

