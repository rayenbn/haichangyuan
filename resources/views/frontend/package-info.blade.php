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
                    <h2 class="page-title">Package Info</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Package Info</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

<!-- main-gallery-area-wrapper -->
<div class="food-area-wrapper main-gallery">
    <div class="pshapes">
        <span class="ps-1"><img src="{{ asset('theme/assets/images/img/htshape22.png') }}" alt=""></span>
        <!-- <span class="ps-2"><img src="{{ asset('theme/assets/images/img/htshape1.png') }}" alt=""></span> -->
        <span class="ps3"><img src="{{ asset('theme/assets/images/shapes/13.png') }}" alt=""></span>
        <span class="ps-4"><img src="{{ asset('theme/assets/images/shapes/14.png') }}" alt=""></span>
        <!-- <span class="ps-5"><img src="{{ asset('theme/assets/images/img/6.png') }}" alt=""></span> -->
        <!-- <span class="ps-6"><img src="{{ asset('theme/assets/images/shapes/16.png') }}" alt=""></span> -->
        <!-- <span class="ps-7"><img src="{{ asset('theme/assets/images/img/6.png') }}" alt=""></span> -->
    </div>
    <div class="container padding-top-120 padding-bottom-120">
        <div class="row">
            <div class="col-md-6 col-12">
                <img src="{{ asset('theme/assets/images/img/packaging-details.jpg') }}">
            </div>
            <div class="col-md-6 col-12">
                <img src="{{ asset('theme/assets/images/img/carton_pack.jpg') }}">
            </div>
        </div>
        <p class="mt-4">
            1. The aluminium foil packaging is sealed in temperatures above 165 degrees Celsius.<br>
            2. Thickness and size of the carton: 5 mm thick, Length: 39.5 cm x Width: 32 cm * Height: 17.5cm; Bear weight pressure: 73.4 kg<br>
            3. A carton can hold up to 24 soup packets.<br>
            4. Usually, a 20-foot container can hold 1274 cartons, but taking into consideration the current capacity of cartons, it is more ideal to fit 980 cartons, unless the cartons are fortified to prevent them from being crushed.<br>
        </p>
        <!-- <a href="#" class="btn2 position-relative z-idnex-1 margin-top-40">load more</a> -->
    </div>
</div>

@endsection