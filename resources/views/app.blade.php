<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>AXIONTI</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="tecnología" />
		<meta name="Author" content="Neil Barazarte [www.neilbarazarte.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		{!! Html::style('smarty/assets/css/css.min.css') !!}

		<!-- CORE CSS -->
		{!! Html::style('smarty/assets/plugins/bootstrap/css/bootstrap.min.css') !!}

		<!-- THEME CSS -->
		{!! Html::style('smarty/assets/css/essentials.css') !!}
		{!! Html::style('smarty/assets/css/layout.css') !!}

		<!-- PAGE LEVEL SCRIPTS -->
		{!! Html::style('smarty/assets/css/header-1.css') !!}
		<link href="smarty/assets/css/layout-shop.css" rel="stylesheet" type="text/css" />
		{!! Html::style('smarty/assets/css/color_scheme/green.css') !!}

		<!-- REVOLUTION SLIDER -->
		{!! Html::style('smarty/assets/plugins/slider.revolution/css/extralayers.css') !!}
		{!! Html::style('smarty/assets/plugins/slider.revolution/css/settings.css') !!}

	</head>

	<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">

		<!-- wrapper -->
		<div id="wrapper">

			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->

			<div class="sticky-side sticky-side-left visible-md visible-lg">
				<a href="#" class="social-icon social-icon-sm social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
					<i class="fa fa-facebook"></i>
					<i class="fa fa-facebook"></i>
				</a>
				<a href="#" class="social-icon social-icon-sm social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
					<i class="fa fa-twitter"></i>
					<i class="fa fa-twitter"></i>
				</a>
				<a href="#" class="social-icon social-icon-sm social-youtube" data-toggle="tooltip" data-placement="top" title="Youtube">
					<i class="fa fa-youtube-play"></i>
					<i class="fa fa-youtube-play"></i>
				</a>
				<a href="#" class="social-icon social-icon-sm social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin">
					<i class="fa fa-linkedin"></i>
					<i class="fa fa-linkedin"></i>
				</a>
			</div>

			<div id="header" class="sticky transparent dark clearfix">

				@include('menu')

			</div>


			@if(Route::current()->getName() == 'home')
				@include('slider')
			@endif

			@yield('content')

			@include('footer')

		</div>
		<!-- /wrapper -->

		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->

		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'smarty/assets/plugins/';</script>
		{!! Html::script('smarty/assets/plugins/jquery/jquery-2.1.4.min.js') !!}
		{!! Html::script('smarty/assets/js/scripts.js') !!}

		<!-- REVOLUTION SLIDER -->
		{!! Html::script('smarty/assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js') !!}

		{!! Html::script('smarty/assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js') !!}

		{!! Html::script('smarty/assets/js/view/demo.revolution_slider.js') !!}


		@if(Route::current()->getName() == 'home')
			<!-- 
				GMAP.JS 
				http://hpneo.github.io/gmaps/
			-->
			<script type="text/javascript" src="//maps.google.com/maps/api/js?key=AIzaSyDn4Fqtci9trC4i6iJjbC-UfdnwONchtQ0"></script>

			{!! Html::script('smarty/assets/plugins/gmaps.min.js') !!}
			<script type="text/javascript">

				jQuery(document).ready(function(){

					/**
						@BASIC GOOGLE MAP
					**/
					var map2 = new GMaps({
						div: '#map2',
						lat: 10.498705,
						lng: -66.788824,
						scrollwheel: false
					});

					var marker = map2.addMarker({
						lat: 10.498705,
						lng: -66.788824,
						title: 'ilernus'
					});

				});

			</script>
			@endif

	</body>

</html>
