@extends('layouts.theme')
@section('content')
<!-- breadcrumb-area -->
@if ($aboutus->banner_image)
<div class="banner-area breadcrumb-area padding-top-90 padding-bottom-90" style="background-image:url('/storage/images/banners/{{ $aboutus->banner_image }}')">
@else
<div class="banner-area breadcrumb-area padding-top-90 padding-bottom-90">
@endif
    <div class="bread-shapes">
        <span class="b-shape-1 item-bounce"><img src="{{ asset('theme/assets/images/img/htleaf.png') }}" alt=""></span>
        <!-- <span class="b-shape-2"><img src="{{ asset('theme/assets/images/img/6.png') }}" alt=""></span> -->
        <span class="b-shape-3"><img src="{{ asset('theme/assets/images/img/htshape17.png') }}" alt=""></span>
        <!-- <span class="b-shape-4"><img src="{{ asset('theme/assets/images/img/9.png') }}" alt=""></span> -->
        <span class="b-shape-5"><img src="{{ asset('theme/assets/images/shapes/18.png') }}" alt=""></span>
        <span class="b-shape-6 item-animateOne"><img src="{{ asset('theme/assets/images/img/htshape22.png') }}" alt=""></span>
    </div>
    <div class="container padding-top-90">
        <div class="row justify-content-center">
            <nav aria-label="breadcrumb">
                <h2 class="page-title">Discover Haichangyuan</h2>
                <ol class="breadcrumb text-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">discover us</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<section class="about-area about-area2 padding-top-120 padding-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12  wow fadeInLeft">
                <div class="about-left">
                    <div class="about-l-shapes">
                        <span class="als-1"><img src="{{ asset('theme/assets/images/shapes/2.png')}}" alt=""></span>
                    </div>
                    <div class="row">
                        <div
                            class="col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-end justify-content-end margin-bottom-20">
                            <div class="about-gallery-1">
                                <img src="/storage/images/banners/thumbnail/{{ $aboutus->image1 ?? '' }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-8 margin-bottom-20">
                            <div class="about-gallery-2">
                                <img src="/storage/images/banners/thumbnail/{{ $aboutus->image2 ?? '' }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="about-gallery-3">
                                <img src="/storage/images/banners/thumbnail/{{ $aboutus->image3 ?? '' }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5 d-flex align-items-stretch ">
                            <div class="about-gallery-5 text-center">
                                <img src="/storage/images/banners/thumbnail/{{ $aboutus->image4 ?? '' }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12  wow fadeInRight">
                <div class="about-right">
                    <div class="about-r-shapes">
                        <span class="as-1"><img src="../storage/img/thumbnail/{{ $aboutus->image }}" alt=""></span>
                    </div>
                    <h2>{!! $aboutus->title !!}</h2>
                    {!! $aboutus->desc !!}
                    
                </div>
            </div>
        </div>

        <div class="blog-content-part">
            <!-- <div class="blog-title">
                <h4>A Burger Worthy of the Presidnet at Upland</h4>
            </div> -->
            <div class="blog-content wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                {!! $aboutus->desc1 !!}

            </div>
        </div>
    </div>
</section>


    <div class="blog-images margin-top-30">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/1.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-3 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/2.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-3 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/76.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-3 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/3.jpg') }}" alt="image">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/5.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-3 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/6.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-3 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/17.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-3 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/19.jpg') }}" alt="image">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/7.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/8.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/9.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/10.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/11.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/12.jpg') }}" alt="image">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/13.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/14.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/15.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-3 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/25.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-3 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/26.jpg') }}" alt="image">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/18.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-3 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/20.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-3 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/21.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-3 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/22.jpg') }}" alt="image">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/23.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-3 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/24.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-3 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/43.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-3 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/44.jpg') }}" alt="image">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/25.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/26.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/27.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/28.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/29.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/30.jpg') }}" alt="image">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/31.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/32.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/34.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/79.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/35.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/36.jpg') }}" alt="image">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/37.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/38.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/39.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/40.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/41.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/42.jpg') }}" alt="image">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/43.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/44.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/45.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/46.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/47.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/48.jpg') }}" alt="image">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/49.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/50.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/51.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/52.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/77.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/78.jpg') }}" alt="image">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/53.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/54.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/55.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/56.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/57.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/58.jpg') }}" alt="image">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/59.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/60.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/61.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/62.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/63.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/64.jpg') }}" alt="image">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/65.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/66.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/67.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/68.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/69.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/70.jpg') }}" alt="image">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/71.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/72.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/73.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/74.jpg') }}" alt="image">
                </div>
            </div>
            <div class="col-sm-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                <div class="single-image">
                    <img src="{{ asset('theme/assets/images/certificates/75.jpg') }}" alt="image">
                </div>
            </div>
        </div>
      
    </div>
    </div>

    <!-- slider-gallery-img -->
    <!-- <div class="slider-gallery-img">
        <div class="container-fluid">
            <div class="slider-gallery-active">
            @foreach ($gallery as $img)
                <div class="single-gallery-img">
                    <img src="../storage/gallery/thumbnail/{{ $img->picture }}" alt="">
                    <a href="{{ url('/gallery') }}"><span><i class="fas fa-image"></i></span></a>
                </div>
            @endforeach
               
            </div>
        </div>
    </div> -->

@endsection