@extends('porto.app')

@section('content')

<div role="main" class="main">

@include('porto.sliderServicios')

	<section id="servicios">

		<div class="container">

			<div class="row center">
				<div class="col-md-12">
					<h2 class="mb-sm word-rotator-title">
						Nos preocupamos de implementar la mejor herramienta que hará su negocio más<span class="alternative-font"> fuerte y eficiente.</span> 
					</h2>
					<p class="lead">
						Con esto en mente, aquí están algunos de los beneficios clave que experimentará una vez que realice su implementación con nosotros.
					</p>
				</div>
			</div>

		</div>


		<div class="container">

			<div class="home-concept">

				<div class="container">
			
					<div class="row center">
						<span class="sun"></span>
						<span class="cloud"></span>
						<div class="col-md-2 col-md-offset-1">
							<div class="process-image appear-animation" data-appear-animation="bounceIn">
								<img src="{{ asset('porto/img/outsourcing2.png') }}" alt="" />
								<strong style="">Outsourcing TI</strong>
							</div>
						</div>
						<div class="col-md-2">
							<div class="process-image appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="200">
								<img src="{{ asset('porto/img/logos_tecnologia2.png') }}" alt="" />
								<strong style="">Comercialización y Suministros</strong>
							</div>
						</div>
						<div class="col-md-2">
							<div class="process-image appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="400">
								<img src="{{ asset('porto/img/consultoria2.png') }}" alt="" />
								<strong style="">Consultoría</strong>
							</div>
						</div>
						<div class="col-md-4 col-md-offset-1">
							<div class="project-image">
								<div id="fcSlideshow" class="fc-slideshow">
									<ul class="fc-slides">
										<li><a href="#"><img class="img-responsive" src="{{ asset('porto/img/kaseya1.png') }}" alt="" /></a></li>
										<li><a href="#"><img class="img-responsive" src="{{ asset('porto/img/kaseya2.png') }}" alt="" /></a></li>
									</ul>
								</div>
								<strong class="our-work" style="">Kaseya VSA</strong>
							</div>
						</div>
					</div>
			
				</div>
			</div>
		
		</div>

	</section>

	<section class="section section-default section-with-mockup mb-none" id="">
		
		<div class="container">
			
			@include('porto.serviciosOutsourcing')

		</div>

	</section>
	
	<section class="">
				<div class="home-intro" id="home-intro">
					<div class="container">

						<div class="row">
							<div class="col-md-8">
								<p>
									Confíenos la gestión de la <em style="color: #00a69c">tecnología</em> en su empresa
									<span> y le garantizamos el aumento de su productividad</span>
								</p>
							</div>
							<div class="col-md-4">
								<div class="get-started">
									<a href="{{ route('contacto')}}" class="btn btn-lg btn-primary">Contáctanos</a>
									
								</div>
							</div>
						</div>

					</div>
				</div>
	</section>

	<section>

		<div class="container">

			@include('porto.serviciosComercializacion')

		</div>

	</section>




	<section class="section section-default section-with-mockup mb-none" id="">

		<div class="container">

			@include('porto.serviciosConsultoria')

		</div>

	</section>





	<section class="call-to-action call-to-action-primary mb-xl">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="call-to-action-content align-left pb-md mb-xl ml-none">
						<h2 class="text-color-light mb-none mt-xl">Todo lo que su empresa <strong>necesita.</strong></h2>
						<p class="lead mb-xl">Ofrecemos servicios flexibles y adaptadas a las necesidades tecnológicas de nuestros clientes</p>
					</div>
					<div class="call-to-action-btn">
						<a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-lg btn-primary btn-primary-scale-2 mr-md">Contáctanos</a>
						<span class="mr-md text-color-light hidden-xs"> <strong></strong><span class="arrow arrow-light hlb" style="top: -88px; right: -47px;"></span></span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>

		<div class="container">

			@include('porto.serviciosKaseya')

		</div>

	</section>

</div>

		
@endsection		