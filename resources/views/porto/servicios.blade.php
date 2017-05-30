@extends('porto.app')

@section('content')

<div role="main" class="main">

	<section id="soluciones" class="page-header page-header-custom-background" style="background-image: url({{ asset('porto/img/custom-header-bg.jpg') }});">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Servicios <strong style="color: #FFA500">AXION TI</strong> <span>Consolidar y optimizar la plataforma tecnológica es clave para el negocio.</span></h1>
					<ul class="breadcrumb breadcrumb-valign-mid">
						<li><a href="{{ route('home')}}">Inicio</a></li>
						<li><a href="#">Soluciones</a></li>
						<li class="active">Servicios</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

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
								<img src="{{ asset('porto/img/outsourcing.jpg') }}" alt="" />
								<strong style="color: #FFA500">Outsourcing</strong>
							</div>
						</div>
						<div class="col-md-2">
							<div class="process-image appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="200">
								<img src="{{ asset('porto/img/gigantes-tecnologicos.jpg') }}" alt="" />
								<strong style="color: #FFA500">Comercialización y Suministros</strong>
							</div>
						</div>
						<div class="col-md-2">
							<div class="process-image appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="400">
								<img src="{{ asset('porto/img/consultoria.png') }}" alt="" />
								<strong style="color: #FFA500">Consultoría</strong>
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
								<strong class="our-work" style="color: #FFA500">Kaseya VSA</strong>
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

	<section>

		<div class="container">

			@include('porto.serviciosKaseya')

		</div>

	</section>

</div>

		
@endsection		