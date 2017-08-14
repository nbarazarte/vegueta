@extends('porto.app')

@section('content')

	<div role="main" class="main">

		@include('porto.slider')


				<div class="home-intro" id="home-intro">
					<div class="container">

						<div class="row">
							<div class="col-md-8">
								<p>
									Confíenos la gestión de la <em style="color: #00a69c">tecnología</em> de su empresa
									<span> usted el requerimiento, nosotros la solución</span>
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

		<section  id="home">

			<div class="container">

				<div class="container">

					<div class="row center mt-md">
						<div class="col-md-12">
							<h1 class="mb-sm word-rotator-title">
							<br>
								Todo en
								<strong class="inverted ">
									<span class="word-rotate " data-plugin-options='{"delay": 2000, "animDelay": 300}'>
										<span class="word-rotate-items ">
											<span>Outosourcing TI</span>
											<span>Equipamiento</span>
											<span>Consultoría</span>
										</span>
									</span>
								</strong>
								
							</h1>

							<h2>Que Garantizará la Continuidad Operativa de su Organización.</h2>

							<hr class="tall mb-none">

							<br>

						</div>
					</div>

					<div class="row">

						<div class="col-md-8">
							
							<h2><strong style="color: #da5417">AXION TI</strong> Prevención con desarrollo tecnológico</h2>

							<p>Somos una marca con más de 12 años en el mercado venezolano en la industria de TI, con un enfoque de calidad de servicio preventivo apalancado en una <span class="alternative-font">plataforma tecnológica vanguardista</span> como lo es <strong>Kaseya</strong>, integrando soluciones tecnológicas que agrega valor a sus clientes a través de servicios de consultoría, comercialización de equipos y diseñando el servicio de outsourcing que se adapta a las necesidades de su organización.</p>
							<p>Con un equipo humano especializado de muy alto nivel y flexible para ajustarse al retador entorno geográfico.</p>


						</div>
						<div class="col-md-4">
							<img class="pull-right img-responsive " src="smarty/assets/images/lideres.png" alt="" >
						</div>

					</div>

				</div>

				<div class="container">

					<div class="row">
						<div class="col-md-12">
							
							<h2>Nuestro <strong style="color: #da5417">Norte</strong></h2>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">

							<ul class="history">
								<li class="appear-animation" data-appear-animation="fadeInUp">
									<div class="thumb">
										<img src="porto/img/mision.jpg" alt="" />
									</div>
									<div class="featured-box">
										<div class="box-content">
											<h5 class="heading-primary"><strong>MISIÓN</strong></h5>
											<p>Contribuir proactivamente el mejor servicio y velando por el bienestar de la organización de nuestros clientes a través de soluciones acertadas para alcanzar sus objetivos de negocio.</p>
										</div>
									</div>
								</li>
								<li class="appear-animation" data-appear-animation="fadeInUp">
									<div class="thumb">
										<img src="porto/img/vision.jpg" alt="" />
									</div>
									<div class="featured-box">
										<div class="box-content">
											<h5 class="heading-primary"><strong>VISIÓN</strong></h5>
											<p>Consolidar nuestros servicios profesionales TIC de clase mundial y orientada al cliente especializado en consultoría de proyectos, servicios de outsourcing, licenciamiento Kaseya, comercialización y suministro de equipos, que serán soluciones integradas a la medida del cliente (Venezuela) y reconocida entregando servicios TIC (Panamá)
											</p>

										</div>

									</div>
								</li>
								<li class="appear-animation" data-appear-animation="fadeInUp">
									<div class="thumb">
										<img src="porto/img/valores.jpg" alt="" />
									</div>
									<div class="featured-box">
										<div class="box-content">
											<h5 class="heading-primary"><strong>VALORES</strong></h5>
													
											<div class="row">
												<div class="col-sm-6">
													<div class="feature-box">
														<div class="feature-box-icon">
															<i class="fa fa-hand-peace-o" aria-hidden="true"></i>
														</div>
														<div class="feature-box-info">
															<h4 class="heading-primary mb-none">Ética</h4>
															<p class="tall"></p>
														</div>
													</div>
													<div class="feature-box">
														<div class="feature-box-icon">
															<i class="fa fa-lightbulb-o" aria-hidden="true"></i>
														</div>
														<div class="feature-box-info">
															<h4 class="heading-primary mb-none">Creatividad</h4>
															<p class="tall"></p>
														</div>
													</div>
													<div class="feature-box">
														<div class="feature-box-icon">
															<i class="fa fa-trophy" aria-hidden="true"></i>
														</div>
														<div class="feature-box-info">
															<h4 class="heading-primary mb-none">Valor por nuestro cliente</h4>
															<p class="tall"></p>
														</div>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="feature-box">
														<div class="feature-box-icon">
															<i class="fa fa-line-chart" aria-hidden="true"></i>
														</div>
														<div class="feature-box-info">
															<h4 class="heading-primary mb-none">Orientación a resultados</h4>
															<p class="tall"></p>
														</div>
													</div>
													<div class="feature-box">
														<div class="feature-box-icon">
															<i class="fa fa-handshake-o" aria-hidden="true"></i>
														</div>
														<div class="feature-box-info">
															<h4 class="heading-primary mb-none">Compromiso</h4>
															<p class="tall"></p>
														</div>
													</div>
													<div class="feature-box">
														<div class="feature-box-icon">
															<i class="fa fa-cogs" aria-hidden="true"></i>
														</div>
														<div class="feature-box-info">
															<h4 class="heading-primary mb-none">Integración</h4>
															<p class="tall"></p>
														</div>
													</div>
												</div>
											</div>

										</div>

									</div>
						
								</li>

							</ul>

						</div>

					</div>
					
				</div>



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

			<section class="" id="porqueelegirnos">

				<div class="container">

					<div class="row">
						<div class="col-md-12">
							<h2>¿POR QUÉ  <strong style="color: #da5417">ELEGIRNOS?</strong></h2>
						</div>
					</div>

					<div class="row">

						<div class="col-md-4">
							<div class="feature-box feature-box-style-2 reverse mb-xl appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="300">
								<div class="feature-box-icon">
									<i class="fa fa-bolt"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-sm">Experiencia</h4>
									<p class="mb-lg">Hemos atendido con éxito mas de 85.000 incidentes.</p>
								</div>
							</div>
							<div class="feature-box feature-box-style-2 reverse mt-xl appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="600">
								<div class="feature-box-icon">
									 <i class="ka ka-kaseyalogo-bugonly" aria-hidden="true" style="font-size: 28px"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-sm">Kaseya</h4>
									<p class="mb-lg"> Somos pioneros y los únicos representantes en Venezuela.</p>
								</div>
							</div>
							<div class="feature-box feature-box-style-2 reverse mt-xl appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="600">
								<div class="feature-box-icon">
									<i class="fa fa-tachometer" aria-hidden="true"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-sm">Trayectoria</h4>
									<p class="mb-lg"> Poseemos mas de 10 años de experiencia en tecnología.</p>
								</div>
							</div>

						</div>

						<div class="col-md-4">

							<img src="smarty/assets/images/ofrecemos.png" class="img-responsive mockup-landing-page mb-xl appear-animation" alt="que ofrecemos" data-appear-animation="fadeInDown" data-appear-animation-delay="300">

							<div class="feature-box feature-box-style-2 reverse mt-xl appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="600">
								<div class="feature-box-icon">
									<i class="fa fa-link" aria-hidden="true"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-sm">Conexión</h4>
									<p class="mb-lg"> Capacidad de brindar soporte remoto y en tiempo real de forma segura.</p>
								</div>
							</div>

						</div>

						<div class="col-md-4">
							<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="300">
								<div class="feature-box-icon">
									<i class="fa fa-users" aria-hidden="true"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-sm">Talento Humano</h4>
									<p class="mb-lg">Disponemos de ingenieros cualificados y certificados.</p>
								</div>
							</div>
							<div class="feature-box feature-box-style-2 mt-xl appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="600">
								<div class="feature-box-icon">
									<i class="fa fa-building" aria-hidden="true"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-sm">Infraestructura</h4>
									<p class="mb-lg">Contamos con infraestructura física y robusta.</p>
								</div>
							</div>
							<div class="feature-box feature-box-style-2 mt-xl appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="600">
								<div class="feature-box-icon">
									<i class="fa fa-address-card" aria-hidden="true"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-sm">Especialistas</h4>
									<p class="mb-lg">En las industrias de turismo, servicio, industrial, retail, ingeniería, y contrucción tecnológica, manufactura y laboratorio.</p>
								</div>
							</div>

						</div>

					</div>

				</div>

			</section>



			@include('porto.equipo')


	</div>
		

@endsection		