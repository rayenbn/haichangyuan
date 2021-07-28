@extends('layouts.theme')
@section('content')
<!-- breadcrumb-area -->
@if ($contactus->banner_image)
<div class="banner-area breadcrumb-area padding-top-90 padding-bottom-90" style="background-image:url('/storage/images/banners/{{ $contactus->banner_image }}')">
@else
<div class="banner-area breadcrumb-area padding-top-90 padding-bottom-90">
@endif
    <div class="bread-shapes">
        <span class="b-shape-1 item-bounce"><img src="{{ asset('theme/assets/images/img/htleaf.png') }}" alt=""></span>
        <!-- <span class="b-shape-2"><img src="assets/images/img/6.png" alt=""></span> -->
        <span class="b-shape-3"><img src="{{ asset('theme/assets/images/img/htshape17.png') }}" alt=""></span>
        <!-- <span class="b-shape-4"><img src="assets/images/img/9.png" alt=""></span> -->
        <span class="b-shape-5"><img src="{{ asset('theme/assets/images/shapes/18.png') }}" alt=""></span>
        <span class="b-shape-6 item-animateOne"><img src="{{ asset('theme/assets/images/img/htshape22.png') }}" alt=""></span>
    </div>
    <div class="container padding-top-90">
        <div class="row justify-content-center">
            <nav aria-label="breadcrumb">
                <h2 class="page-title">Contact Us</h2>
                <ol class="breadcrumb text-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">contact us</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

 <!-- contact-form-area -->
 <section class="about-area about-area2 writeto-us padding-top-120 padding-bottom-60">
    <div class="form-shapes">
        <span class="fs1 item-animateOne"><img src="{{ asset('theme/assets/images/shapes/1.png') }}" alt=""></span>
        <span class="fs2 item-bounce"><img src="{{ asset('theme/assets/images/shapes/12.png') }}" alt=""></span>
        <!-- <span class="fs3"><img src="assets/images/shapes/13.png" alt=""></span> -->
        <span class="fs4 item-bounce"><img src="{{ asset('theme/assets/images/img/htshape2.png') }}" alt=""></span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12  wow fadeInUp">
                <div class="about-left">
                    <div class="about-l-shapes">
                        <span class="als-1"><img src="{{ asset('theme/assets/images/shapes/2.png') }}" alt=""></span>
                    </div>
                    <div class="row">
                        <div
                            class="col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-end justify-content-end margin-bottom-20">
                            <div class="about-gallery-1">
                                <img src="/storage/images/banners/thumbnail/{{ $contactus->image1 ?? '' }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-8 margin-bottom-20">
                            <div class="about-gallery-2">
                                <img src="/storage/images/banners/thumbnail/{{ $contactus->image2 ?? '' }}" alt="">

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="about-gallery-3">
                                <img src="/storage/images/banners/thumbnail/{{ $contactus->image3 ?? '' }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5 d-flex align-items-stretch ">
                            <div class="about-gallery-5 text-center">
                                <img src="/storage/images/banners/thumbnail/{{ $contactus->image4 ?? '' }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 wow fadeInUp">
                <div class="contact-form-area">
                @if(count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $error)
                    <li style="color: red;">-> {{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                @if($message = Session::get('success'))
                <h1 style="font-size: 22px;color:seagreen;">*** {{ $message }} ***</h1>
                @endif
                    <h3>{!! $contactus->title ?? '' !!}</h3>
                    <form class="contact-form" action="{{ url('contact-us/send') }}" method="post">
                        {{ csrf_field() }}
                        <input name="name" placeholder="your name: *" type="text" required>
                        <input name="email" placeholder="Email *" type="email" required>
                        <input name="subject" placeholder="Subject *" type="text">
                        <textarea placeholder="Message *" name="message"  required></textarea>
                        <button type="submit" class="btn2">send a message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

 <!-- info-area -->
 <div class="info-area padding-bottom-120">
    <div class="info-shapes">
        <span class="info-s-1"><img src="{{ asset('theme/assets/images/shapes/7.png') }}" alt=""></span>
        <!-- <span class="info-s-2"><img src="assets/images/img/32.png" alt=""></span> -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay=".2s">
                <div
                    class="single-info d-flex flex-sm-row flex-md-column flex-lg-row justify-content-around align-items-center">
                    <div class="info-img">
                        <img src="{{ asset('theme/assets/images/icons/c1.png') }}" alt="">
                    </div>
                    <div class="info-content text-center text-lg-left">
                        <h5>Contact Us 24/7</h5>
                        <p><b>Phone: </b>{{ $contactus->phone ?? '' }}<br>
                        <b>Email: </b>{{ $contactus->email1 ?? '' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay=".4s">
                <div
                    class="single-info d-flex flex-sm-row flex-md-column flex-lg-row  justify-content-around align-items-center">
                    <div class="info-img">
                        <img src="{{ asset('theme/assets/images/icons/c2.png') }}" alt="">
                    </div>
                    <div class="info-content text-center text-lg-left">
                        <h5>Get Direction</h5>
                        <p>{{ $contactus->address ?? '' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay=".6s">
                <div
                    class="single-info d-flex flex-sm-row flex-md-column flex-lg-row  justify-content-around align-items-center">
                    <div class="info-img">
                        <img src="{{ asset('theme/assets/images/icons/c3.png') }}" alt="">
                    </div>
                    <div class="info-content text-center text-lg-left">
                        <h5>Opening Hours</h5>
                        <p>{{ $contactus->opening_time ?? '' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- map area -->
 <div class="map-area padding-bottom-120 wow fadeInUp">
        <div class="map-shapes">
            <div class="ms-1"><img src="assets/images/shapes/16.png" alt=""></div>
        </div>
        <div class="container">
            <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.2639241774236!2d113.19986717525151!3d23.08743251320751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3402578ccb205c25%3A0xd1964f7dce69874b!2sShui%20Jie%20Lu%2C%20Nanhai%20Qu%2C%20Foshan%20Shi%2C%20Guangdong%20Sheng%2C%20China!5e0!3m2!1sen!2s!4v1622087640369!5m2!1sen!2s"
                width="1190" height="400" style="border:0;" allowfullscreen="" loading="lazy" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
    </div>
@endsection