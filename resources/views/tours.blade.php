<div class="main-tour-list"> <div class="row tour-list"  id="tour-list">

@foreach ( config('tour.tours') as $tour)

        <div class="all-tour col-lg-4 col-md-4" onclick="redirectTour('{{$tour['name']}}')">
            <div class="event-three__single">
                <div class="event-three__image">
                    <img class="update-image" style="height:100%" src="{{ $tour['image'] }}" alt="">
                    <!-- <a class="event-three__date" href="event-details.html">
                        <i class="far fa-calendar-alt"></i>
                        Oct 25, 2020
                    </a> -->
                </div><!-- /.event-three__image -->
                <div class="event-three__content" style="height:12.2rem">

                    <div class="">
                        <ul class="update-tags title-list inline">

                            <li class="title-item">
                                <div class="title-button destination" value="China">China</div>
                            </li>
                            <li class="title-item">
                                <div class="title-button destination" value="India">India</div>
                            </li>

                        </ul>
                    </div>

                    <div><p class="update-name" style="font-size: large;font-weight: 700;font-family: karla;">{{$tour['name']}}</p>
                    <span class="update-date">{{$tour['from_date'] .' - '.$tour['to_date']}}</span>
                    <span class="update-days">{{$tour['days'] . ' Days' . $tour['days'] - 1 . ' Nights'}}</span>
                    <span class="update-destination">{{$tour['destination']}}</span>
                    <span class="update-price" style="margin-top: 16px";>{{'From RM '. $tour['price']}}</span>

                    </div>

                </div><!-- /.event-three__content -->
    </div>
</div>

@endforeach
</div>
</div>
            {{-- <div class="col-12">
                <div class="text-center d-flex justify-content-center align-items-center">
                    <!-- <div class="more-post__block">
                        <a class="more-post__link" href="#">
                            更多
                            <span class="curved-circle">View More &nbsp;&emsp;View More &nbsp;&emsp;View More View More View More &nbsp;&emsp;View &nbsp;&emsp; </span>
                        </a>
                    </div> -->
                    <div class="more-post__block">
                        <a class="butn butn__new" href="#">更多</a>
                    </div>
                </div><!-- /.text-center -->
            </div>
        </div><!-- /.row --> --}}

@push('scripts')


<script>

        function redirectTour(name) {
            console.log('redirect');
            $('.preloader').fadeIn('slow');
            window.location.href = '/tours-by-type/' + name;
        }


</script>
@endpush
