@extends('layouts.app')

@section('title', 'Humming bird')

@section('content')
<div class="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div><!-- /.preloader -->

<div class="page-wrapper">


    @push('logo')
    <img style="width: 198px;height: 50px;" src="/assets/images/humming-bird.png" alt="">
@endpush

@push('menu')
<a href="#" style="color:black" class="side-menu__toggler"><i class="muzex-icon-menu"></i></a>
@endpush


    <section class="event-three">

        <div class="main-list-dynamic">

            <div class="list-side">

                <div class="title-container">
                    <p style="font-family: 'Karla'; font-weight: 400; font-size: 26px; color: black;">Tours by Type</p>
                    <button id="toggle-button" class="toggle-btn" onclick="toggleFilters()">
                        <img src="/assets/images/up.png" alt="Toggle" id="toggle-icon" />
                    </button>
                </div>



                <div class="filter-sidebar" style="display: block" id="filter-content">
                    <div class="filter-box">
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
                            <span class="filter-title">Popular Destination</span>
                        </div>
                        <ul class="filter-list inline">
                            <li class="filter-item">
                                <div class="filter-button destination" value="All">All</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button destination" value="China">China</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button destination" value="India">India</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button destination" value="Nepal">Nepal</div>
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
                                <div class="filter-button date" value="1-3">Jan - Mar</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button date" value="4-6">Apr - Jun</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button date" value="7-9">July - Sept</div>
                            </li>
                            <li class="filter-item">
                                <div class="filter-button date" value="10-12">Oct - Dec</div>
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

        <div class="private-tours-bg" style="background-image: url('/assets/images/private-tour-bg.png');">

            <div class="private-box">
                <h2 style="font-size: 2em;padding: 30px;">Private Tours</h2>
                <p class="private-tour-size" style="font-size: 1em;">
                    Wish to explore new destinations with your family and friends only?
                    Our private tour service is for families and friends who want to create unforgettable memories together,
                    all while enjoying a private &amp; personalised travel experience.
                </p><div style="display:flex;column-gap:10px;place-content: center;margin-bottom: 10px;">
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

                    tour_html.find('.popup-gallery').prop('href', tour['tour_detail_link']) // Replace link
                    tour_html.find('.update-image').prop('src', tour['image']) // Replace image
                    tour_html.find('.update-date').text((tour['from_date'] ?? null) + ' - ' + tour['to_date']) // Replace country
                    tour_html.find('.update-days').text((tour['days'] ?? 0) + 'Days ' + (tour['days']-1) + 'Nights') // Replace country
                    tour_html.find('.update-destination').text(tour['destination'] ?? null) // Replace country
                    tour_html.find('.update-price').text('From RM '+ (tour['price'] ?? null)) // Replace country
                    tour_html.find('.update-name').text(tour['name'] ?? null) // Replace country


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

            function filter_update() {
                var types = $(".types.active").map(function() {
                    return this.getAttribute('value');
                }).get();

                var destination = $(".destination.active").map(function() {
                    return this.getAttribute('value');
                }).get();

                var season = $(".season.active").map(function() {
                    return this.getAttribute('value');
                }).get();

                var date = $(".date.active").map(function() {
                    return this.getAttribute('value');
                }).get();

                    data = {}
                    data['destinations'] = destination;
                    data['types'] = types;
                    data['season'] = season;
                    data['date'] = date;

                var url = `/get-tours/`;
                // if (URL_QUERY != null) {
                //     url = `{{ config("app.url") }}/get-tours/${ TOUR_LIST_TYPE }/${ page_id }` + URL_QUERY
                // }

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: data,
                    url: url,
                    method: 'GET',
                    success: function(res) {
                        // pagination

                        // content
                        if (res.tours.length > 0) {
                            updateTours(res.tours)
                            // $('.hotel-list-data').css('display','block');
                            $('.tour-list').show() // Show all content
                            // $('.tour_list__container #no_result_message').remove()
                        } else {
                            $('.tour-list').hide() // Hide all content
                            // Append no content msg
                        }

                        // Scroll to top of content

                        seamlessScroll(document.getElementById('#tour-list'), {
                            scrollBehavior: 'smooth'
                        });
                    },
                    error: function(err) {
                        $('.system_error__container').show()
                        // Scroll to top of content
                        seamlessScroll(document.getElementById('#tour-list'), {
                            scrollBehavior: 'smooth'
                        });
                    },
                }).always(() => {
                    waiting_for_pagination_response = false
                    $('#fullscreen_loader_modal__container').removeClass('show_fullscreen_loader_modal show_modal') // Remove loader
                })
            }

            $(document).on('click', '.filter-button', function() {

                $(this).toggleClass('active');
                var types = $(".types.active").map(function() {
                    return this.getAttribute('value');
                }).get();

                var destination = $(".destination.active").map(function() {
                    return this.getAttribute('value');
                }).get();

                var season = $(".season.active").map(function() {
                    return this.getAttribute('value');
                }).get();

                var date = $(".date.active").map(function() {
                    return this.getAttribute('value');
                }).get();

                    data = {}
                    data['destinations'] = destination;
                    data['date'] = date;
                    data['types'] = types;
                    data['season'] = season;

                    var url = `/get-tours/`;

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: data,
                    url: url,
                    method: 'GET',
                    success: function(res) {
                        // pagination

                        // content
                        if (res.tours.length > 0) {

                            updateTours(res.tours)
                            $('.tour-list').css('display','flex');

                            $('.tour-list').show() // Show all content
                            // $('#fullscreen_loader_modal__container').removeClass('show_fullscreen_loader_modal show_modal') // Remove loader

                            // $('.tour_list__container #no_result_message').remove()
                        } else {

                            $('.tour-list').hide() // Hide all content
                            // Append no content msg



                        }
                        // Scroll to top of content
                        seamlessScroll(document.getElementById('#tour-list'), {
                            scrollBehavior: 'smooth'
                        });
                    },
                    error: function(err) {
                        // $('.system_error__container').show()
                        // Scroll to top of content
                        seamlessScroll(document.getElementById('#tour-list'), {
                            scrollBehavior: 'smooth'
                        });
                    },
                }).always(() => {
                    waiting_for_pagination_response = false
                    // $('#fullscreen_loader_modal__container').removeClass('show_fullscreen_loader_modal show_modal') // Remove loader
                })

            });




</script>

@endpush
