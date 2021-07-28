<?php

use App\Http\Controllers\Controller;

$social_media = Controller::footer();

?>
@extends('layouts.theme')
@section('content')
<!-- portfolio banner area -->
<div class="portfolio-banner padding-top-120">
    <div class="banner-shapes">
        <span class="bs1"><img src="{{ asset('theme/assets/images/shapes/13.png') }}" alt=""></span>
        <span class="bs2"><img src="{{ asset('theme/assets/images/img/htleaf2.png') }}" alt=""></span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-portfolio-box wow fadeIn">
                    <img src="../storage/products/{{ $our_product->img }}" alt="">
                    <!-- <span>
                        <a class="popup-youtube play-btn item-ripple"
                            href="https://www.youtube.com/watch?v=9xwazD5SyVg"><i class="fas fa-play"></i></a>
                    </span> -->
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- portfolio-info -->
 <div class="portfolio-info padding-bottom-100">
    <div class="portfolio-shapes">
        <span class="ps1"><img src="{{ asset('theme/assets/images/shapes/12.png') }}" alt=""></span>
        <span class="ps2 "><img src="{{ asset('theme/assets/images/img/htleaf2.png') }}" alt=""></span>
        <span class="ps3"><img src="{{ asset('theme/assets/images/shapes/7.png') }}" alt=""></span>
        <!-- <span class="ps4"><img src="{{ asset('theme/assets/images/img/32.png') }}" alt=""></span> -->
        <span class="ps5"><img src="{{ asset('theme/assets/images/img/htshape18.png') }}" alt=""></span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 wow fadeInUp">
                <div class="portfolio-info-left">
                    <h5>Detail</h5>
                    <ul>
                        <li>Categories <span class="cat-pos">: 
                                @foreach ($our_categories as $our_category)
                                {{ $our_category->category_name}}
                                @endforeach
                        </span></li>
                        <!-- <li>Produced in <span class="cat-pos">Foshan City, Guangdong Province</span></li> -->
                        <!-- <li>client <span class="cat-pos">: tonmoy khan</span></li> -->
                        @if (isset($social_media->fb) || isset($social_media->twitter) || isset($social_media->ig))
                        <li>share
                            <span class="cat-pos">
                                : 
                                @if (isset($social_media->fb))
                                <span><a class="social-icon" href="{{ $social_media->fb }}"><i class="fab fa-facebook"></i></a></span>
                                @endif
                                @if (isset($social_media->twitter))
                                <span><a class="social-icon" href="{{ $social_media->twitter }}"><i class="fab fa-twitter"></i></a></span>
                                @endif
                                @if (isset($social_media->ig))
                                <span><a class="social-icon" href="{{ $social_media->ig }}"><i class="fab fa-instagram"></i></a></span>
                                @endif
                                <!-- <span><a class="social-icon"href="#"><i class="fab fa-linkedin"></i></a></span> -->
                            </span>
                        </li>
                        @endif
                    </ul>
                    <span class="s1"><img src="{{ asset('theme/assets/images/shapes/7.png') }}" alt=""></span>
                    <span class="s2"><img src="{{ asset('theme/assets/images/shapes/35.png') }}" alt=""></span>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="portfolio-info-right">
                    <h2 class="wow fadeInUp" style="font-size: 34px">{{ $our_product->name }}</h2>
                    {!! $our_product->description !!}

                    <!-- <div class="inner-portfolio-gallery margin-top-30">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 wow fadeInLeft">
                                <img src="assets/images/gallery/single-portfolio1.jpg" alt="">
                            </div>
                            <div class="col-lg-6 col-md-12 wow fadeInRight">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <img src="assets/images/gallery/single-portfolio2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <img src="assets/images/gallery/single-portfolio4.jpg" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <img src="assets/images/gallery/single-portfolio3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- related-product -->
<div class="related-product padding-top-115 padding-bottom-100">
    <div class="related-shapes">
        <span class="rs1"><img src="{{ asset('theme/assets/images/shapes/16.png')}}" alt=""></span>
    </div>
    <div class="container wow fadeInUp">
        <h3>relates <span>product</span></h3>
        <div class="drink-items-section" style="background: none;"> 
            <div class="row">
            @foreach($related_products as $key => $product)
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp " data-wow-delay="{{ 0.2 + ($loop->index / 10) }}s">
                <div class="single-dishes" style="background: #ffffff;">
                    <div class="dish-img " style="background: #FFF8EE;">
                        @foreach( $product->images as $image)
                        <img id="productId{{ $loop->parent->index }}" src="../storage/products/thumbnail/{{ $image->productImages }}" 
                            onmouseover="changeImage({{ $product->images }}, productId{{ $loop->parent->index }})"
                            onmouseout="resetImage(`{{ $image->productImages }}`, productId{{ $loop->parent->index }})"
                            alt=""
                        >
                        @if ($loop->index == 0)
                            @break;
                        @endif
                    @endforeach 
                        {{-- @foreach( $product->images as $image)
                        <img src="/storage/products/thumbnail/{{ $image->productImages }}"  alt="">
                        @endforeach --}}
                        
                    </div>
                    <div class="dish-content">
                        <h5 style="font-size: 20px;"><a href="{{ $product->path() }}">{{ $product->name}}</a></h5>
                        <!-- <p>It is a long established fact that a reader BBQ food Chicken.</p>-->
                        <span class="price">{{ $product->chinese_name}}</span>

                    </div>
                    <!-- <span class="badge">hot</span> -->
                    <!-- <div class="cart-opt">
                        <span>
                            <a href="#"><i class="fas fa-heart"></i></a>
                        </span>
                        <span>
                            <a href="single-dish.html"><i class="fas fa-shopping-basket"></i></a>
                        </span>
                    </div> -->
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</div>

{{-- 
@foreach( $images as $image)
    <li>
        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="../storage/products/thumbnail/{{ $image->productImages }}" data-zoom-image="../storage/products/thumbnail/{{ $image->productImages }}">
            <img src="../storage/products/thumbnail/{{ $image->productImages }}" alt="zo-th-1"/>
        </a>
    </li>
@endforeach
--}}
@endsection