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


			<div class="row">

				<div class="col-md-4">
					
					<div class="heading-title heading-border-bottom heading-color text-center">
						<h3 style="color: #0088cc"> <i class="fa fa-desktop" aria-hidden="true"></i> Axion Desk</h3>
					</div>

					<div class="box-video ">

						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" width="560" height="315" src="http://www.youtube.com/embed/W7Las-MJnJo"></iframe>
						</div>

							<p>
								<ul class="list-unstyled list-icons">
									<li><i class="fa fa-check-circle-o" style="color: orange"></i> Atención cuando y donde sea.</li>
									<li><i class="fa fa-check-circle-o" style="color: orange"></i> Gestión bajo SLA Practicas de ITIL.</li>
									<li><i class="fa fa-check-circle-o" style="color: orange"></i> Escalabilidad interna Automatizada.</li>
									<li><i class="fa fa-check-circle-o" style="color: orange"></i> Inversión por incidente atendido.</li>
																
								</ul>
							</p>
												
					</div>							

				</div>

				<div class="col-md-4">
					<div class="heading-title heading-border-bottom heading-color text-center">
						<h3 style="color: #0088cc"> <i class="fa fa-eye" aria-hidden="true"></i> Axion Monitor</h3>
					</div>

					<div class="box-video">

						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" width="560" height="315" src="http://www.youtube.com/embed/W7Las-MJnJo"></iframe>
						</div>

						<p>
							<ul class="list-unstyled list-icons">
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Mantenimiento preventivo 24x7.</li>
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Generación de alertas 24x7</li>
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Monitor Tecnolóico.</li>
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Conocimiento total de sus activos de TI en tiempo real.</li>
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Distribución y actualización de software.</li>
															
							</ul>
						</p>
												
					</div>

				</div>

				<div class="col-md-4">
					<div class="heading-title heading-border-bottom heading-color text-center">
						<h3 style="color: #0088cc"> <i class="fa fa-hdd-o" aria-hidden="true"></i> Axion Backup</h3>
					</div>

					<div class="box-video">

						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" width="560" height="315" src="http://www.youtube.com/embed/W7Las-MJnJo"></iframe>
						</div>

						<p>
							<ul class="list-unstyled list-icons">
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Resguardo permanente.</li>
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Flexibilidad de Frecuencia.</li>
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Recuperación segura y encriptado.</li>
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Generación de alarmas automáticas.</li>
								
															
							</ul>
						</p>
												
					</div>

				</div>

			</div>

			<div class="row">
				
				<div class="col-md-4">
					<div class="heading-title heading-border-bottom heading-color text-center">
						<h3 style="color: #0088cc"> <i class="fa fa-shield" aria-hidden="true"></i> Axion Security</h3>
					</div>


					<div class="box-video">

						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" width="560" height="315" src="http://www.youtube.com/embed/W7Las-MJnJo"></iframe>
						</div>


						<p>
							<ul class="list-unstyled list-icons">
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Instalación y administración de Fireware.</li>
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Accesos y denegaciones.</li>
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Restricción de aplicaciones.</li>
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Administración centralizada de antivirus.</li>
															
							</ul>
						</p>
												
					</div>

				</div>

				<div class="col-md-4">
					<div class="heading-title heading-border-bottom heading-color text-center">
						<h3 style="color: #0088cc"> <i class="fa fa-building" aria-hidden="true"></i> Axion Company</h3>
					</div>


					<div class="box-video">

						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" width="560" height="315" src="http://www.youtube.com/embed/W7Las-MJnJo"></iframe>
						</div>

						<p>
							<ul class="list-unstyled list-icons">
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Personal Calificado.</li>
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Requerimiento con soporte remoto en tiempo real.</li>
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Inventario en tiempo real.</li>
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Generación de alertas en su plataforma.</li>
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Soporte presencial y no programado.</li>
															
							</ul>
						</p>
												
					</div>

				</div>

				<div class="col-md-4">
					<div class="heading-title heading-border-bottom heading-color text-center">
						<h3 style="color: #0088cc"> <i class="fa fa-id-badge" aria-hidden="true"></i> Axion Talents</h3>
					</div>


					<div class="box-video">

						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" width="560" height="315" src="http://www.youtube.com/embed/W7Las-MJnJo"></iframe>
						</div>


						<p>
							<ul class="list-unstyled list-icons">
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Proveemos personal calificado en el área de sistemas.</li>
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Bajo supervisión del cliente.</li>
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Garantizamos el reemplazo del recurso humano.</li>
								<li><i class="fa fa-check-circle-o" style="color: orange"></i> Servicios administrados laboralmente por nuestra parte.</li>
															
							</ul>
						</p>
												
					</div>

				</div>												

			</div>

		</div>

	</section>

<hr class="tall">

</div>
		
@endsection		