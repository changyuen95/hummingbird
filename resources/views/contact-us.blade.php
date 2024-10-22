@extends('layouts.app')

@section('title', 'humming bird')


@section('content')
    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div><!-- /.preloader -->


    @push('logo')
    <img style="width: 198px;height: 50px;" src="/assets/images/humming-bird.png" alt="">
@endpush

@push('menu')
<a href="#" style="color:black" class="side-menu__toggler"><i class="muzex-icon-menu"></i></a>
@endpush

        <div class="contact-one">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">

                        <div class="block-title-two text-center">
                            <p ><b>Contact Us</b></p>
                            <p style="font-size:14px">Get in touch and stay informed. Fill Out the enquiry form below and we will get back to you soon.</p>
                        </div><!-- /.block-title-two -->

                        <form action="{{ route('enquiry-form') }}" style="margin-bottom:50px" method="POST">
                            @csrf
                            <div class="form-group">
                                <label style="font-size:16px" for="name">Name <span>* </span></label>
                                <input type="text" class="form-control contact-form" id="name" name="name" placeholder="Enter your name" required>
                            </div>

                            <div class="form-group">
                                <label style="font-size:16px" for="email">Email <span>* </span></label>
                                <input type="email" class="form-control contact-form" id="email" name="email" placeholder="Enter your email" required>
                            </div>

                            <div class="form-group">
                                <label style="font-size:16px" for="comment">Comment or Message<span>* </span></label>
                                <textarea class="form-control contact-form" id="comment" name="comment" rows="4" placeholder="Enter your comment" required></textarea>
                            </div>

                            <button type="submit" class="btn " style="padding:10px 20px;color:white;background-color:#D9D9D9">Send</button>
                        </form>

                    </div><!-- /.col-lg-4 -->

                    <div class="col-lg-2"></div>

                    <div class="col-lg-4" style="align-content:center">
                        <div" style="align-content: center;">
                        <p style="font-weight:700;text-align: -webkit-left;margin-bottom:-8px">Hummingbird</p>
                        <div style="margin: 0px;display: grid;font-size: 12px;text-align: -webkit-left;">
                                <span style="font-weight: 100 !important;margin-bottom:-8px">Wisma Parlo, No 72, Jalan Kampong Attap</span>
                                <span style="font-weight: 100 !important;margin-bottom:-8px">50460 Kuala Lumpur , Malaysia</span></div><div style="margin: 0px;display: grid;font-size: 12px;text-align: -webkit-left;margin-top: 20px;">
                                <span style="font-weight: 100 !important;margin-bottom:-8px">Tel: +6012-3456789</span>
                                <span style="font-weight: 100 !important;margin-bottom:-8px">enquiry@hummingbird.my</span>
                                <span style="font-weight: 100 !important;margin-bottom:-8px">KPL No.0218</span>
                        </div>
                    </div>
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.contact-one -->


    </div>

    @endsection
