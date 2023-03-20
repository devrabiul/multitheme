<!--=========================================================
    Item Name: Ekka - Ecommerce HTML Template.
    Author: ashishmaraviya
    Version: 3.3
    Copyright 2022-2023
	Author URI: https://themeforest.net/user/ashishmaraviya
 ============================================================-->
 <!DOCTYPE html>
 <html lang="en">

 <head>
	 <meta charset="UTF-8">
	 <meta http-equiv="x-ua-compatible" content="ie=edge" />
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

	 <title>{{ env('APP_NAME') }}</title>
	 <meta name="keywords" content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
	 <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
	 <meta name="author" content="ashishmaraviya">

	<!-- site Favicon -->
	<link rel="icon" href="{{asset('public/frontend-assets') }}/images/favicon/favicon.png" sizes="32x32" />
	<link rel="apple-touch-icon" href="{{asset('public/frontend-assets') }}/images/favicon/favicon.png" />
	<meta name="msapplication-TileImage" content="{{asset('public/frontend-assets') }}/images/favicon/favicon.png" />

	<!-- css Icon Font -->
	<link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/vendor/ecicons.min.css" />

	<!-- css All Plugins Files -->
	<link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/animate.css" />
	<link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/swiper-bundle.min.css" />
	<link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/jquery-ui.min.css" />
	<link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/countdownTimer.css" />
	<link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/slick.min.css" />
	<link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/nouislider.css" />
	<link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/bootstrap.css" />

	<!-- Main Style -->
	<link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/style.css" />
	<link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/responsive.css" />

	<!-- Background css -->
	<link rel="stylesheet" id="bg-switcher-css" href="{{asset('public/frontend-assets') }}/css/backgrounds/bg-4.css">

</head>
<body>

	<!-- Start Header Section -->
	<section id="hero-section" class="hero-section particles">
		<div class="container-fluid main-container">
			<div class="row">
				<div class="col-md-12 p-0">
					<div class="main-block">
						<div id="particles-js"></div>
						<div class="main-info">
							<div class="hero-container">
								<div class="hero-counter">
									<div class="hero-detail">
										<div class="logo">
											<img src="{{asset('public/frontend-assets') }}/images/logo/dark-logo.png" alt="logo">
										</div>
										<h1 class="title">We will <span>launch</span> soon.</h1>
										<p class="hero-counter-desc">Lorem Ipsum is simply dummy text of the printing
											and typesetting industry since the 1500s.</p>
										<!-- Countdown -->
										<span class="counter">
											<span id="timer" data-date="September 30, 2023 19:15:10 PDT"></span>
										</span>
										<!-- END Countdown -->
										<!-- Newsletter -->
										<form class="subscribe_form" id="subscribe_form" method="post">
											<div class="input-group">
												<input type="email" id="subscribe_email" class="form-control"
													name="email" placeholder="Enter your email">
												<button class="btn btn-default button" id="subscribe_btn"
													type="button"><span class="btn-text">subscribe</span></button>
												<span id="success" class="validation">Thank you for subscribing!</span>
												<span id="warning" class="validation">Enter your valid email.</span>
												<span id="faild" class="validation">Faild subscription!!!</span>
											</div>
										</form>
										<!-- End Newsletter -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Header Section -->

	<!-- Vendor JS -->
	<script src="{{asset('public/frontend-assets') }}/js/vendor/jquery-3.5.1.min.js"></script>
	<script src="{{asset('public/frontend-assets') }}/js/vendor/popper.min.js"></script>
	<script src="{{asset('public/frontend-assets') }}/js/vendor/bootstrap.min.js"></script>
	<script src="{{asset('public/frontend-assets') }}/js/vendor/jquery-migrate-3.3.0.min.js"></script>
	<script src="{{asset('public/frontend-assets') }}/js/vendor/modernizr-3.11.2.min.js"></script>
	<script src="{{asset('public/frontend-assets') }}/js/vendor/particles.min.js"></script>
	<script src="{{asset('public/frontend-assets') }}/js/vendor/app.js"></script>

	<!--Plugins JS-->
	<script src="{{asset('public/frontend-assets') }}/js/plugins/swiper-bundle.min.js"></script>
	<script src="{{asset('public/frontend-assets') }}/js/plugins/countdownTimer.min.js"></script>
	<script src="{{asset('public/frontend-assets') }}/js/plugins/scrollup.js"></script>
	<script src="{{asset('public/frontend-assets') }}/js/plugins/jquery.zoom.min.js"></script>
	<script src="{{asset('public/frontend-assets') }}/js/plugins/slick.min.js"></script>
	<script src="{{asset('public/frontend-assets') }}/js/plugins/infiniteslidev2.js"></script>
	<script src="{{asset('public/frontend-assets') }}/js/vendor/jquery.magnific-popup.min.js"></script>
	<script src="{{asset('public/frontend-assets') }}/js/plugins/coming-soon.js"></script>
	<script src="{{asset('public/frontend-assets') }}/js/plugins/jquery.sticky-sidebar.js"></script>

	<!-- Main Js -->
	<script src="{{asset('public/frontend-assets') }}/js/vendor/index.js"></script>
	<script src="{{asset('public/frontend-assets') }}/js/main.js"></script>

</body>
</html>
