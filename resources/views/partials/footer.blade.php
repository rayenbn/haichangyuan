<?php

use App\Http\Controllers\Controller;

$footer = Controller::footer();
$global_settings =Controller::global_settings();
?>

<footer class="ht-footer padding-bottom-55 padding-top-220">
	<div class="htf-shapes">
		<img class="drs1 item-bounce d-none d-md-block" src="{{ asset('theme/assets/images/img/htshape22.png') }}" alt="">
		<img class="drs2 d-none d-md-block" src="{{ asset('theme/assets/images/img/htshape17.png') }}" alt="">
		<img class="drs3 d-none d-md-block" src="{{ asset('theme/assets/images/img/htshape2.png') }}" alt="">
		<img class="drs4 item-animateTwo d-none d-md-block" src="{{ asset('theme/assets/images/img/htleaf2.png') }}" alt="">
	</div>
	<div class="container">
		<div class="ht-footer-top">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 margin-bottom-30">
					<div class="widget text-center text-sm-left">
						<div class="logo">
							<img src="/storage/logo/{{ $global_settings->footer_logo ?? ''}} " alt="">
						</div>
						<ul>
							<li>{{ $footer->addresss ?? '' }} </li>
						</ul>
						<!-- <a href="#" class="ht-link">google map</a> -->
						<div class="social-box">
							<span><a href="#"><i class="fab fa-facebook"></i></a></span>
							<span><a href="#"><i class="fab fa-instagram"></i></a></span>
							<span><a href="#"><i class="fab fa-twitter"></i></a></span>
							<span><a href="#"><i class="fab fa-youtube"></i></a></span>
							<span><a href="#"><i class="fab fa-linkedin"></i></a></span>

						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 margin-bottom-30">
					<div class="widget text-center text-sm-left">
						<h6>China sales support</h6>
						<h5><span><i class="fas fa-phone-square-alt"></i></span>{{ $footer->phone ?? '' }}</h5>
						<ul>
							<!-- <li>Monday – Friday: 9:00-18:00</li>
							<li>Saturday: 9:00 – 15:00</li> -->
							{!! $footer->opening_time ?? '' !!}
						</ul>
						<a href="#" class="ht-link">email address</a>
						<a href="#" class="ht-email"><span><i class="fas fa-envelope-open-text"></i></span>
						{{ $footer->email ?? '' }}</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 margin-bottom-30">
					<div class="widget text-center text-sm-left">
						<h6>US & Canada sales support</h6>
						<h5><span><i class="fas fa-phone-square-alt"></i></span>647-979-8003</h5>
						<ul>
							<!-- <li>Monday – Friday: 9:00-18:00</li>
							<li>Saturday: 9:00 – 15:00</li> -->
							{!! $footer->opening_time ?? '' !!}
						</ul>
						<a href="#" class="ht-link">email address</a>
						<a href="#" class="ht-email"><span><i class="fas fa-envelope-open-text"></i></span>
						lusabrina0@gmail.com</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 margin-bottom-30">
					<div class="widget text-center text-sm-left">
						<h6>information</h6>
						<ul>
							<li><a  href="{{ url('/our-products') }}">Products</a></li>
							<li><a  href="{{ url('/about-us') }}">About us</a></li>
							<li><a href="{{ url('/gallery') }}">Gallery</a></li>
							<li><a  href="{{ url('/contact-us') }}">Contact</a></li>
							<!-- <li><a href="#">delivery information</a></li>
							<li><a href="#">privacy policy</a></li>
							<li><a href="#">terms & conditions</a></li> -->
							
						</ul>
					</div>
				</div>
				<!-- <div class="col-lg-3 col-md-6 col-sm-6 margin-bottom-30">
					<div class="widget text-center text-sm-left">
						<h6>newsletter</h6>
						<div class="newsletter d-flex">
							<form action="#">
								<input type="email" placeholder="enter your email"> <button type="submit"><i
										class="fas fa-paper-plane"></i></button>
							</form>
						</div>
						<a href="#" class="btn2">subscribe</a>
					</div>
				</div> -->
			</div>
		</div>
		<!-- section divider -->

		<div class="divider">
			<hr>
		</div>

		<div class="ht-footer-bottom">
			<div class="row align-items-center">
				<div class="col-lg-7 col-md-4 col-12">
					<div class="ht-copyright-area text-center text-md-left">
						<p>copyright @ 2021 <a href="index.html">Haichangyuan</a>
						All Right Reserved. Designed by <a href="http://digitafro.com" target="blank">DG</a>
						</p>
					</div>
				</div>
				<!-- <div class="col-lg-5 col-md-8 col-12">
					<div class="ht-payment">
						<a href="checkout.html"> <img src="assets/images/img/payment2.png" alt=""></a>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</footer>