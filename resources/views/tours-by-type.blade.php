@extends('layouts.app')

@section('title', 'hummingbird')

@section('content')
<div class="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div><!-- /.preloader -->

<div class="page-wrapper">


    @push('logo')
    <img class="logo-res desktop-only" src="/assets/images/humming-bird.png" alt="">
    <img class="logo-res mobile-only" src="/assets/images/logo_mobile_black.png" alt="">

@endpush

@push('menu')
<a href="#" style="color:black" class="side-menu__toggler"><i class="muzex-icon-menu"></i></a>
@endpush


    <section class="event-three">

        <div class="main-list-dynamic">

            <div class="list-side">

                <div class="title-container">
                    <p style=" font-weight: 300; font-size: 32px;  color: black;">Tours by Type</p>
                    <button id="toggle-button" class="toggle-btn" onclick="toggleFilters()">
                        <img src="/assets/images/up.png" alt="Toggle" id="toggle-icon" />
                    </button>
                </div>



                <div class="filter-sidebar" style="display: block" id="filter-content">
                    <div class="filter-box">
                        <div class="filter-head">
                            <span class="main-filter-title">Filter by</span>
                        </div>
                        <div class="filter-head">
                            <span class="filter-title">Types</span>
                        </div>
                        <ul class="filter-list inline">
                            <li class="filter-item">
                                <div class="filter-button types" value="All">All</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button types" id="adventure" value="Adventure">Adventure</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button types" id="culture" value="Culture">Culture</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button types" id="wellness" value="Wellness">Wellness</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button types" id="lifestyle" value="Art & Lifestyle">Art & Lifestyle</div>
                            </li>

                        </ul>
                    </div>

                    <div class="filter-box">
                        <div class="filter-head">
                            <span class="filter-title">Region</span>
                        </div>
                        <ul class="filter-list inline">
                            <li class="filter-item">
                                <div class="filter-button destination" value="All">All</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button destination" value="South America">South America</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button destination" value="Central America">Central America</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button destination" value="Scandinavia">Scandinavia</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button destination" value="Central Asia">Central Asia</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button destination" value="East Asia">East Asia</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button destination" value="South Asia">South Asia</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button destination" value="South-East Asia">South-East Asia</div>
                            </li>
                        </ul>
                    </div>

                    <div class="filter-box">
                        <div class="filter-head">
                            <span class="filter-title">Travel Date</span>
                        </div>
                        <ul class="filter-list inline">
                            <li class="filter-item">
                                <div class="filter-button date" value="All">All</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button date" value="1">Jan - Mar</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button date" value="4">Apr - Jun</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button date" value="7">July - Sept</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button date" value="10">Oct - Dec</div>
                            </li>
                        </ul>
                    </div>

                    <div class="filter-box">
                        <div class="filter-head">
                            <span class="filter-title">By Season</span>
                        </div>
                        <ul class="filter-list inline">
                            <li class="filter-item">
                                <div class="filter-button season " value="All">All</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button season" value="Spring">Spring</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button season" value="Summer">Summer</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button season" value="Autumn">Autumn</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button season" value="Winter">Winter</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>



                {{--  --}}

            <div class="container" style="padding-left:0px;padding:right:0px">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-main" role="tabpanel" aria-labelledby="pills-main-tab"> @include('tours')</div>
                </div>

            </div><!-- /.container -->
        </div>

        {{-- <div class="private-tours-bg" style="background-image: url('/assets/images/private-tour-bg.png');">

                <div class="private-box">
                    <h2 style="font-size: 2.5em; margin-bottom: 20px;">Private Tours</h2>
                    <p style="font-size: 1.2em;">
                        Wish to explore new destinations with your family and friends only?
                        Our private tour service is for families and friends who want to create unforgettable memories together,
                        all while enjoying a private & personalised travel experience.
                    </p>
                </div>

        </div> --}}

        <div class="private-tours-bg" style="margin-top:100px;background-image: url('/assets/images/private-tour-bg.png');">

            <div class="private-box" style="width:60%">
                <h2 style="font-size: 24px;font-weight:500;padding: 35px;">Private Tours</h2>
                <p class="private-tour-size" style="font-size: 16px;font-weight:300;line-height:28px">
                    Wish to explore new destinations with your family and friends only?
                    Our private tour service is for families and friends who want to create unforgettable memories together,
                    all while enjoying a private &amp; personalised travel experience.
                </p><div style="display:flex;column-gap:10px;place-content: center;margin-bottom: 10px;">
                    <p style="line-height:22px;font-size: 1rem;padding-top:20px;padding-bottom:20px">Private Tour</p><a href="/private-tour" style="width:32px;height:33px;margin-top:15px" class="redirect-button">→</a>
                        </div>

            {{-- <p style="line-height:22px;font-size: 1rem;padding-top:20px;padding-bottom:20px">Private Tour</p><a href="/avout-us" style="width:32px;height:33px;margin-top:15px" class="redirect-button">→</a> --}}
                </div>
            </div>
        </div>
    </section><!-- /.event-three -->


    @include('layouts.footer')
</div><!-- /.page-wrapper -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
@endsection


@push('scripts')

<script>
               $(document).ready(function() {
                    var type = "{{ request('type') }}".trim();

                    console.log(type);

                    if (type) {
                        $('#' + type).click();
                    }
                });



            function toggleFilters() {
                var filterContent = document.getElementById("filter-content");
                var toggleIcon = document.getElementById("toggle-icon");

                // Toggle visibility
                if (filterContent.style.display === "none" || filterContent.style.display === "") {
                    filterContent.style.display = "block";
                    toggleIcon.src = "/assets/images/up.png"; // Change icon to up arrow
                } else {
                    filterContent.style.display = "none";
                    toggleIcon.src = "/assets/images/down.png"; // Change icon to down arrow
                }



            }

            function updateTours(tours) {
                tour_html_temp = $($.parseHTML($('.all-tour')[0].outerHTML))
                $('.tour-list').html('')

                for (let i = 0; i < tours.length; i++) {
                    tour = tours[i]
                    tour_html = tour_html_temp

                    tour_html.find('.popup-gallery').prop('href', tour['name']) // Replace link
                    tour_html.find('.update-image').prop('src', 'https://admin.hummingbird.my'+tour['image']) // Replace image
                    let fromDate = new Date(tour['from_date']);
                    let toDate = new Date(tour['to_date']);

                    let fromDateFormatted = new Intl.DateTimeFormat('en-GB', { day: '2-digit', month: 'short' }).format(fromDate);
                    let toDateFormatted = new Intl.DateTimeFormat('en-GB', { day: '2-digit', month: 'short', year: 'numeric' }).format(toDate);

                    tour_html.find('.update-date').text((fromDateFormatted ?? null) + ' - ' + toDateFormatted) // Replace country
                    tour_html.find('.update-days').text((tour['days'] ?? 0) + ' Days ' + (tour['days']-1) + ' Nights') // Replace country
                    tour_html.find('.update-destination').text(tour['destination'] ?? null) // Replace country
                    tour_html.find('.update-price').text('RM '+ (tour['price'] ?? null)) // Replace country
                    tour_html.find('.update-name').text(tour['name'] ?? null) // Replace country
                    // tour_html.find('.all-tour').attr('onclick', "redirectTour('" + tour['index'] + "')");
                    tour_html.attr('data-index', tour['name'] ?? null);



                    // tour_html.find('.highlight-master').html('');
                    // tour_html.find('.highlight-master').append(tour['html_output_en']);
                    tour_html.find('.update-tags').html('');


                    if(tour['tags']){

                        // tour_html.find('.update-tags').append(`<ul class="title-list inline">`);

                        tour['tags'].forEach(element => {

                            tour_html.find('.update-tags').append(`<li class="title-item"><div class="title-button destination" value="`+element+`">`+element+`</div></li>`);



                        });
                        // tour_html.find('.update-tags').append(`</ul>`);

                    }

                    // tour_html.find('.tour-html').html('');

                    tour_html = tour_html[0].outerHTML
                    // Append new tours



                    $('.tour-list').append(tour_html)

                }

            }



            $(document).on('click', '.filter-button', function() {
                $(this).toggleClass('active');

                // Collect filter data
                var types = $(".types.active").map(function() { return this.getAttribute('value'); }).get();
                var destination = $(".destination.active").map(function() { return this.getAttribute('value'); }).get();
                var season = $(".season.active").map(function() { return this.getAttribute('value'); }).get();
                var date = $(".date.active").map(function() { return this.getAttribute('value'); }).get();

                // Prepare the data object
                var data = {
                    destinations: destination,
                    date: date,
                    types: types,
                    season: season,
                };

                // Call the new API endpoint using GET method
                $.ajax({
                    url: '/get-tours', // Updated URL
                    method: 'GET', // Changed to GET method
                    data: data, // Data sent as query parameters
                    success: function(res) {
                        if (res.tours && res.tours.length > 0) {
                            updateTours(res.tours);
                            $('.tour-list').css('display', 'flex').show();
                        } else {
                            $('.tour-list').hide();
                        }
                    },
                    error: function(err) {
                        console.error('Error:', err);
                    },
                });
            });






</script>

@endpush
