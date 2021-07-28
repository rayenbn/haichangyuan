<!-- snack section -->
<div class="snack-section margin-top-15 padding-top-150 padding-bottom-150 margin-bottom-120">
    <div class="snack-shapes">
        <span class="mss1"><img src="{{ asset('theme/assets/images/img/htshape1.png') }}" alt=""></span>
        <span class="mss2"><img src="{{ asset('theme/assets/images/img/htshape2.png') }}" alt=""></span>
        <!-- <span class="mss3"><img src="{{ asset('theme/assets/images/img/htshape2.png') }}" alt=""></span> -->
        <span class="mss4"><img src="{{ asset('theme/assets/images/img/htjuice.png') }}" alt=""></span>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="snack-left margin-bottom-60">
                    <div class="snack-upper-content d-flex align-items-center margin-bottom-35">
                        <div class="snack-img">
                            <img src="{{ asset('theme/assets/images/logo/super-soup-logo.png')}}" alt="">
                        </div>
                        <!-- <div class="snack-content">
                            <h5 class="caveat">Super Soup</h5>
                            <h5>serve drink passion</h5>
                        </div> -->
                    </div>
                    <div class="snack-lower-content common-title-area">
                        <h1>{!! $slider->title !!}</h1>
                        <div
                            class="order-box2 d-flex align-items-center flex-wrap justify-content-center justify-content-sm-start margin-top-35">
                            <div><a href="./{{ $slider->link }}" class="btn2">Explore Soup</a></div>
                            <div class="amount">
                                <h5>{{ $slider->subtitle}}</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="snack-right">
                    <div class="snack-inner-shapes">
                        <!-- <span class="ss1"><img src="assets/images/img/htcane.png" alt=""></span> -->
                        <!-- <span class="ss2"><img src="assets/images/img/htleaf.png" alt=""></span> -->
                        <!-- <span class="ss3"><img src="{{ asset('theme/assets/images/img/htleaf2.png')}}" alt=""></span> -->
                    </div>
                    <img src="/storage/sliders/{{ $slider->picture ?? ''}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>