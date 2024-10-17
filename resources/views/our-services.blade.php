@extends('layouts.app')

@section('title', 'humming bird')


@section('content')
<!-- Banner Section -->


   @push('logo')
        <img style="width:247px;height:67px" src="/assets/images/humming-bird-white.png" alt="">
   @endpush


   <div class="centered-section">
        <h1>Your Heading</h1>
        <p>Your paragraph goes here, providing a description or information.</p>
        <a href="#" class="redirect-button">→</a>
    </div>

    <div class="row-section">
        <!-- First Row: Image on the Left, Text on the Right -->
        <div class="our-row" style="margin:0px;padding:0px">
            <div class="image-container">
                <img src="{{asset('assets/images/our-services/01.png')}}" alt="Image 1">
            </div>
            <div class="text-container">
                <h2>Your Heading 1</h2>
                <p>Your description goes here for the first section. This can be a brief overview or details about the image.</p>
            </div>
        </div>

        <!-- Second Row: Text on the Left, Image on the Right -->
        <div class="our-row" style="margin:0px;padding:0px">
            <div class="text-container">
                <h2>Your Heading 2</h2>
                <p>Your description goes here for the second section. This can be additional information related to the content.</p>
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
                <h2>Your Heading 1</h2>
                <p>Your description goes here for the first section. This can be a brief overview or details about the image.</p>
            </div>
        </div>

        <!-- Second Row: Text on the Left, Image on the Right -->
        <div class="our-row" style="margin:0px;padding:0px">
            <div class="text-container">
                <h2>Your Heading 2</h2>
                <p>Your description goes here for the second section. This can be additional information related to the content.</p>
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
        .muzex-icon-menu{
            color:white !important;
        }
    </style>

@endpush

@push('scripts')


    <script>


    </script>
@endpush

