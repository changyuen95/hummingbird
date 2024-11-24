@extends('layouts.app')

@section('title', 'hummingbird')


@section('content')
    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div><!-- /.preloader -->


    @push('logo')
    <img class="logo-res desktop-only" src="/assets/images/humming-bird.png" alt="">
    <img class="logo-res mobile-only" src="/assets/images/logo_mobile.png" alt="">

@endpush

@push('menu')
<a href="#" style="color:black" class="side-menu__toggler"><i class="muzex-icon-menu"></i></a>
@endpush

        <div class="contact-one">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">

                        <div class="block-title-two text-center">
                            <p style="font-size:32px;font-weight:500">Contact Us</p>
                            <p style="font-size:16px">Get in touch and stay informed. Fill Out the enquiry form below and we will get back to you soon.</p>
                        </div><!-- /.block-title-two -->

                        <form action="{{ route('enquiry-form') }}" style="margin-bottom:50px" method="POST">
                            @csrf
                            <div class="form-group">
                                <label style="font-size:16px;font-family:Inter" for="name">Name: <span>* </span></label>
                                <input type="text" class="form-control contact-form" id="name" name="name" placeholder="Enter your name" required>
                            </div>

                            <div class="form-group">
                                <label style="font-size:16px;font-family:Inter" for="email">Email: <span>* </span></label>
                                <input type="email" class="form-control contact-form" id="email" name="email" placeholder="Enter your email" required>
                            </div>

                            <div class="form-group">
                                <label style="font-size:16px;font-family:Inter" for="comment">Message:<span> * </span></label>
                                <textarea class="form-control contact-form" id="comment" name="comment" rows="4" placeholder="Enter your message" required></textarea>
                            </div>

                            <button type="submit" class="btn " style="padding:10px 20px;color:white;background-color:#D9D9D9">Send</button>
                            <span style="float: right;font-family: 'Inter';font-size: 12px;font-weight: 400;">* Required</span>
                        </form>

                    </div><!-- /.col-lg-4 -->

                    <div class="col-lg-2"></div>

                    <div class="col-lg-4" style="align-content:center">
                        <div" style="align-content: center;">
                        <p style="font-weight:700;text-align: -webkit-left;margin-bottom:5px;font-size:14px;font-family:Inter">Hummingbird</p>
                        <div style="margin: 0px;display: grid;font-size: 12px;text-align: -webkit-left;">
                                <span style="font-weight: 100 !important;margin-bottom:-8px;font-size:14px;font-family:Inter">Wisma Parlo, No 72, Jalan Kampong Attap</span>
                                <span style="font-weight: 100 !important;margin-bottom:-8px;font-size:14px;font-family:Inter">50460 Kuala Lumpur , Malaysia</span></div><div style="margin: 0px;display: grid;font-size: 12px;text-align: -webkit-left;margin-top: 20px;">
                                <span style="font-weight: 100 !important;margin-bottom:-8px;font-size:14px;font-family:Inter">Tel: +60123019260</span>
                                <span style="font-weight: 100 !important;margin-bottom:-8px;font-size:14px;font-family:Inter">enquiry@hummingbird.my</span>
                                <span style="font-weight: 100 !important;margin-bottom:-8px;font-size:14px;font-family:Inter">KPL No.0218</span>
                                <a href="https://wa.me/60123019260?" style="margin-top:30px" target="_blank" class="whatsapp-button">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Logo" class="whatsapp-icon">
                                    Whatsapp Us
                                </a>
                        </div>

                    </div>
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.contact-one -->

        @include('layouts.footer')

    </div>

    @endsection
