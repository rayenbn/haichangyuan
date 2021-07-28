@extends('layouts.theme')
@section('content')
    @include('partials.slider', $slider)
    
    <!-- features section -->
    <section class="features-section padding-bottom-90 padding-top-120">
        <div class="container position-relative">
            <div class="fea-shapes">
                <span class="fs-1 item-bounce"><img src="{{ asset('theme/assets/images/img/htshape7.png') }}" alt=""></span>
                <span class="fs-2 item-bounce"><img src="{{ asset('theme/assets/images/img/htshape8.png') }}" alt=""></span>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-fea">
                        <div class="fea-img">
                            <img src="/storage/sliders/{{ $home_page->sec1_img1 ?? ''}}" alt="">
                        </div>
                        <div class="fea-content text-center text-md-left">
                            <h5>{{ $home_page->sec1_title1 }}</h5>
                            <p>{{ $home_page->sec1_desc1 }}</p>
                            <a href="shopping-cart.html">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-fea">
                        <div class="fea-img">
                            <img src="/storage/sliders/{{ $home_page->sec1_img2 ?? ''}}" alt="">
                        </div>
                        <div class="fea-content text-center text-md-left">
                            <h5>{{ $home_page->sec1_title2 }}</h5>
                            <p>{{ $home_page->sec1_desc2 }}</p>
                            <a href="shopping-cart.html">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-fea">
                        <div class="fea-img">
                            <img src="/storage/sliders/{{ $home_page->sec1_img3 ?? ''}}" alt="">
                        </div>
                        <div class="fea-content text-center text-md-left">
                            <h5>{{ $home_page->sec1_title3 }}</h5>
                            <p>{{ $home_page->sec1_desc3 }}</p>
                            <a href="shopping-cart.html">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-fea">
                        <div class="fea-img">
                            <img src="/storage/sliders/{{ $home_page->sec1_img4 ?? ''}}" alt="">
                        </div>
                        <div class="fea-content text-center text-md-left">
                            <h5>{{ $home_page->sec1_title4 }}</h5>
                            <p>{{ $home_page->sec1_desc4 }}</p>
                            <a href="shopping-cart.html">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- softdrink promo -->
    <section class="softdrink-section padding-bottom-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="softdrink-left">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 margin-bottom-30">
                                <div class="drink-review margin-bottom-30">
                                    <!-- <div class="review-img">
                                        <img src="assets/images/img/hticon1.png" alt="">
                                    </div> -->
                                    <div class="drink-content">
                                        <!-- <div class="reviews">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                        </div> -->
                                        <!-- <h5>5 star rating</h5> -->
                                        <p>Our All Soup Are Sterilized At 121°C And Manufactured By A 5G Intelligent</p>
                                    </div>
                                </div>
                                <div class="s-gallery-1">
                                    <img src="/storage/sliders/{{ $home_page->sec2_image1 ?? ''}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="s-gallery-2 margin-bottom-30">
                                    <img src="/storage/sliders/{{ $home_page->sec2_image2 ?? ''}}" alt="">
                                </div>
                                <div class="s-gallery-3">
                                    <img class="g-shape" src="/storage/sliders/{{ $home_page->sec2_image3 ?? ''}}" alt="">
                                    {!! $home_page->sec2_subtitle ?? ''!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="softdrink-right">
                        <h2>{!! $home_page->sec2_title ?? ''!!}</h2>

                        {!! $home_page->sec2_desc ?? ''!!}
                        <!-- <div class="quote-box d-flex">
                            <span class="qq"><i class="fas fa-quote-right"></i></span>
                            <div class="qoute-img">
                                <img src="assets/images/img/h31.png" alt="">
                            </div>
                            <div class="quote-content">
                                <h5>They Who Drink Soft
                                    Will think Batter</h5>
                                <p>Washington Lrving</p>
                            </div>
                        </div> -->
                        <a href="{{ $home_page->sec2_link ?? '#' }}" class="btn2">shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- timeline section -->
    <section class="timeline-section padding-bottom-100 wow fadeInUp">
        <div class="timeline-shapes">
            <span class="fs-1 item-bounce"><img src="{{ asset('theme/assets/images/img/htshape2.png') }}" alt=""></span>
            <span class="fs-2 item-bounce"><img src="{{ asset('theme/assets/images/img/htleaf.png') }}" alt=""></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-timeline">
                        <h2>{{ $home_page->sec3_title1 ?? ''}}</h2>
                        <h6>{{ $home_page->sec2_subtitle1 ?? ''}}</h6>
                        {!! $home_page->sec3_desc1 ?? ''!!}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-timeline">
                        <h2>{{ $home_page->sec3_title2 ?? ''}}</h2>
                        <h6>{{ $home_page->sec2_subtitle2 ?? ''}}</h6>
                        {!! $home_page->sec3_desc2 ?? ''!!}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-timeline">
                        <h2>{{ $home_page->sec3_title3 ?? ''}}</h2>
                        <h6>{{ $home_page->sec2_subtitle3 ?? ''}}</h6>
                        {!! $home_page->sec3_desc3 ?? ''!!}
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-timeline">
                        <h2>2020</h2>
                        <h6>Star Burger Menu</h6>
                        <p>Lingxiangang Soup's Open! Get your and enjoy some festive for yourself!</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- drink-items section -->
    <section class="drink-items-section padding-bottom-120 padding-top-110">
        <div class="drink-items-shapes">
            <span class="fs-1 item-animateOne"><img src="{{ asset('theme/assets/images/img/htshape2.png') }}" alt=""></span>
            <span class="fs-2"><img src="{{ asset('theme/assets/images/img/htshape16.png') }}" alt=""></span>
            <span class="fs-3 item-animateTwo"><img src="{{ asset('theme/assets/images/img/htshape17.png') }}" alt=""></span>
            <span class="fs-4"><img src="{{ asset('theme/assets/images/img/htleaf.png') }}" alt=""></span>
        </div>
        <div class="container">
            <div class="common-title-area3 text-center padding-bottom-50 wow fadeInUp">
                <h2>{!! $home_page->sec4_title ?? '' !!}</h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeIn" data-wow-delay=".2s">
                    <div class="single-dishes">
                        <div class="dish-img">
                            <img src="{{ asset('theme/assets/images/img/htshape12.png') }}" alt="">
                        </div>
                        <div class="dish-content">
                            <h5><a href="single-dish.html">Coconut and Free-Range Chicken Stew Soup 
                                </a></h5>
                            <!-- <p>The invigorating soup is suitable for the four seasons</p> -->
                            <!-- <span class="price">price :$50.00</span> -->
                        </div>
                        <span class="badge">hot</span>
                        <!-- <div class="cart-opt">
                            <span>
                                <a href="#"><i class="fas fa-heart"></i></a>
                            </span>
                            <span>
                                <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                            </span>
                        </div> -->
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeIn" data-wow-delay=".4s">
                    <div class="single-dishes">
                        <div class="dish-img">
                            <img src="assets/images/img/htshape13.png" alt="">
                        </div>
                        <div class="dish-content">
                            <h5><a href="single-dish.html">Fish Maw, Date and Free-Range Chicken Stew Soup

                                </a></h5>
                            <!-- <p>The soup is suitable for the four seasons and recommended to have fewer in summer and more in winter.</p> -->
                            <!-- <span class="price">price :$50.00</span> -->
                        </div>
                        <span class="badge"></span>
                        <div class="cart-opt">
                            <span>
                                <a href="#"><i class="fas fa-heart"></i></a>
                            </span>
                            <span>
                                <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeIn" data-wow-delay=".6s">
                    <div class="single-dishes">
                        <div class="dish-img">
                            <img src="assets/images/img/htshape14.png" alt="">
                        </div>
                        <div class="dish-content">
                            <h5><a href="single-dish.html">Golden Thread Mushrooms and Free-Range Chicken Stew Soup
                                </a></h5>
                            <!-- <p>The soup is suitable for the four seasons but best served in early winter.</p> -->
                            <!-- <span class="price">price :$50.00</span> -->
                        </div>
                        <span class="badge">new</span>
                        <div class="cart-opt">
                            <span>
                                <a href="#"><i class="fas fa-heart"></i></a>
                            </span>
                            <span>
                                <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeIn" data-wow-delay=".8s">
                    <div class="single-dishes">
                        <div class="dish-img">
                            <img src="assets/images/img/htshape15.png" alt="">
                        </div>
                        <div class="dish-content">
                            <h5><a href="single-dish.html">Chinese White Olives and Conches Stew Soup



                                </a></h5>
                            <!-- <p>It is a long established fact that a reader BBQ Chicken.</p> -->
                            <!-- <span class="price">price :$50.00</span> -->
                        </div>
                        <span class="badge">sale</span>
                        <div class="cart-opt">
                            <span>
                                <a href="#"><i class="fas fa-heart"></i></a>
                            </span>
                            <span>
                                <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mx-auto margin-top-30"><a href="food-page2.html" class="btn2">See All Cans</a></div>
            </div>
        </div>
    </section>

     <!-- drink-ind section -->
     <section class="drink-ind padding-bottom-90 padding-top-110">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="drink-ind-left margin-bottom-30">
                        <img class="drs1 item-bounce" src="{{ asset('theme/assets/images/img/htshape20.png') }}" alt="">
                        <img class="drs2 item-bounce" src="{{ asset('theme/assets/images/img/htshape21.png') }}" alt="">
                        <img class="drs3" src="{{ asset('theme/assets/images/img/htshape22.png') }}" alt="">
                        <img class="drs4 item-animateTwo" src="{{ asset('theme/assets/images/img/htshape2.png') }}" alt="">
                        <img class="drs5" src="{{ asset('theme/assets/images/img/htleaf.png') }}" alt="">
                        <!-- main img -->
                        <img src="/storage/sliders/{{ $home_page->sec4_image1 ?? ''}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="drink-ind-right">
                        <div class="common-title-area3 text-center text-md-left">
                            <h2>{!! $home_page->sec4_title1 !!}</h2>
                                <p>{!! $home_page->sec4_desc1 !!}</p>
                        </div>
                        <div class="inner-brand margin-bottom-30 margin-top-30">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-4">
                                    <div class="single-percentage">
                                        <h6>{{ $home_page->sec4_text_one1 }}</h6>
                                        <!-- <h3>15%</h3> -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-4">
                                    <div class="single-percentage">
                                        <h6>{{ $home_page->sec4_text_one2 }}</h6>
                                        <!-- <h3>0%</h3> -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-4">
                                    <div class="single-percentage">
                                        <h6>{{ $home_page->sec4_text_one3 }}</h6>
                                        <!-- <h3>90%</h3> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- food-brand section -->
    <section class="food-brand-section padding-bottom-90">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 margin-bottom-60 wow fadeInLeft">
                    <div class="food-brand-left text-center text-md-left">
                        <div class="common-title-area3">
                            <h2 class="margin-bottom-20">{!! $home_page->sec4_title1 !!}</h2>
                                <p>{!! $home_page->sec4_desc1 !!}</p>
                        </div>

                        <div class="inner-brand margin-bottom-30 margin-top-30">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-4">
                                    <div class="single-percentage">
                                        <h6>{{ $home_page->sec4_text_one2 }}</h6>
                                        <!-- <h3>15%</h3> -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-4">
                                    <div class="single-percentage">
                                        <h6>{{ $home_page->sec4_text_one2 }}</h6>
                                        <!-- <h3>0%</h3> -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-4">
                                    <div class="single-percentage">
                                        <h6>{{ $home_page->sec4_text_one3 }}</h6>
                                        <!-- <h3>90%</h3> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ $home_page->sec4_link2 }}" class="btn2">shop now</a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-sm-block offset-lg-1 wow fadeInRight">
                    <div class="food-brand-right margin-bottom-30">
                        <img class="fb1 item-bounce" src="{{ asset('theme/assets/images/img/htshape24.png') }}" alt="">
                        <img class="fb2 item-bounce" src="{{ asset('theme/assets/images/img/htshape18.png') }}" alt="">
                        <img class="fb3 item-bounce" src="{{ asset('theme/assets/images/img/htshape20.png') }}" alt="">
                        <!-- <img class="fb4" src="{{ asset('theme/assets/images/img/htshape26.png') }}" alt=""> -->
                        <img class="fb5 item-animateTwo" src="{{ asset('theme/assets/images/img/htshape2.png') }}" alt="">
                        <img class="fb6" src="{{ asset('theme/assets/images/img/htjuice.png') }}" alt="">
                        <img class="fb7" src="{{ asset('theme/assets/images/img/htshape2.png') }}" alt="">
                        <!-- main img -->
                        <img src="/storage/sliders/{{ $home_page->sec4_image2 ?? ''}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ht testimonial -->
    <div class="ht-testi padding-bottom-120 padding-top-110">
        <div class="ht-shapes">
            <img class="drs1" src="{{ asset('theme/assets/images/img/htleaf.png') }}" alt="">
            <img class="drs2 item-bounce" src="{{ asset('theme/assets/images/img/htshape17.png') }}" alt="">
            <img class="drs3 item-animateOne d-none d-md-block" src="{{ asset('theme/assets/images/img/htshape2.png') }}" alt="">
            <img class="drs4 d-none d-md-block" src="{{ asset('theme/assets/images/img/htleaf2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="common-title-area3 text-center text-md-left wow fadeInUp">
                <h2 class="margin-bottom-60 text-center">happy <span>
                        feedback</span></h2>
            </div>
            <div class="ht-testi-active">
                <div class="single-ht-item position-relative">
                    <span class="qq"><i class="fas fa-quote-right"></i></span>
                    <div class="row">
                        <div class="col-10">
                            <div class="testi-left">
                                <div class="testi-top d-flex align-items-center">
                                    <div class="testi-img">
                                        <img src="{{ asset('theme/assets/images/img/htshape27.png') }}" alt="">
                                    </div>
                                    <div class="testi-meta">
                                        <div class="d-flex">
                                            <h5>Christ Deo</h5>
                                            <span class="des">CEO A4Tech Ltd.</span>
                                        </div>
                                        <div class="testi-rating">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <p>Haichangyuan is a gret Soup from the University of Texas at Austin has been
                                    researching the benefits of frequent testing and the feedback
                                </p>
                            </div>
                        </div>
                        <div class="col-2 d-none d-md-block">
                            <div class="testi-right">
                                <img src="{{ asset('theme/assets/images/img/htshape28.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-ht-item position-relative">
                    <span class="qq"><i class="fas fa-quote-right"></i></span>
                    <div class="row">
                        <div class="col-10">
                            <div class="testi-left">
                                <div class="testi-top d-flex align-items-center">
                                    <div class="testi-img">
                                        <img src="{{ asset('theme/assets/images/img/htshape29.png') }}" alt="">
                                    </div>
                                    <div class="testi-meta">
                                        <div class="d-flex">
                                            <h5>robina Deo</h5>
                                            <span class="des">CEO A4Tech Ltd.</span>
                                        </div>
                                        <div class="testi-rating">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <p>Haichangyuan is a gret Soup from the University of Texas at Austin has been
                                    researching the benefits of frequent testing and the feedback
                                </p>
                            </div>
                        </div>
                        <div class="col-2 d-none d-md-block">
                            <div class="testi-right">
                                <img src="{{ asset('theme/assets/images/img/htshape30.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-ht-item position-relative">
                    <span class="qq"><i class="fas fa-quote-right"></i></span>
                    <div class="row">
                        <div class="col-10">
                            <div class="testi-left">
                                <div class="testi-top d-flex align-items-center">
                                    <div class="testi-img">
                                        <img src="{{ asset('theme/assets/images/img/htshape27.png') }}" alt="">
                                    </div>
                                    <div class="testi-meta">
                                        <div class="d-flex">
                                            <h5>Christ Deo</h5>
                                            <span class="des">CEO A4Tech Ltd.</span>
                                        </div>
                                        <div class="testi-rating">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <p>Haichangyuan is a gret Soup from the University of Texas at Austin has been
                                    researching the benefits of frequent testing and the feedback
                                </p>
                            </div>
                        </div>
                        <div class="col-2 d-none d-md-block">
                            <div class="testi-right">
                                <img src="{{ asset('theme/assets/images/img/htshape28.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-ht-item position-relative">
                    <span class="qq"><i class="fas fa-quote-right"></i></span>
                    <div class="row">
                        <div class="col-10">
                            <div class="testi-left">
                                <div class="testi-top d-flex align-items-center">
                                    <div class="testi-img">
                                        <img src="{{ asset('theme/assets/images/img/htshape29.png') }}" alt="">
                                    </div>
                                    <div class="testi-meta">
                                        <div class="d-flex">
                                            <h5>robina Deo</h5>
                                            <span class="des">CEO A4Tech Ltd.</span>
                                        </div>
                                        <div class="testi-rating">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <p>Haichangyuan is a gret Soup from the University of Texas at Austin has been
                                    researching the benefits of frequent testing and the feedback
                                </p>
                            </div>
                        </div>
                        <div class="col-2 d-none d-md-block">
                            <div class="testi-right">
                                <img src="{{ asset('theme/assets/images/img/htshape30.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- inst-slider -->
    <div class="ins-gallery-area padding-top-120">
        <div class="container">
            <div class="ins-gallery-active">
            @foreach ($gallery as $image)
                <div class="single-inst-item">
                    <a href="/gallery"> <img src="/storage/gallery/thumbnail/{{ $image->picture ?? ''}}" alt=""> </a>
                    <span class="ins-icon">
                        <a href="/gallery"><i class="fas fa-image"></i></a>
                    </span>
                </div>
            @endforeach
            </div>
        </div>
    </div>

@endsection