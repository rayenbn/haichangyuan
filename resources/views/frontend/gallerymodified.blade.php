@extends('layouts.theme')
@section('content')
<!-- breadcrumb-area -->
<div class="banner-area breadcrumb-area padding-top-90 padding-bottom-90">
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
                    <h2 class="page-title">Our Gallery</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

<!-- main-gallery-area-wrapper -->
<div class="food-area-wrapper main-gallery">
    <div class="pshapes">
        <span class="ps-1"><img src="{{ asset('theme/assets/images/img/htshape22.png') }}" alt=""></span>
        <span class="ps-2"><img src="{{ asset('theme/assets/images/img/htshape1.png') }}" alt=""></span>
        <span class="ps3"><img src="{{ asset('theme/assets/images/shapes/13.png') }}" alt=""></span>
        <span class="ps-4"><img src="{{ asset('theme/assets/images/shapes/14.png') }}" alt=""></span>
        <!-- <span class="ps-5"><img src="{{ asset('theme/assets/images/img/6.png') }}" alt=""></span> -->
        <!-- <span class="ps-6"><img src="{{ asset('theme/assets/images/shapes/16.png') }}" alt=""></span> -->
        <!-- <span class="ps-7"><img src="{{ asset('theme/assets/images/img/6.png') }}" alt=""></span> -->
    </div>
    <div class="container padding-top-120 padding-bottom-120">
        <div class="row margin-bottom-60">
            <div class="col-lg-12 col-md-12">
                <div class="gallery-btn button-group filter-button-group">
                    <button class="active" data-filter="*">all items</button>
                    @foreach ($categories as $category)
                    @php
                        $type = str_replace(' ', '-', $category['type']);
                    @endphp
                    <button data-filter=".{{ $type }}">{{ $category['type'] }}</button>
                    @endforeach
                    
                    <!-- <button data-filter=".chicken">chicken</button>
                    <button data-filter=".vege">vegetarian</button> -->
                </div>
            </div>
        </div>
        <div class="row gallery-wrapper grid">
            @foreach ($galleries as $image)
                @php
                    $types = str_replace(' ', '-', $image->type);
                @endphp
            <!-- <div class="col-lg-4 col-md-6 col-12  grid-item"> -->
            <div class="{{ $types }} mr-2" style="width: auto; max-width: 33vw">
                <div class="gallery-img ">
                    <img src="/storage/gallery/thumbnail/{{ $image->picture ?? ''}}" alt="">
                    <div class="gallery-info">
                        <div class="inner-info text-center">
                            <p>{!! $image->type !!}</p>
                            <h6>{!! $image->title !!}</h6>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- <a href="#" class="btn2 position-relative z-idnex-1 margin-top-40">load more</a> -->
    </div>
</div>

@endsection