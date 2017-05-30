@extends('porto.app')

@section('content')

<div role="main" class="main">

	<section id="soluciones" class="page-header page-header-custom-background" style="background-image: url({{ asset('porto/img/custom-header-bg.jpg') }});">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Nuestras <strong style="color: #FFA500">Soluciones</strong>  <span>Consolidar y optimizar la plataforma tecnológica es clave para el negocio.</span></h1>
					<ul class="breadcrumb breadcrumb-valign-mid">
						<li><a href="{{ route('home')}}">Inicio</a></li>
						<li><a href="#">Soluciones</a></li>
						<li class="active">Nuestras Soluciones</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	
	<section id="nuestrassoluciones">

		<div class="container">


		
			<div class="row mt-xlg">
				<div class="col-md-12">

					<p>
						Soluciones verticales especialmente creadas para ofrecer servicios <span class="alternative-font">flexibles</span> y adaptados a las necesidades tecnológicas de nuestros clientes. Apoyandonos en las bondades de nuestra olataforma (KASEYA <i class="fa fa-registered" aria-hidden="true"></i>), experiencia e infraestructura, estas soluciones permiten ofrecerles un alto nivel de confiabilidad y satisfacción.
					</p>

				</div>
			</div>




		</div>

	</section>

<hr class="tall">

</div>
		
@endsection		