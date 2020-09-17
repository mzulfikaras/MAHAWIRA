<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="MAHAWIRA : Private Edu" />
	
	<!-- OG -->
	<meta property="og:title" content="MAHAWIRA : Private Edu" />
	<meta property="og:description" content="MAHAWIRA : Private Edu" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
  <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>@yield('title')</title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/assets.css')}}">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/typography.css')}}">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/shortcodes/shortcodes.css')}}">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('assets/css/color/color-1.css')}}">
	
</head>
<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<!-- Header Top ==== -->
        @include('user.layouts.header1')
    <!-- header END ==== -->
    <!-- Inner Content Box ==== -->
        @yield('content')
    <!-- Inner Content Box END ==== -->
    <!-- Footer ==== -->
        @include('user.layouts.footer')
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up"></button>
</div>
<!-- External JavaScripts -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('assets/vendors/magnific-popup/magnific-popup.js')}}"></script>
<script src="{{asset('assets/vendors/counter/waypoints-min.js')}}"></script>
<script src="{{asset('assets/vendors/counter/counterup.min.js')}}"></script>
<script src="{{asset('assets/vendors/imagesloaded/imagesloaded.js')}}"></script>
<script src="{{asset('assets/vendors/masonry/masonry.js')}}"></script>
<script src="{{asset('assets/vendors/masonry/filter.js')}}"></script>
<script src="{{asset('assets/vendors/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>
<script src="{{asset('assets/js/contact.js')}}"></script>
<script src="{{asset('assets/vendors/switcher/switcher.js')}}"></script>
</body>


</html>