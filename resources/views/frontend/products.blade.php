@extends('layouts.theme')
@section('content')

 <!--breadcrumbs area start-->
 @if (isset($productpage->banner))
<div class="banner-area breadcrumb-area padding-top-90 padding-bottom-90" style="background-image:url('/storage/images/banners/{{ $productpage->banner }}')">
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
                <h2 class="page-title">{{ $productpage->page_title ?? ''}}</h2>
                <ol class="breadcrumb text-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">products</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->


 <!-- food area -->
 <section class="food-area  popular-dishes-area padding-top-110 padding-bottom-110">
        <div class="pshapes">
            <!-- <span class="ps-1"><img src="assets/images/img/32.png" alt=""></span> -->
            <span class="ps-2 item-animateOne"><img src="{{ asset('theme/assets/images/shapes/12.png') }}" alt=""></span>
            <span class="ps3 item-bounce"><img src="{{ asset('theme/assets/images/shapes/13.png') }}" alt=""></span>
            <span class="ps-4"><img src="{{ asset('theme/assets/images/shapes/14.png') }}" alt=""></span>
            <!-- <span class="ps-5"><img src="{{ asset('theme/assets/images/img/6.png') }}" alt=""></span> -->
            <!-- <span class="ps-6"><img src="{{ asset('theme/assets/images/shapes/16.png') }}" alt=""></span> -->
            <!-- <span class="ps-7 item-bounce"><img src="{{ asset('theme/assets/images/img/6.png') }}" alt=""></span> -->
        </div>
        <div class="container">
            <!-- <nav class="popular-tab-nav d-flex flex-wrap justify-content-between align-items-center  margin-bottom-60">
                <div class="nav" id="nav-tab-1" role="tablist">
                    <a class="nav-link active" id="food1-tab" data-toggle="tab" href="#food1" role="tab"
                        aria-controls="food1" aria-selected="true"><span><i class="fas fa-th"></i></span></a>
                    <a class="nav-link" id="food2-tab" data-toggle="tab" href="#food2" role="tab" aria-controls="food2"
                        aria-selected="false"><span><i class="fas fa-th-list"></i></span></a>
                </div>
                <span>There are 16 products.</span>
                <div class="sorting-area">
                    <span class="margin-right-20">sort by : </span>
                    <span>sort by price: </span>
                    <span>
                        <select name="#" id="#">
                            <option value="#">high to low</option>
                            <option value="#">low to high</option>
                            <option value="#">high to low</option>
                        </select>
                    </span>
                </div>
            </nav> -->
            <!-- main-content -->
            <div class="drink-items-section" style="background: none;">

                <!-- food 1 -->
                <!-- <div class="tab-pane fade show active" id="food1" role="tabpanel" aria-labelledby="food1"> -->
                    <div class="row">
                        @foreach($products as $key => $product)
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
                                    <h5 style="font-size: 18px;"><a href="{{ $product->path() }}">{{ $product->name}}</a></h5>
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

            <!-- </div> -->
        </div>

        <!-- pagination-area -->
        <div class="pagination-area">
            <div class="container">
            {{ $products->links('vendor.pagination.theme_paginator') }}
                <!-- <div class="pagination">
                    <a class="active" href="#">01</a>
                    <a href="#">02</a>
                    <a href="#">03</a>
                </div> -->
            </div>
        </div>
    </section>

 
@endsection

