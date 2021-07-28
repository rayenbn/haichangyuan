<?php

use App\Http\Controllers\Controller;
$global_settings = Controller::global_settings();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>{{ $global_settings->meta_title ?? "Guangdong Haichangyuan Guotong Food Co., Ltd" }}</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('theme/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/font-awsome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/style.css') }}">
</head>

<body >
	 <!-- Preloader Starts -->
     <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
		@include('partials.themeHeader')
		
				@yield('content')
		
		@include('partials.footer')
	

    <!-- ToTop Button -->
    <button class="scrollup scrollup2"><i class="fas fa-angle-up"></i></button>

    <!-- Javascript Files -->
    <script src="{{ asset('theme/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/counterup.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/countdown.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/jquery-ui.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/easing.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/main.js') }}"></script>
	@yield('scripts')

    <script>
        function changeImage(images, productID){
            images.forEach(function (el, index) {
                // setTimeout(() => {
                //     console.log(el.id);
                //     productID.src = "/storage/products/thumbnail/"+el.productImages;
                // }, 1000);
                setTimeout(function () {
                    productID.src = "/storage/products/thumbnail/"+el.productImages;
                }, (index-1) * 500);
            });
        }

        function resetImage(image, productID){
            productID.src = "/storage/products/thumbnail/"+image;
            
        }
    </script>
</body>

</html>