@extends('porto.app')

@section('content')

<div role="main" class="main">

	<section id="casos" class="page-header page-header-custom-background" style="background-image: url({{ asset('porto/img/custom-header-bg.jpg') }});">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Casos de <strong style="color: #FFA500">Éxito</strong>  <span>Consolidar y optimizar la plataforma tecnológica es clave para el negocio.</span></h1>
					<ul class="breadcrumb breadcrumb-valign-mid">
						<li><a href="{{ route('home')}}">Inicio</a></li>
						<li class="active">Casos de Éxito</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section id="">
		<div class="container">
			<div class="row mt-xlg">
				<div class="col-md-12">

					<p>
						
						En AXIONTI, nos diferenciamos por nuestra capacidad de ofrecer el servicio de manera integral, incluyendo la definición de la estrategia, el diseño, la construcción y la operación del mismo. Aplicamos técnicas y metodologías de <span class="alternative-font">clase mundial</span> e integramos nuestra experiencia certificada, en tecnologías innovadoras que garantizan la consecución de los objetivos del negocio.								
					</p>

				</div>
			</div>



		</div>

	</section>


				<section class="video section section-text-light section-video section-center mt-none" data-video-path="porto/video/dark" data-plugin-video-background data-plugin-options='{"posterType": "jpg", "position": "50% 50%", "overlay": true}'>
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="owl-carousel owl-theme nav-bottom rounded-nav mt-lg mb-none" data-plugin-options='{"items": 1, "loop": false}'>
									<div>
										<div class="col-md-12">
											<div class="testimonial testimonial-style-6 testimonial-with-quotes mb-none">
												<blockquote>
													<p>Tienen el conocimiento y la capacidad de responder a los requerimientos exigidos por la empresa en el momento que se requieren.</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong>Gisela Tinoco</strong><span>Directora General de Hippocampus Vacation Club</span></p>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="col-md-12">
											<div class="testimonial testimonial-style-6 testimonial-with-quotes mb-none">
												<blockquote>
													<p>Me siento muy satisfecho con el apoyo que AxionTI me ha brindado en todos los requerimientos que he tenido en el último año. A través del tiempo he venido notando proceso de mejora continua que queda evidenciado en la velocidad de atención a los casos.</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong>Carlos Toscano</strong><span>Director General de Cam Corporación American Minerals</span></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>




					</div>
				</section>	

<div class="container">
					<div class="row center">
						<div class="col-md-12">
							<h2 class="mb-none word-rotator-title mt-lg">
								Le garantizamos la
								<strong>
									<span class="word-rotate" data-plugin-options='{"delay": 3500, "animDelay": 400}'>
										<span class="word-rotate-items">
											<span>calidad</span>
											<span>excelencia</span>
										</span>
									</span>
								</strong>
								a todos nuestros clientes
							</h2>
							<p class="lead">Sus testimonios nos impulsan a seguir adelante.</p>
						</div>
					</div>
					<div class="row center mt-xl">
						<div class="owl-carousel owl-theme" data-plugin-options='{"items": 6, "autoplay": true, "autoplayTimeout": 3000}'>
							<div>
								<img class="img-responsive" src="{{ asset('porto/img/logos/hipocampus.jpg')}}" alt="">
							</div>
							<div>
								<img class="img-responsive" src="{{ asset('porto/img/logos/cam.png')}}" alt="">
							</div>

						</div>
					</div>
				</div>

				<section class="call-to-action call-to-action-default with-button-arrow call-to-action-in-footer">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="call-to-action-content">
									<h3>Confíenos la <strong>gestión</strong> de la tecnología en su empresa y le garantizamos el <strong>aumento</strong> de su productividad</h3>
									<p>Somos representantes autorizados de <strong>Kaseya</strong> en Venezuela</p>
								</div>
								<div class="call-to-action-btn">
									<a href="{{ route('contacto') }}" target="_blank" class="btn btn-lg btn-primary">Contáctanos</a><span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -87px; right: -80px;"></span>
								</div>
							</div>
						</div>
					</div>
				</section>



</div>
		
@endsection		