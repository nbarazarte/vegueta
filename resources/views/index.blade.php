<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>AxionTI</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="tecnología" />
		<meta name="Author" content="Neil Barazarte [www.neilbarazarte.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		{!! Html::style('smarty/assets/plugins/bootstrap/css/bootstrap.min.css') !!}

		<!-- THEME CSS -->
		{!! Html::style('smarty/assets/css/essentials.css') !!}
		{!! Html::style('smarty/assets/css/layout.css') !!}

		<!-- PAGE LEVEL SCRIPTS -->
		{!! Html::style('smarty/assets/css/header-1.css') !!}
		{!! Html::style('smarty/assets/css/color_scheme/orange.css') !!}


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

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- Logo -->
						<a class="logo pull-left" href="index.html">							
							<img src="{{ asset('smarty/assets/images/top.png') }}" alt="logo axionti" title="axionti" />		
						</a>



						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
							<nav class="nav-main">

								<!-- 
									.nav-onepage
									Required for onepage navigation links
									
									Add .external for an external link!
								-->
								<ul id="topMain" class="nav nav-pills nav-main nav-onepage">
									<li class="active"><!-- HOME -->
										<a href="#slider">
											INICIO
										</a>
									</li>

									<li><!-- FEATURES -->
										<a href="#conocenos">
											CONOCENOS
										</a>
									</li>

									<li><!-- FEATURES -->
										<a href="#servicios">
											SERVICIOS
										</a>
									</li>
									<li><!-- PRICING -->
										<a href="#proyectos">
											PROYECTOS
										</a>
									</li>

									<li><!-- PRICING -->
										<a href="#licenciamiento">
											LICENCIAMIENTO
										</a>
									</li>																		
									<li><!-- TESTIMONIALS -->
										<a href="#testimonials">
											TESTIMONIOS
										</a>
									</li>
									<li><!-- PRICING -->
										<a href="#ventas">
											VENTAS
										</a>
									</li>
								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>


			<!-- HOME -->
			<section id="slider" class="fullheight" style="">
<!--
					Navigation Styles:
					
						data-navigationStyle="" theme default navigation
						
						data-navigationStyle="preview1"
						data-navigationStyle="preview2"
						data-navigationStyle="preview3"
						data-navigationStyle="preview4"
						
					Bottom Shadows
						data-shadow="1"
						data-shadow="2"
						data-shadow="3"
						
					Slider Height (do not use on fullscreen mode)
						data-height="300"
						data-height="350"
						data-height="400"
						data-height="450"
						data-height="500"
						data-height="550"
						data-height="600"
						data-height="650"
						data-height="700"
						data-height="750"
						data-height="800"
				-->
				<div class="fullscreenbanner" data-navigationStyle="preview1">
					<ul class="hide">

						<!-- SLIDE  -->
						<li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 1" data-thumb="smarty/assets/images/demo/1200x800/ingeniero.jpg">

							<img src="smarty/assets/images/1x1.png" data-lazyload="smarty/assets/images/demo/1200x800/ingeniero.jpg" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />

							<div class="tp-dottedoverlay twoxtwo"><!-- dotted overlay --></div>
							<div class="overlay dark-3"><!-- dark overlay [1 to 9 opacity] --></div>

							<div class="tp-caption customin ltl tp-resizeme text_white"
								data-x="center"
								data-y="205"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1000"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								<span class="weight-300"><b>SERVICIOS ADMINISTRADOS / CONSULTORIA EN TI / ENTRENAMIENTO EN TI </b></span>
							</div>

							<div class="tp-caption customin ltl tp-resizeme large_bold_white"
								data-x="center"
								data-y="255"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								

								<span class="label label-default" style="background-color: #ffffff">
									<strong style="color: orange">AXIONTI</strong>	
								</span>	

							</div>


							<div class="tp-caption customin ltl tp-resizeme small_light_white font-lato size-20"
								data-x="center"
								data-y="345"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10; width: 100%; max-width: 750px; white-space: normal; text-align:center;">
								Somos el talento humano que impulsa a la tecnología.
							</div>

							<div class="tp-caption customin ltl tp-resizeme"
								data-x="center"
								data-y="433"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1550"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								<a href="#purchase" class="btn btn-default btn-lg">
									<span>Catálogo de Productos</span> 
								</a>
							</div>

						</li>

						<!-- SLIDE  -->
						<li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 2" data-thumb="smarty/assets/images/demo/1200x800/servidores.jpeg">

							<img src="smarty/assets/images/1x1.png" data-lazyload="smarty/assets/images/demo/1200x800/servidores.jpeg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="110" />

							<div class="tp-caption very_large_text lfb ltt tp-resizeme"
								data-x="right" data-hoffset="-100"
								data-y="center" data-voffset="-100"
								data-speed="600"
								data-start="800"
								data-easing="Power4.easeOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="500"
								data-endeasing="Power4.easeIn" style="color: #ffffff">
								<em style="color: orange">¿Por qué elegirnos?</em>
							</div>

							<div class="tp-caption medium_light_white lfb ltt tp-resizeme"
								data-x="right" data-hoffset="-110"
								data-y="center" data-voffset="10"
								data-speed="600"
								data-start="900"
								data-easing="Power4.easeOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="500"
								data-endeasing="Power4.easeIn">
								<strong>porque la tecnología<br/>
								es la clave para el desarrollo de su empresa.</strong>
								<span style="font-size:24px;font-weight:400;color: #20A778">&ndash; Clover Brito</span>
							</div>

						</li>

						<!-- SLIDE -->
						<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 3" data-thumb="smarty/assets/images/demo/video/Kaseya_thumb.png">

							<img src="smarty/assets/images/1x1.png" data-lazyload="smarty/assets/images/demo/video/Kaseya.png" alt="video" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

							<div class="tp-caption tp-fade fadeout fullscreenvideo"
								data-x="0"
								data-y="100"
								data-speed="1000"
								data-start="1100"
								data-easing="Power4.easeOut"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1500"
								data-endeasing="Power4.easeIn"
								data-autoplay="true"
								data-autoplayonlyfirsttime="false"
								data-nextslideatend="true"
								data-volume="mute" 
								data-forceCover="1" 
								data-aspectratio="16:9" 
								data-forcerewind="on" style="z-index: 2;">

								<div class="tp-dottedoverlay twoxtwo"><!-- dotted overlay --></div>

								<video class="" preload="none" width="100%" height="100%" poster="assets/images/demo/video/Kaseya.png">
									
									<source src="smarty/assets/images/demo/video/Kaseya.mp4" type="video/mp4" />
								</video>

							</div>

							<div class="tp-caption customin ltl tp-resizeme text_white"
								data-x="center"
								data-y="205"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1000"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3;">
								<span class="weight-300"> <!-- DEVELOPMENT / MARKETING / DESIGN / PHOTO --></span>
							</div>

							<div class="tp-caption customin ltl tp-resizeme large_bold_white"
								data-x="center"
								data-y="255"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3;">
								  
								<span class="label label-default">
									<strong style="color: orange">KASEYA VSA</strong>		
								</span>	
								 
							</div>

							<div class="tp-caption customin ltl tp-resizeme small_light_white font-lato size-20"
								data-x="center"
								data-y="345"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3; width: 100%; max-width: 750px; white-space: normal; text-align:center;">
								
								<span class="label label-default">
									<b style="font-size: 30px; color: #ffffff">
										hará más
									</b>
									<em style="font-size: 50px; color: #20A778">
										fácil
									</em>
									<b style="font-size: 30px; color: #ffffff">
										tu gestión.
									</b>
								</span>								

							</div>

							<div class="tp-caption customin ltl tp-resizeme"
								data-x="center"
								data-y="413"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1550"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3;">

								<!-- 
									<a href="#purchase" class="btn btn-default btn-lg">
										<span>Purchase Smarty Now</span> 
									</a>
								-->
							</div>

						</li>

					</ul>
					<div class="tp-bannertimer"></div>
				</div>
			</section>
			<!-- /HOME -->

			<!-- -->
			<section>
				<div class="container">
					
					<div class="row">
					
						<div class="col-lg-5 col-md-5 col-sm-5">

							<img class="img-responsive wow fadeIn" src="smarty/assets/images/top.png" alt="" data-wow-delay="0.4s">

						</div>

						<div class="col-lg-7 col-md-7 col-sm-7">
							<h2 class="size-25">Grupo AXION</h2>

							<p style="text-align: justify;font-size: 18px">
								En Axion, contamos con más de 12 años de experiencia en el área de tecnología de la información brindando: soporte, excelencia y soluciones innovadoras que permiten la continuidad operativa y eficiencia de nuestros clientes, es por ello qué, en Venezuela, seguimos conquistando el mercado a través de nuestro talento humano altamente capacitado que contribuirán en ofrecerles el mejor servicio.								
							</p>

							<!--
							<blockquote>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc.</p>
								<cite>Albert Einstein</cite>
							</blockquote>
							-->

						</div>

					</div>
					
				</div>
			</section>
			<!-- / -->

				<div class="container">
				
					<header class="text-center">
						<h2>Soluciones AXIONTI</h2>
						<h3 style="font-size: 20px">Axion - Suite</h3>
					</header>

				</div>


			<!-- 4 Cols -->
			<section>
				<div class="container">
					<div class="row">
					
						<div class="col-md-3">
							
							<div class="heading-title heading-border-bottom heading-color">
								<h3> <i class="fa fa-desktop" aria-hidden="true"></i> Axion Desk</h3>
							</div>
							
							<p style="font-size: 18px">Atencion preventiva y correctiva de incidentes y requerimientos.</p>

						</div>

						<div class="col-md-3">
							<div class="heading-title heading-border-bottom heading-color">
								<h3> <i class="fa fa-eye" aria-hidden="true"></i> Axion Monitor</h3>
							</div>
							<p style="font-size: 18px">Monitore preventivo de la infraestructura tecnológica 24 x 7.</p>

						</div>

						<div class="col-md-3">
							<div class="heading-title heading-border-bottom heading-color">
								<h3> <i class="fa fa-hdd-o" aria-hidden="true"></i> Axion Backup</h3>
							</div>
							<p style="font-size: 18px">Respaldo y recuperación sistematizados de estaciones y servidores.</p>

						</div>

						<div class="col-md-3">
							<div class="heading-title heading-border-bottom heading-color">
								<h3> <i class="fa fa-shield" aria-hidden="true"></i> Axion Security</h3>
							</div>
							<p style="font-size: 18px">Prevención por amenazas de seguridad y virus.</p>

						</div>						

					</div>
					
				</div>
			</section>
			<!-- /3 Cols -->

			<!-- -->
			<section>
				<div class="container">

					<div class="row">


						<div class="col-md-8">
							<h3 class="size-25">¿Porque elegir nuestras soluciones?</h3>

								<p style="font-size: 18px">
									Porque la tecnología es la clave para el desarrollo de su organización, es por ello que nos comprometemos en con ustedes generando valor a través de:
								</p>

							<ul class="list-unstyled" style="font-size: 18px">
								<li><i class="fa fa-check" style="color: orange"></i> Soluciones integradas.</li>
								<li><i class="fa fa-check" style="color: orange"></i> Canales de distribución.</li>
								<li><i class="fa fa-check" style="color: orange"></i> Calidad Garantizada.</li>
								<li><i class="fa fa-check" style="color: orange"></i> Personal calificado.</li>
								<li><i class="fa fa-check" style="color: orange"></i> Soporte al alcance de un click.</li>
								<li><i class="fa fa-check" style="color: orange"></i> Sólida infraestructura.</li>

							</ul>
						</div>

						<div class="col-md-4">
							<h3 class="size-25">¿Qué ofrecemos?</h3>
							<ul class="list-unstyled" style="font-size: 18px">
								<li><i class="fa fa-check" style="color: orange"></i> Outsourcing TI.</li>
								<li><i class="fa fa-check" style="color: orange"></i> KASEYA VSA.</li>
								<li><i class="fa fa-check" style="color: orange"></i> Comercialización y sumistro.</li>
								<li><i class="fa fa-check" style="color: orange"></i> Consultoría.</li>								
							</ul>
						</div>


					</div>

				</div>
			</section>
			<!-- / -->


			<section id="conocenos" class="theme-color" style="height: 200px">
				<div class="container">
				
					<header class="text-center">
						<h2>Conócenos</h2>
						<p style="font-size: 20px">Contamos con un equipo de excelentes profesionales</p>
					</header>

				</div>
			</section>


			<section>
				<div class="container">
				
<div class="row">

	<div class="col-md-3">

		<div class="box-static box-border-top">
			<div class="box-title">
				<h4>Nuestro Equipo</h4>
			</div>
			<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus.</p>
			<p><small>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis.</small></p>
		</div>

	</div>

	<div class="col-md-3">

		<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
			<div class="front">
				<div class="box1 box-danger">
					<div class="box-icon-title">
						<img class="img-responsive" src="smarty/assets/images/demo/600x400/16-min.jpg" alt="" />
						<h2>Fully Reposnive</h2>
					</div>
					<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
				</div>
			</div>

			<div class="back">
				<div class="box2 box-danger">
					<h4>BACK SIDE</h4>
					<hr />
					<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
					<a href="#" class="social-icon social-facebook">
						<i class="fa fa-facebook"></i>
						<i class="fa fa-facebook"></i>
					</a>
				</div>
			</div>
		</div>

	</div>

	<div class="col-md-3">

		<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
			<div class="front">
				<div class="box1 box-danger">
					<div class="box-icon-title">
						<img class="img-responsive" src="smarty/assets/images/demo/600x400/19-min.jpg" alt="" />
						<h2>Clean Design</h2>
					</div>
					<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
				</div>
			</div>

			<div class="back">
				<div class="box2 box-danger">
					<h4>BACK SIDE</h4>
					<hr />
					<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
					<a href="#" class="social-icon social-facebook">
						<i class="fa fa-facebook"></i>
						<i class="fa fa-facebook"></i>
					</a>


				</div>
			</div>
		</div>

	</div>

	<div class="col-md-3">

		<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
			<div class="front">
				<div class="box1 box-danger">
					<div class="box-icon-title">
						<img class="img-responsive" src="smarty/assets/images/demo/600x400/31-min.jpg" alt="" />
						<h2>Multipurpose</h2>
					</div>
					<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
				</div>
			</div>

			<div class="back">
				<div class="box2 box-danger">
					<h4>BACK SIDE</h4>
					<hr />
					<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
					<a href="#" class="social-icon social-facebook">
						<i class="fa fa-facebook"></i>
						<i class="fa fa-facebook"></i>
					</a>

				</div>
			</div>
		</div>

	</div>

</div>

<hr>

<div class="row">
	
	<div class="col-md-6">

		<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
			<div class="front">
				<div class="box1 box-danger">
					<div class="box-icon-title">
						<img class="img-responsive" src="smarty/assets/images/demo/600x400/16-min.jpg" alt="" />
						<h2>Fully Reposnive</h2>
					</div>
					<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
				</div>
			</div>

			<div class="back">
				<div class="box2 box-danger">
					<h4>BACK SIDE</h4>
					<hr />
					<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
					<a href="#" class="social-icon social-facebook">
						<i class="fa fa-facebook"></i>
						<i class="fa fa-facebook"></i>
					</a>

				</div>
			</div>
		</div>

	</div>

	<div class="col-md-6">

		<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
			<div class="front">
				<div class="box1 box-danger">
					<div class="box-icon-title">
						<img class="img-responsive" src="smarty/assets/images/demo/600x400/19-min.jpg" alt="" />
						<h2>Clean Design</h2>
					</div>
					<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
				</div>
			</div>

			<div class="back">
				<div class="box2 box-danger">
					<h4>BACK SIDE</h4>
					<hr />
					<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
					<a href="#" class="social-icon social-facebook">
						<i class="fa fa-facebook"></i>
						<i class="fa fa-facebook"></i>
					</a>

				</div>
			</div>
		</div>

	</div>



</div>


				</div>
			</section>




			<section id="servicios" class="theme-color" style="height: 200px">
				<div class="container">
				
					<header class="text-center">
						<h2>Servicios</h2>
						<p style="font-size: 20px">...</p>
					</header>

				</div>
			</section>

			<section>
				<div class="container">
					
					<div class="row">
					
						<div class="col-lg-7 col-md-7 col-sm-7">
							<h2 class="size-25">KASEYA</h2>

							<p style="text-align: justify;font-size: 18px">
								Somos partner de <strong style="color: black">Kaseya</strong>, un software que integra la automatización en la implementación de sistemas y la administración de procesos mediante la replicación de las mejores prácticas asociadas a la provisión de servicios.
							<br>
								Soluciones verificadas especialmente creadas para ofrecer servicios flexibles y adaptados a las necesidades tecnológicas de nuestros clientes.
							<br>
								Apoyandonos en las bondades de nuestra plataforma <strong style="color: black">(KASEYA <i class="fa fa-registered" aria-hidden="true"></i>)</strong>, experiencia e infraestructura, estas soluciones permiten ofrecerles un alto nivel de confianbilidad y satisfacción.

							</p>

							<!--
							<blockquote>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc.</p>
								<cite>Albert Einstein</cite>
							</blockquote>
							-->

						</div>

						<div class="col-lg-5 col-md-5 col-sm-5">

							<img class="img-responsive wow fadeIn" src="smarty/assets/images/kaseya.png" alt="" data-wow-delay="0.4s">

						</div>						

					</div>
					
				</div>
			</section>

			
			<section id="">
						
				<div class="container text-center">
					
					<h1 class="nomargin size-50 weight-300 wow fadeInUp" data-wow-delay="0.4s">Su empresa obtendrá un servicio profesional</h1>
					<p class="lead font-lato size-30 wow fadeInUp" data-wow-delay="0.7s">Que lo lleve de la mano en el camino de la tecnología.</p>
					

					<div class="row margin-top-100 text-left">

						<div class="col-sm-8" align="center">
							<img src="smarty/assets/images/demo/1926.jpg" alt="product image" />
						</div>

						<div class="col-sm-4">
							<h3 class="weight-300">A nosotros en  <span>AXION</span></h3>
						
							<p>
								Nos preocupa y se ocupa de implementar la mejor herramienta que hará su negocio más fuerte y eficiente. 
							<br>
								Con esto en mente, aquí están algunos de los beneficios clave que experimentará una vez que realice su implementación con nosotros:
							</p>
							
							<hr />

							<ul class="list-unstyled list-icons">
								<li><i class="fa fa-check"></i> Mejora  la rentabilidad: su éxito está a la vanguardia de  las decisiones del negocios.</li>
								<li><i class="fa fa-check"></i> Eficiencia incrementada: Lograr más en menos tiempo, lo que significa más calidad, tranquilidad, tanto para su negocio como para su vida.</li>
								<li><i class="fa fa-check"></i> Satisfacción Garantizada: satisfacer y exceder sus expectativas de servicio de sus clientes.</li>
								<li><i class="fa fa-check"></i> Clientes felices: servicios más rápidos, en cualquier lugar y  momento, de forma eficientes.</li>
								<li><i class="fa fa-check"></i> Le damos el poder  de elegir: ofrecemos un producto para que funcionen como una plataforma abierta. A su medida.</li>
								<li><i class="fa fa-check"></i> Sencillo de utilizar: tan simple como usted quiere, tan poderoso como usted necesita.</li>								
							</ul>

						</div>
					</div>

					<hr>


					<header class="text-center">
						<h2>Servicios Administrados</h2>
						
					</header>
<!-- -->
			<section>
				<div class="container">

					<!-- FEATURED BOXES 3 -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="text-center">
								<i class="ico-light ico-lg ico-rounded ico-hover et-tools-2"></i>
								<h4>Soporte</h4>
								<p>Contamos con una plataforma poderosa y una infraestructura  de alto nivel que nos permite garantizar un servicio</p>

							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="text-center">
								<i class="ico-light ico-lg ico-rounded ico-hover et-piechart"></i>
								<h4>Auditoria</h4>
								<p>Contamos con una modalidad de auditoria virtual (AVA) que nos permite generar resultados más confiables y en tiempo record.</p>

							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="text-center">
								<i class="ico-light ico-lg ico-rounded ico-hover et-mobile"></i>
								<h4>Software y Hardware</h4>
								<p>Todo en equipamiento que garantizará la continuidad operativa de su organización.</p>

							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="text-center">
								<i class="ico-light ico-lg ico-rounded ico-hover et-streetsign"></i>
								<h4>Consultoría</h4>
								<p>Tenemos un equipo especializado en la ejecución y puesta en marcha de Proyectos de Infraestructura</p>

							</div>
						</div>
					</div>
					<!-- /FEATURED BOXES 3 -->

				</div>
			</section>
			<!-- / -->			

				</div>

			</section>
			
			<section id="proyectos" class="theme-color" style="height: 200px">
				<div class="container">
				
					<header class="text-center">
						<h2>Proyectos</h2>
						<p style="font-size: 20px">...</p>
					</header>

				</div>
			</section>

			<section id="">
				<div class="container">

					<div class="row">

							sin informacion
					</div>
				</div>
			</section>		



			<section id="licenciamiento" class="theme-color" style="height: 200px">
				<div class="container">
				
					<header class="text-center">
						<h2>Licenciamiento</h2>
						<p style="font-size: 20px">...</p>
					</header>

				</div>
			</section>

			<section id="">
				<div class="container">

					<div class="row">

							sin informacion
					</div>
				</div>
			</section>	

			<section id="testimonials" class="theme-color" style="height: 200px">
				<div class="container">
				
					<header class="text-center">
						<h2>Testimonios</h2>
						<p style="font-size: 20px">Le garantizamos la calidad a nuestros clientes</p>
					</header>

				</div>
			</section>

			<!-- TESTIMONIALS -->
			<section id="" class="alternate">
				<div class="container">

					<!-- 
						Note: remove class="rounded" from the img for squared image!
					-->
					<div class="row margin-bottom-60">
						<div class="col-md-4">
							<div class="testimonial testimonial-bordered padding-15">
								<figure class="pull-left">
									<img class="rounded" src="smarty/assets/images/demo/people/300x300/2-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero!</p>
									<cite>
										Felicia Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="testimonial testimonial-bordered padding-15">
								<figure class="pull-left">
									<img class="rounded" src="smarty/assets/images/demo/people/300x300/1-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero!</p>
									<cite>
										Joana Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="testimonial testimonial-bordered padding-15">
								<figure class="pull-left">
									<img class="rounded" src="smarty/assets/images/demo/people/300x300/6-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero!</p>
									<cite>
										Melissa Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</div>
					</div>


				</div>
			</section>
			<!-- /TESTIMONIALS -->



<section id="ventas" class="theme-color" style="height: 200px">
				<div class="container">
				
					<header class="text-center">
						<h2>Ventas</h2>
						<p style="font-size: 20px">...</p>
					</header>

				</div>
			</section>


			<!-- PRICING -->
			<section id="">
				<div class="container">

					<div class="row">

						<div class="col-md-3 col-sm-3">
							
							<div class="price-clean">                                
								<h4>
									<sup>$</sup>15<em>/month</em>
								</h4>
								<h5> Starter </h5>
								<hr />
								<p>For individuals looking for something simple to get started.</p>
								<hr />
								<a href="#" class="btn btn-3d btn-teal">KASEYA VSA</a>
							</div>
						
						</div>

						<div class="col-md-3 col-sm-3">
							
							<div class="price-clean">                                
								<h4>
									<sup>$</sup>25<em>/month</em>
								</h4>
								<h5> BUSINESS </h5>
								<hr />
								<p>For individuals looking for something simple to get started.</p>
								<hr />
								<a href="#" class="btn btn-3d btn-teal">Learn More</a>
							</div>
						
						</div>

						<div class="col-md-3 col-sm-3">
							
							<div class="price-clean price-clean-popular"> 
								<div class="ribbon"> 
									<div class="ribbon-inner">POPULAR</div>
								</div>
								
								<h4>
									<sup>$</sup>35<em>/month</em>
								</h4>
								<h5> DEVELOPER </h5>
								<hr />
								<p>For individuals looking for something simple to get started.</p>
								<hr />
								<a href="#" class="btn btn-3d btn-primary">Learn More</a>
							</div>
						
						</div>

						<div class="col-md-3 col-sm-3">
							
							<div class="price-clean">                                
								<h4>
									<sup>$</sup>50<em>/month</em>
								</h4>
								<h5> VIP </h5>
								<hr />
								<p>For individuals looking for something simple to get started.</p>
								<hr />
								<a href="#" class="btn btn-3d btn-teal">Learn More</a>
							</div>
						
						</div>

					</div>

				</div>
			</section>
			<!-- /PRICING -->




			<!-- FOOTER -->
			<footer id="footer">

				<div class="copyright">
					<div class="container">

						<div class="row">
							<div class="col-md-2">
								<b>Copyright &copy; <?=date('Y')?> AXIONTI</b>
							</div>

							<div class="col-md-8">

							</div>

							<div class="col-md-2">
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
						</div>


					</div>
				</div>
			</footer>
			<!-- /FOOTER -->

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

		
	</body>
</html>
