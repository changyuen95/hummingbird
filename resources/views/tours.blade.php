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

                    <div class="" style="height:60px">
                        <ul class="update-tags title-list inline">
                            @foreach ( $tour['tags'] as $tag )
                            <li class="title-item">
                                <div class="title-button destination" value="{{$tag}}">{{$tag}}</div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div><p class="update-name" style="font-family:Inter;font-size: 20px;font-weight: 300;line-height:20px">{{$tour['name']}}</p>
                    <span class="update-price" style="font-family:Inter;margin-top: 10px;font-weight:700;font-size:16px;line-height:40px">{{'RM '. $tour['price']}}</span>
                    <span class="update-date" style="font-family:Inter;font-size: 14px;font-weight: 400;line-height:24px">{{$tour['from_date'] .' - '.$tour['to_date']}}</span>
                    <span class="update-days" style="font-family:Inter;font-size: 14px;font-weight: 400;line-height:24px">{{$tour['days'] . ' Days ' . $tour['days'] - 1 . ' Nights'}}</span>
                    <span class="update-destination" style="font-family:Inter;font-size: 14px;font-weight: 400;line-height:24px">{{$tour['destination']}}</span>


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
    var click = 0;


        function redirectTour(name) {


            console.log(click);
            $('.preloader').fadeIn('slow');
            window.location.href = '/tours-by-type/' + name;
            $('.preloader').fadeOut('slow');



        }


</script>
@endpush
