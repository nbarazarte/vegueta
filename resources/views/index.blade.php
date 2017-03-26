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
										<a href="#soluciones">
											SOLUCIONES
										</a>
									</li>
									<li><!-- PRICING -->
										<a href="#pricing">
											PRICING
										</a>
									</li>
									<li><!-- TESTIMONIALS -->
										<a href="#testimonials">
											TESTIMONIOS
										</a>
									</li>
									<li><!-- PURCHASE -->
										<a class="external" href="#purchase">
											PURCHASE
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

			<section id="soluciones" class="theme-color" style="height: 200px">
				<div class="container">
				
					<header class="text-center">
						<h2>Soluciones</h2>
						<p style="font-size: 20px">Axion - Suite</p>
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








			<!-- PRICING -->
			<section id="pricing">
				<div class="container">

					<header class="text-center margin-bottom-60">
						<h2>Our Pricing</h2>
						<p class="lead font-lato">Lorem ipsum dolor sit amet adipiscium elit</p>
						<hr />
					</header>

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
								<a href="#" class="btn btn-3d btn-teal">Learn More</a>
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



			<!-- TESTIMONIALS -->
			<section id="testimonials" class="alternate">
				<div class="container">

					<header class="text-center margin-bottom-60">
						<h2>Testimonials</h2>
						<p class="lead font-lato">Lorem ipsum dolor sit amet adipiscium elit</p>
						<hr />
					</header>

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

					<!-- 
						Note: remove class="rounded" from the img for squared image!
					-->
					<ul class="row clearfix testimonial-dotted list-unstyled">
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="pull-left">
									<img class="rounded" src="smarty/assets/images/demo/people/300x300/2-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Joana Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="pull-left">
									<img class="rounded" src="smarty/assets/images/demo/people/300x300/6-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Melissa Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="pull-left">
									<img class="rounded" src="smarty/assets/images/demo/people/300x300/7-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Stephany Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="pull-left">
									<img class="rounded" src="smarty/assets/images/demo/people/300x300/8-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Pamela Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="pull-left">
									<img class="rounded" src="smarty/assets/images/demo/people/300x300/11-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Simina Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="pull-left">
									<img class="rounded" src="smarty/assets/images/demo/people/300x300/12-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Mihaela Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
					</ul>

				</div>
			</section>
			<!-- /TESTIMONIALS -->




			<!-- -->
			<section>
				<div class="container">
					
					<div class="row">
					
						<div class="col-lg-4">

							<div class="heading-title heading-border-bottom">
								<h3>Smarty Vision</h3>
							</div>

							<div class="toggle toggle-transparent-body toggle-accordion">

								<div class="toggle active">
									<label>Who we are?</label>
									<div class="toggle-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
									</div>
								</div>

								<div class="toggle">
									<label>Our long-term vison</label>
									<div class="toggle-content">
										<p>Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc.</p>
									</div>
								</div>

								<div class="toggle">
									<label>How can we help you?</label>
									<div class="toggle-content">
										<p>Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>
									</div>
								</div>

							</div>

						</div>

						<div class="col-lg-4">

							<div class="heading-title heading-border-bottom">
								<h3>Smarty Skills</h3>
							</div>

							<div class="progress progress-lg"><!-- progress bar -->
								<div class="progress-bar progress-bar-warning progress-bar-striped active text-left" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%; min-width: 2em;">
									<span>WEB DESIGN 90%</span>
								</div>
							</div><!-- /progress bar -->

							<div class="progress progress-lg"><!-- progress bar -->
								<div class="progress-bar progress-bar-danger progress-bar-striped active text-left" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%; min-width: 2em;">
									<span>HTML/CSS 98%</span>
								</div>
							</div><!-- /progress bar -->

							<div class="progress progress-lg"><!-- progress bar -->
								<div class="progress-bar progress-bar-success progress-bar-striped active text-left" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%; min-width: 2em;">
									<span>JAVASCRIPT 60%</span>
								</div>
							</div><!-- /progress bar -->

							<div class="progress progress-lg"><!-- progress bar -->
								<div class="progress-bar progress-bar-info progress-bar-striped active text-left" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 88%; min-width: 2em;">
									<span>PHP/MYSQL 88%</span>
								</div>
							</div><!-- /progress bar -->

						</div>

						<div class="col-lg-4">

							<div class="heading-title heading-border-bottom">
								<h3>Smarty Special</h3>
							</div>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis aliquam id pariatur accusantium perspiciatis deserunt officiis similique nihil dolor blanditiis dignissimos iure praesentium vero suscipit doloribus aperiam unde hic non sint neque molestiae consectetur voluptatum beatae ratione corporis.</p>
							
							<a href="#" class="btn btn-default btn-block btn-lg">Join Us Now</a>
							
						</div>

					</div>

				</div>
			</section>
			<!-- / -->



			<!-- -->
			<section class="alternate">
				<div class="container">
					
					<div class="text-center">
						<h2 class="wow fadeInUp nomargin" data-wow-delay="0.3s">DOES SMARTY CONVINCED YOU?</h2>

						<p class="lead font-lato size-30 wow fadeInUp margin-bottom-60" data-wow-delay="0.5s">Building a Landing Page was never so Easy &amp; Interactive.</p>
						
						<div class="margin-top-30">
							<a href="#" class="btn btn-3d btn-lg wow fadeInUp btn-teal" data-wow-delay="0.7"><i class="glyphicon glyphicon-th-large"></i>FREE TRIAL</a>
							<span class="size-17 hidden-xs wow fadeInUp" data-wow-delay="1s">&nbsp; OR &nbsp;</span>
							<a href="#" class="btn btn-3d btn-lg wow fadeInUp btn-red" data-wow-delay="0.59"><i class="glyphicon glyphicon-user"></i>START FOR A SIBSCRIPTION</a>
						</div>
					</div>

				</div>
			</section>
			<!-- / -->





			<!-- FOOTER -->
			<footer id="footer">
				<div class="container">

					<div class="row">
						
						<div class="col-md-3">
							<!-- Footer Logo -->
							<img class="footer-logo" src="smarty/assets/images/logo-footer.png" alt="" />

							<!-- Small Description -->
							<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

							<!-- Contact Address -->
							<address>
								<ul class="list-unstyled">
									<li class="footer-sprite address">
										PO Box 21132<br>
										Here Weare St, Melbourne<br>
										Vivas 2355 Australia<br>
									</li>
									<li class="footer-sprite phone">
										Phone: 1-800-565-2390
									</li>
									<li class="footer-sprite email">
										<a href="mailto:support@yourname.com">support@yourname.com</a>
									</li>
								</ul>
							</address>
							<!-- /Contact Address -->

						</div>

						<div class="col-md-3">

							<!-- Latest Blog Post -->
							<h4 class="letter-spacing-1">LATEST NEWS</h4>
							<ul class="footer-posts list-unstyled">
								<li>
									<a href="#">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue</a>
									<small>29 June 2015</small>
								</li>
								<li>
									<a href="#">Nullam id dolor id nibh ultricies</a>
									<small>29 June 2015</small>
								</li>
								<li>
									<a href="#">Duis mollis, est non commodo luctus</a>
									<small>29 June 2015</small>
								</li>
							</ul>
							<!-- /Latest Blog Post -->

						</div>

						<div class="col-md-2">

							<!-- Links -->
							<h4 class="letter-spacing-1">EXPLORE SMARTY</h4>
							<ul class="footer-links list-unstyled">
								<li><a href="#">Home</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Our Services</a></li>
								<li><a href="#">Our Clients</a></li>
								<li><a href="#">Our Pricing</a></li>
								<li><a href="#">Smarty Tour</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
							<!-- /Links -->

						</div>

						<div class="col-md-4">

							<!-- Newsletter Form -->
							<h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
							<p>Subscribe to Our Newsletter to get Important News &amp; Offers</p>

							<form class="validate" action="php/newsletter.php" method="post" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="email" id="email" name="email" class="form-control required" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
							<!-- /Newsletter Form -->

							<!-- Social Icons -->
							<div class="margin-top-20">
								<a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>
					
							</div>
							<!-- /Social Icons -->

						</div>

					</div>

				</div>

				<div class="copyright">
					<div class="container">
						<ul class="pull-right nomargin list-inline mobile-block">
							<li><a href="#">Terms &amp; Conditions</a></li>
							<li>&bull;</li>
							<li><a href="#">Privacy</a></li>
						</ul>
						&copy; All Rights Reserved, Company LTD
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
