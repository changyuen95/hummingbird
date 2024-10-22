@extends('layouts.app')

@section('title', 'humming bird')


@section('content')
<!-- Banner Section -->
@push('logo')
        <img style="width: 198px;height: 50px;" src="/assets/images/humming-bird.png" alt="">
   @endpush

   @push('menu')
    <a href="#" style="color:black" class="side-menu__toggler"><i class="muzex-icon-menu"></i></a>
   @endpush




    <div class="centered-section abt-us-title" style="margin-top:90px;">
        <p style="text-align:center;font-size:1.4rem" >Explore Our Unique Travel Experiences</p>
        <p style="line-height:22px;font-size: 0.6rem;">At Hummingbird, we offer a variety of thoughtfully designed itineraries to cater to every type of traveler. Whether you’re seeking a thematic journey, a special interest adventure, or a personalized private tour, we have something for everyone.</p>
         </div>

    <div class="row-section">
        <!-- First Row: Image on the Left, Text on the Right -->
        <div class="our-row" style="margin:0px;padding:0px">
            <div class="image-container">
                <img src="{{asset('assets/images/our-services/01.png')}}" alt="Image 1">
            </div>
            <div class="text-container">
                <h2>01</h2>
                <h2>Thematic Itineraries</h2>
                <p>Our thematic itineraries are crafted around specific themes that resonate with your passions and interests. Dive deep into the essence of a destination through curated experiences, such as:</p>
                <ul>
                    <li>Cultural Explorations</li>
                    <li>Nature and Adventure</li>
                    <li>Festivals</li>
                    <li>Religious Events</li>
                    <li>Pilgrimages</li>

                </ul>

            </div>
        </div>

        <!-- Second Row: Text on the Left, Image on the Right -->
        <div class="our-row" style="margin:0px;padding:0px">
            <div class="text-container">
                <h2>02</h2>
                <h2>Special Interest Itineraries</h2>
                <p>For those with specific interests, our special interest itineraries provide focused experiences that allow you to delve deeper into your passions. Choose from options like:
                </p>
                <ul>
                    <li>Trekking Adventures</li>
                    <li>Wellness Retreats</li>
                    <li>History and Heritage</li>

                </ul>


            </div>
            <div class="image-container">
                <img src="{{asset('assets/images/our-services/02.png')}}" alt="Image 1">
            </div>
        </div>
        <div class="our-row" style="margin:0px;padding:0px">
            <div class="image-container">
                <img src="{{asset('assets/images/our-services/03.png')}}" alt="Image 1">
            </div>
            <div class="text-container">
                <h2>03</h2>
                <h2>Private Tours</h2>
                <p>Experience travel on your own terms with our exclusive private tours. Perfect for families or groups of friends, these tours offer:
                </p>
                <ul>
                    <li>Customized Itineraries</li>
                    <li>Flexibility and Comfort</li>
                    <li>Dedicated Guides</li>

                </ul>

            </div>
        </div>

        <!-- Second Row: Text on the Left, Image on the Right -->
        <div class="our-row" style="margin:0px;padding:0px">
            <div class="text-container">
                <h2>04</h2>
                <h2>Collaborative Tours</h2>
                <p>Our collaborative tours bring together field experts, media personalities, and key opinion leaders (KOLs) to enhance your travel experience. These special interest tours offer:</p>
                <ul>
                    <li>Expert Insights</li>
                    <li>Unique Perspectives</li>
                    <li>Engaging Activities</li>

                </ul>
            </div>
            <div class="image-container">
                <img src="{{asset('assets/images/our-services/04.png')}}" alt="Image 1">
            </div>
        </div>

    </div>



    <div class="content-container">
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
    <style>
        .text-container p{
            font-size: 0.6rem;
        }

        li{
            font-size:0.6rem;
        }
    </style>

@endpush

@push('scripts')


    <script>


    </script>
@endpush

