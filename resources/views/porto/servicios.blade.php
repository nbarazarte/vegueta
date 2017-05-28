@extends('porto.app')

@section('content')

<div role="main" class="main">

	<section id="soluciones" class="page-header page-header-custom-background" style="background-image: url({{ asset('porto/img/custom-header-bg.jpg') }});">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Servicios <strong style="color: #FFA500">AXIONTI</strong> <span>Consolidar y optimizar la plataforma tecnológica es clave para el negocio.</span></h1>
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

			<div class="row mt-xlg">
				<div class="col-md-12">
					<p>
						<strong>AXIONTI</strong> se preocupa y se ocupa de implementar la mejor herramienta que hará su negocio <span class="alternative-font">más fuerte</span> y eficiente. Con esto en mente, aquí están algunos de los beneficios clave que experimentará una vez que realice su implementación con nosotros.
					   </p>
				</div>
			</div>

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

	<section>
		
		<div class="container">
			
			<div class="row">
				<div class="col-md-4">

					<div class="embed-responsive embed-responsive-16by9">
						<iframe frameborder="0" allowfullscreen="" src="http://www.youtube.com/embed/WmEGfNZWdgE?showinfo=0&amp;wmode=opaque"></iframe>
					</div>

				</div>
				<div class="col-md-7 col-md-offset-1">
					<h2 class="mt-xl"><strong>Kaseya</strong> VSA</h2>

					<p class="">
						Somos partner de <strong style="color: black">Kaseya</strong>, un software que integra la automatización en la implementación de sistemas y la administración de procesos mediante la replicación de las mejores prácticas asociadas a la provisión de servicios.
					<br>
						Soluciones verificadas especialmente creadas para ofrecer servicios flexibles y adaptados a las necesidades tecnológicas de nuestros clientes.
					<br>
						Apoyandonos en las bondades de nuestra plataforma <strong style="color: black">(KASEYA <i class="fa fa-registered" aria-hidden="true"></i>)</strong>, experiencia e infraestructura, estas soluciones permiten ofrecerles un alto nivel de confianbilidad y satisfacción.

					</p>
				</div>
			</div>
			
			<hr class="tall">

			<div class="row">
				<div class="col-md-7">
					<h2 class="mt-xl">Outsourcing <strong>TI</strong></h2>
					<p>
						Ofrecemos Soporte Preventivo Remoto e Ingeniería de Proyectos para aplicar tecnología madura en la Área de Infraestructura y Telecomunicaciones. Axion Ti presenta un nuevo esquema de negocio basado en outsourcing TI bajo demanda, donde solo pagas lo que consumes en el mes.
					</p>
				</div>
				<div class="col-md-4 col-md-offset-1 mt-xl">
					<img class="img-responsive mt-xl appear-animation" src="{{ asset('porto/img/kaseyalogo-bugonly2.png')}}" alt="layout styles" data-appear-animation="fadeInLeft">
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<div class="row">
							<div class="col-md-6">
								<div class="feature-box feature-box-style-5 reverse">
									<div class="feature-box-icon">
										<i class="fa fa-eye-slash" aria-hidden="true"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-sm">Supervisión y Gestión Remota</h4>
										<p class="mb-lg">
											
											<ul class="list list-icons list-secondary">
												<li><i class="fa fa-check"></i> Monitor proactivo.</li>
												<li><i class="fa fa-check"></i> Registros de eventos y aplicaciones.</li>
												<li><i class="fa fa-check"></i> Seguimiento robusto y de alerta.</li>
											</ul>

										</p>

									</div>

								</div>

							</div>
							<div class="col-md-6">
								<div class="feature-box feature-box-style-5">
									<div class="feature-box-icon">
										<i class="fa fa-cloud" aria-hidden="true"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-sm">Monitoreo de Red</h4>
										<p class="mb-lg">
											
											<ul class="list list-icons list-secondary">
												<li><i class="fa fa-check"></i> Desde Windows, VMware, Linux, Cisco IOS y otros.</li>
												<li><i class="fa fa-check"></i> Se pueden controlar los dispositivos de la red.</li>
												<li><i class="fa fa-check"></i> Se pueden realizar consultas SQL.</li>
											</ul>

										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="feature-box feature-box-style-5 reverse">
									<div class="feature-box-icon">
										<i class="fa fa-terminal" aria-hidden="true"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-sm">Control Remoto</h4>
										<p class="mb-lg">
											
											<ul class="list list-icons list-secondary">
												<li><i class="fa fa-check"></i> Una solución de control remoto completo.</li>
												<li><i class="fa fa-check"></i> Conexión instantánea incluso en redes de alta latencia.</li>
												<li><i class="fa fa-check"></i> Múltiples monitores en el punto final remoto.</li>
											</ul>

										</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="feature-box feature-box-style-5">
									<div class="feature-box-icon">
										<i class="fa fa-bug" aria-hidden="true"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-sm">Administración de Parches</h4>
										<p class="mb-lg">
											
											<ul class="list list-icons list-secondary">
												<li><i class="fa fa-check"></i> Implementación automatizada.</li>
												<li><i class="fa fa-check"></i> Por tiempo, equipo, grupo o colecciones definidas por el usuario.</li>
												<li><i class="fa fa-check"></i> Despliegue de todos los parches a través de la red.</li>
											</ul>

										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="feature-box feature-box-style-5 reverse">
									<div class="feature-box-icon">
										<i class="fa fa-search" aria-hidden="true"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-sm">Auditoría de Red/Inventario</h4>
										<p class="mb-lg">
											
											<ul class="list list-icons list-secondary">
												<li><i class="fa fa-check"></i> Escanear y auditar los sistemas de la red.</li>
												<li><i class="fa fa-check"></i> Registrar cualquier cambio de hardware y software.</li>
												<li><i class="fa fa-check"></i> Implementar plantillas de configuración del sistema y las normas.</li>
											</ul>

										</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="feature-box feature-box-style-5">
									<div class="feature-box-icon">
										<i class="fa fa-shield" aria-hidden="true"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-sm">Antivirus y Gestión de Seguridad</h4>
										<p class="mb-lg">
											
											<ul class="list list-icons list-secondary">
												<li><i class="fa fa-check"></i> Proporciona actualizaciones y alertas de estado en tiempo real.</li>
												<li><i class="fa fa-check"></i> Configuración de Perfiles.</li>
												<li><i class="fa fa-check"></i> Gestión de Licencias.</li>
												<li><i class="fa fa-check"></i> Conjunto de Columnas.</li>
											</ul>

										</p>
									</div>
								</div>
							</div>
						</div>							

					</div>
				</div>
			</div>

			<hr class="tall">

			<div class="row">
				<div class="col-md-4">

					<img class="img-responsive mt-xl appear-animation" src="{{ asset('porto/img/gigantes-tecnologicos-grande.jpg')}}" alt="layout styles" data-appear-animation="fadeInLeft">

				</div>
				<div class="col-md-7 col-md-offset-1">
					<h2 class="mt-xl"><strong>Comercialización y</strong> Suministros</h2>

					<p class="">

						Nuestro compromiso es proveer a nuestros clientes una <span class="alternative-font">solución integral</span> apalancados en las mejores marcas del mercado y en la mejor calidad de servicio.

					</p>
				</div>
			</div>

			<div class="featured-boxes">

				<div class="row">

					<br>
					<h2 class="mt-xl"><strong>Software</strong> </h2>

					<div class="col-md-4 col-sm-6">
						<div class="featured-box featured-box-primary featured-box-effect-1">
							<div class="box-content">
								<i class="icon-featured fa fa-shield" aria-hidden="true"></i>
								<h4 class="text-uppercase">Antivirus</h4>
								<p>Rendimiento y seguridad deteniendo amenazas.</p>
								
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="featured-box featured-box-secondary featured-box-effect-1">
							<div class="box-content">
								<i class="icon-featured fa fa-download" aria-hidden="true"></i>
								<h4 class="text-uppercase">Backup</h4>
								<p>Copia de seguridad rápido y potente.</p>
								
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="featured-box featured-box-tertiary featured-box-effect-1">
							<div class="box-content">
								<i class="icon-featured fa fa-windows"></i>
								<h4 class="text-uppercase">Microsoft</h4>
								<p>Soluciones integradas con productos Microsoft para sistemas operativos y aplicaciones.</p>
								
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="row">

				<div class="col-md-12">

					<div class="content-grid mt-lg mb-lg">
						<div class="row content-grid-row">
							<div class="content-grid-item col-md-3 center">
								<img class="img-responsive" src="{{ asset('porto/img/software/acronis.png')}}" alt="">
							</div>
							<div class="content-grid-item col-md-3 center">
								<img class="img-responsive" src="{{ asset('porto/img/software/cisco.png')}}" alt="">
							</div>
							<div class="content-grid-item col-md-3 center">
								<img class="img-responsive" src="{{ asset('porto/img/software/eset.png')}}" alt="">
							</div>
							<div class="content-grid-item col-md-3 center">
								<img class="img-responsive" src="{{ asset('porto/img/software/kaspersky.png')}}" alt="">
							</div>
						</div>
						<div class="row content-grid-row">
							<div class="content-grid-item col-md-3 center">
								<img class="img-responsive" src="{{ asset('porto/img/software/office.png')}}" alt="">
							</div>
							<div class="content-grid-item col-md-3 center">
								<img class="img-responsive" src="{{ asset('porto/img/software/panda.png')}}" alt="">
							</div>
							<div class="content-grid-item col-md-3 center">
								<img class="img-responsive" src="{{ asset('porto/img/software/vmware.png')}}" alt="">
							</div>
							<div class="content-grid-item col-md-3 center">
								<img class="img-responsive" src="{{ asset('porto/img/software/windows-server.png')}}" alt="">
							</div>
						</div>
					</div>

				</div>
			</div>	

			<h2 class="mt-xl"><strong>Hardware</strong> </h2>

			<div class="row">

				<div class="col-md-12">

					<div id="popupProject" class="popup-inline-content">
						<h2 class="mt-lg">Lorem Ipsum Dolor</h2>

						<div class="row">
							<div class="col-md-5">
								<img class="img-thumbnail img-responsive mb-lg" alt="" src="{{ asset('porto/img/hardware/hp-envy.jpg')}}">
							</div>

							<div class="col-md-7">

								<h4 class="heading-primary mb-sm">Project <strong>Description</strong></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elit mattis adipiscing. Fusce in hendrerit purus. Suspendisse potenti. Proin quis eros odio, dapibus dictum mauris.</p>

								<a href="#" class="btn btn-primary">Live Preview</a> <span class="arrow hlb"></span>

								<hr class="solid tall">

								<h4 class="heading-primary mt-lg">Services</h4>

								<ul class="list list-icons">
									<li><i class="fa fa-check"></i> Design</li>
									<li><i class="fa fa-check"></i> HTML/CSS</li>
									<li><i class="fa fa-check"></i> Javascript</li>
								</ul>

							</div>
						</div>
					</div>

					<div class="owl-carousel owl-theme mb-none" data-plugin-options='{"items": 4, "margin": 20, "loop": false}'>

						<div>
							<a href="#popupProject" data-plugin-lightbox data-plugin-options='{"type": "inline", preloader: false}'>
								<span class="thumb-info">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('porto/img/hardware/hp-envy2.jpg')}}" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">SEO</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
						<div>
							<a href="#popupProject" data-plugin-lightbox data-plugin-options='{"type": "inline", preloader: false}'>
								<span class="thumb-info">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('porto/img/hardware/elite-desk.jpg')}}" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">OKLER</span>
											<span class="thumb-info-type">Brand</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
						<div>
							<a href="#popupProject" data-plugin-lightbox data-plugin-options='{"type": "inline", preloader: false}'>
								<span class="thumb-info">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('porto/img/hardware/hp-prolian.jpg')}}" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">The Fly</span>
											<span class="thumb-info-type">Logo</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
						<div>
							<a href="#popupProject" data-plugin-lightbox data-plugin-options='{"type": "inline", preloader: false}'>
								<span class="thumb-info">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('porto/img/hardware/ups.jpg')}}" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">The Code</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
						<div>
							<a href="#popupProject" data-plugin-lightbox data-plugin-options='{"type": "inline", preloader: false}'>
								<span class="thumb-info">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('porto/img/hardware/dell-inspirion.jpg')}}" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">House</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
						<div>
							<a href="#popupProject" data-plugin-lightbox data-plugin-options='{"type": "inline", preloader: false}'>
								<span class="thumb-info">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('porto/img/hardware/hp-envy.jpg')}}" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Music</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>

					</div>
				</div>
			</div>

			<h2 class="mt-xl">Arrendamiento de <strong>Equipos</strong> </h2>

			<section class="section section-no-background section-no-border mt-none" id="features">

				<div class="container">

					<div class="row mt-xl">
						<div class="col-md-4">
							<div class="feature-box feature-box-tertiary feature-box-style-5">
								<div class="feature-box-icon">
									<i class="icon-trophy icons"></i>
								</div>
								<div class="feature-box-info">

									<h4 class="mb-sm">Renta desde 3 meses hasta 3 años.</h4>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="feature-box feature-box-tertiary feature-box-style-5">
								<div class="feature-box-icon">
									<i class="icon-speedometer icons"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-sm">Soluciones Integrales de renta.</h4>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="feature-box feature-box-tertiary feature-box-style-5">
								<div class="feature-box-icon">
									<i class="icon-cloud-upload icons"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-sm">Tecnología de acuerdo a sus necesidades.</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		</div>

	</section>

</div>

<hr class="tall">
		
@endsection		