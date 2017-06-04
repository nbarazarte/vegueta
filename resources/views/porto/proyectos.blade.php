@extends('porto.app')

@section('content')

<div role="main" class="main">

@include('porto.sliderProyectos')


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


<div class="container">

					<div class="row center">
						<div class="col-md-12">
							<h2 class="mb-sm word-rotator-title">
								Nos diferenciamos por nuestra capacidad de <strong style="color: #FFA500"> ofrecer el servicio</strong> de manera integral
							</h2>
							<p class="lead">
								incluyendo la definición de la estrategia, el diseño, la construcción y la operación del mismo.
							</p>
						</div>
					</div>








				</div>



				<section class="section" style="background-image: url('porto/img/ventas.png');">
					<div class="container">


					<div class="row">
						<div class="col-md-12">
							<h2>¿QUÉ  <strong style="color: #FFA500">OFRECEMOS?</strong></h2>
						</div>
					</div>

						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-4">
										<div class="feature-box feature-box-style-2">
											<div class="feature-box-icon">
												<i class="fa fa-group"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-none">Voz & Aplicacion</h4>
												<p class="tall">
													
													<ul class="list list-icons list-secondary">
														<li><i class="fa fa-check"></i> Virtualizacón</li>
														<li><i class="fa fa-check"></i> Telefonía IP.</li>
														<li><i class="fa fa-check"></i> Contact Center</li>
													</ul>

												</p>
											</div>
										</div>
										<div class="feature-box feature-box-style-2">
											<div class="feature-box-icon">
												<i class="fa fa-file"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-none">Infraestructura IT</h4>
												<p class="tall">
													
													<ul class="list list-icons list-secondary">
														<li><i class="fa fa-check"></i> Cableado Estructurado</li>
														<li><i class="fa fa-check"></i> Desktop, servidores y laptos.</li>
													</ul>

												</p>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="feature-box feature-box-style-2">
											<div class="feature-box-icon">
												<i class="fa fa-film"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-none">Conectividad y optimización</h4>
												<p class="tall">
													
													<ul class="list list-icons list-secondary">
														<li><i class="fa fa-check"></i> Routers & Switching </li>
														<li><i class="fa fa-check"></i> Auditoría LAN / WAN</li>
														<li><i class="fa fa-check"></i> Proxy</li>
													</ul>

												</p>
											</div>
										</div>
										<div class="feature-box feature-box-style-2">
											<div class="feature-box-icon">
												<i class="fa fa-check"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-none">Seguridad</h4>
												<p class="tall">
													
													<ul class="list list-icons list-secondary">
														<li><i class="fa fa-check"></i> Circuito Cerrado de Cámaras </li>
														<li><i class="fa fa-check"></i> Control de Acceso</li>
														<li><i class="fa fa-check"></i> Firewall</li>
													</ul>

												</p>
											</div>
										</div>
									</div>
									<div class="col-md-4">

										<img class="img-responsive mt-xl appear-animation" src="{{ asset('porto/img/vendedor.png') }}" alt="" data-appear-animation="fadeInLeft">

									</div>
								</div>
							</div>
						</div>
					</div>
				</section>



	<section id="proyectos">
		<div class="container">

			<div class="row center">
				<div class="col-md-12">
					<h2 class="mb-sm word-rotator-title">
						Aplicamos técnicas y metodologías de clase <span class="alternative-font">mundial</span> e integramos nuestra experiencia <strong style="color: #FFA500"> </strong>
					</h2>
					<p class="lead">
						certificada en tecnologías innovadoras que garantizan la consecución de los objetivos del negocio.					
					</p>
				</div>
			</div>

			<section>

				<div class="container">

					<div class="row center mt-md">
						<div class="col-md-12">
							<h1 class="mb-sm word-rotator-title">
							<br>
								La calidad es 
								<strong class="inverted ">
									<span class="word-rotate " data-plugin-options='{"delay": 2000, "animDelay": 300}'>
										<span class="word-rotate-items ">
											<span>nuestro objetivo</span>
											<span>lo que nos diferencia</span>
										</span>
									</span>
								</strong>
								
							</h1>

						</div>
					</div>

					<!-- 
						controlls-over		= navigation buttons over the image 
						buttons-autohide 	= navigation buttons visible on mouse hover only
						
						data-plugin-options:
							"singleItem": true
							"autoPlay": true (or ms. eg: 4000)
							"navigation": true
							"pagination": true
							"items": "4"

						owl-carousel item paddings
							.owl-padding-0
							.owl-padding-3
							.owl-padding-6
							.owl-padding-10
							.owl-padding-15
							.owl-padding-20
					-->



					<div class="row">
						<div class="col-md-12">
							<h2>Proyectos  <strong style="color: #FFA500">Realizados</strong></h2>
						</div>
					</div>

					<div class="owl-carousel owl-padding-10 buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items":"4", "autoPlay": 4000, "navigation": true, "pagination": false}'>
						<div class="img-hover">
							<a href="#">
								<img class="img-responsive thumbnail" src="{{ asset('smarty/assets/images/img_proyectos/1.png')}}" alt="">
							</a>

							<h4 class="text-left margin-top-20"><a href="#">Fortinet</a></h4>
							
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i> 
									Febrero 2016
								</li>

							</ul>
						</div>
						<div class="img-hover">
							<a href="#">
								<img class="img-responsive thumbnail" src="{{ asset('smarty/assets/images/img_proyectos/6.png')}}" alt="">
							</a>

							<h4 class="text-left margin-top-20"><a href="#">Central Telefónica</a></h4>
							
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i> 
									Diciembre 2016
								</li>

							</ul>
						</div>
						<div class="img-hover">
							<a href="#">
								<img class="img-responsive thumbnail" src="{{ asset('smarty/assets/images/img_proyectos/7.png')}}" alt="">
							</a>

							<h4 class="text-left margin-top-20"><a href="#">Backup (Nass /Google Drive)</a></h4>
							
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i> 
									Diciembre 2016
								</li>

							</ul>
						</div>
						<div class="img-hover">
							<a href="#">
								<img class="img-responsive thumbnail" src="{{ asset('smarty/assets/images/img_proyectos/10.png')}}" alt="">
							</a>

							<h4 class="text-left margin-top-20"><a href="#">Monitor Tecnológico</a></h4>
							
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i> 
									Abril 2016
								</li>

							</ul>
						</div>
						<div class="img-hover">
							<a href="#">
								<img class="img-responsive thumbnail" src="{{ asset('smarty/assets/images/img_proyectos/4.png')}}" alt="">
							</a>
							<h4 class="text-left margin-top-20"><a href="#">Fireware Watchguard</a></h4>
							
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i> 
									Diciembre 2015
								</li>

							</ul>
						</div>
						<div class="img-hover">
							<a href="#">
								<img class="img-responsive thumbnail" src="{{ asset('smarty/assets/images/img_proyectos/3.png')}}" alt="">
							</a>
							<h4 class="text-left margin-top-20"><a href="#">Migración a Office 365</a></h4>
							
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i> 
									Octubre 2015
								</li>

							</ul>
						</div>
						<div class="img-hover">
							<a href="#">
								<img class="img-responsive thumbnail" src="{{ asset('smarty/assets/images/img_proyectos/5.png')}}" alt="">
							</a>
							<h4 class="text-left margin-top-20"><a href="#">Migración a la Azure</a></h4>
							
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i> 
									Octubre 2016
								</li>

							</ul>
						</div>

					</div>

				</div>

			</section>

		</div>

	</section>

<hr class="tall">

</div>
		
@endsection		