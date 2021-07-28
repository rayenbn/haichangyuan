<?php

use App\Http\Controllers\Controller;

$categories = Controller::categories();
$contact = Controller::contact();
$global_settings = Controller::global_settings();
?>

<!-- header -->
<header class="header3">
    <!-- header-bottom -->
    <div class="header-bottom home2-header-bottom margin-top-20">
        <div class="container position-relative">
            <div class="row d-flex align-items-center">
                <div class="col-lg-2 col-md-2 col-sm-4 col-8 margin-bottom-20">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="/storage/logo/{{ $global_settings->logo ?? ''}} " alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-block">
                    <nav id="mobile-menu">
                        <ul class="main-menu main-menu3">
                            <li><a href="{{ url('/') }}">Home</a>
                            </li>
                            <li><a href="{{ url('/about-us') }}">Discover Us</a></li>
                            <!-- <li><a href="menu.html">menu</a></li> -->
                            <li><a href="{{ url('/our-products') }}">Products</a></li>
                            <li><a href="{{ url('/package-info') }}">package info</a></li>
                            <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                            <li><a href="{{ url('/contact-us') }}">contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-9 col-sm-8 col-12">
                    <div
                        class="customer-area3 d-flex align-items-center justify-content-center justify-content-md-end">
                        <!-- <span class="position-relative">
                            <a class="shopping" href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                            <span class="shop-counter">1</span>
                        </span> -->
                        <a href="{{ url('/our-products') }}" class="btn2">Explore Our Soup</a>
                    </div>
                </div>
            </div>
            <!-- mobile-menu -->
            <div class="mobile-menu home2 home3-mobile-menu"></div>
        </div>
    </div>
</header>