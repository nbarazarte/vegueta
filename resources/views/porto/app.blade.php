<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>AXION TI</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="Author" content="Neil Barazarte [ezebarazarte@gmail.com]" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		{!! Html::style('porto/css/font-awesome/css/font-awesome.css') !!}
		{!! Html::style('porto/css/font-kaseya/styles.css') !!}
		
		{!! Html::style('porto/vendor/bootstrap/css/bootstrap.css') !!}
		{!! Html::style('porto/vendor/font-awesome/css/font-awesome.css') !!}
		{!! Html::style('porto/vendor/simple-line-icons/css/simple-line-icons.css') !!}
		{!! Html::style('porto/vendor/owl.carousel/assets/owl.carousel.min.css') !!}
		{!! Html::style('porto/vendor/owl.carousel/assets/owl.theme.default.min.css') !!}
		{!! Html::style('porto/vendor/magnific-popup/magnific-popup.css') !!}

		<!-- Theme CSS -->
		{!! Html::style('porto/css/theme.css') !!}
		{!! Html::style('porto/css/theme-elements.css') !!}
		{!! Html::style('porto/css/theme-blog.css') !!}
		{!! Html::style('porto/css/theme-shop.css') !!}
		{!! Html::style('porto/css/theme-animate.css') !!}

		<!-- Current Page CSS -->
		{!! Html::style('porto/vendor/rs-plugin/css/settings.css') !!}
		{!! Html::style('porto/vendor/rs-plugin/css/layers.css') !!}
		{!! Html::style('porto/vendor/rs-plugin/css/navigation.css') !!}
		{!! Html::style('porto/vendor/circle-flip-slideshow/css/component.css') !!}

		<!-- Skin CSS -->
		{!! Html::style('porto/css/skins/default.css') !!}

		<!-- Theme Custom CSS -->
		{!! Html::style('porto/css/custom.css') !!}

		<!-- Head Libs -->
		{!! Html::script('porto/vendor/modernizr/modernizr.js') !!}
		
	</head>

	<body class="one-page" data-target="#header" data-spy="scroll" data-offset="100">

		<div class="body">

			@include('porto.menu')
			
				@yield('content')

			@include('porto.footer')

		</div>

		<!-- Vendor -->
		{!! Html::script('porto/vendor/jquery/jquery.js') !!}
		{!! Html::script('porto/vendor/jquery.appear/jquery.appear.js') !!}
		{!! Html::script('porto/vendor/jquery.easing/jquery.easing.js') !!}
		{!! Html::script('porto/vendor/jquery-cookie/jquery-cookie.js') !!}
		{!! Html::script('porto/vendor/bootstrap/js/bootstrap.js') !!}
		{!! Html::script('porto/vendor/common/common.js') !!}
		{!! Html::script('porto/vendor/jquery.validation/jquery.validation.js') !!}
		{!! Html::script('porto/vendor/jquery.stellar/jquery.stellar.js') !!}
		{!! Html::script('porto/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js') !!}
		{!! Html::script('porto/vendor/jquery.gmap/jquery.gmap.js') !!}
		{!! Html::script('porto/vendor/jquery.lazyload/jquery.lazyload.js') !!}
		{!! Html::script('porto/vendor/isotope/jquery.isotope.js') !!}
		{!! Html::script('porto/vendor/owl.carousel/owl.carousel.js') !!}
		{!! Html::script('porto/vendor/magnific-popup/jquery.magnific-popup.js') !!}
		{!! Html::script('porto/vendor/vide/vide.js') !!}
		
		<!-- Theme Base, Components and Settings -->
		{!! Html::script('porto/js/theme.js') !!}
		
		<!-- Current Page Vendor and Views -->
		{!! Html::script('porto/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') !!}
		{!! Html::script('porto/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') !!}
		{!! Html::script('porto/vendor/circle-flip-slideshow/js/jquery.flipshow.js') !!}
		{!! Html::script('porto/js/views/view.home.js') !!}
		{!! Html::script('porto/js/views/view.contact.js') !!}
		
		<!-- Theme Custom -->
		{!! Html::script('porto/js/custom.js') !!}
		
		<!-- Theme Initialization Files -->
		{!! Html::script('porto/js/theme.init.js') !!}

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->



		<script src="http://maps.google.com/maps/api/js?key=AIzaSyDn4Fqtci9trC4i6iJjbC-UfdnwONchtQ0"></script>

		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "Avenida Universidad Metropolitana, Caracas, Distrito Capital, Venezuela",
				html: "<strong>Alabama Office</strong><br>217 Summit Boulevard, Birmingham, AL 35243<br><br><a href='#' onclick='mapCenterAt({latitude: 33.44792, longitude: -86.72963, zoom: 16}, event)'>[+] zoom here</a>",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				}
			}];

			// Map Initial Location
			//var initLatitude = 37.09024;
			//var initLongitude = -95.71289;

			var	initLatitude = 10.498705;
			var	initLongitude = -66.788824;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: (($.browser.mobile) ? false : true),
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 16
			};

			var map = $("#googlemaps").gMap(mapSettings);

			// Map Center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$("#googlemaps").gMap("centerAt", options);
			}

		</script>

	</body>

</html>