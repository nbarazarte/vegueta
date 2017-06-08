@extends('porto.app')

@section('content')

<div role="main" class="main">




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
									<div>
										<div class="col-md-12">
											<div class="testimonial testimonial-style-6 testimonial-with-quotes mb-none">
												<blockquote>
													<p>Nosotros en Ofilarco nos sentimos 100% satisfechos con el trabajo que ustedes en Axion TI no han realizado. Nuestras referencias siempres serán las mejores, ya que nos han hecho un trabajo de excelente calidad respetando los tiempos acordados. En el futuro esperamos contar con su valioso servicio.
													</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong>Maritza Aldana</strong><span>Gerente de Tecnología de la Información</span></p>
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


					<h2>Casos de <strong style="color: #da5417">Éxito</strong></h2>
					<p>
						Axion TI, apoyado en la plataforma de Administración y Gestión de TI (Kaseya) le provee y  afianza su labor en el área de tecnología logrando garantizar el buen desempeño de la plataforma y trasformando la anarquía que existía en la organización, logrando convertirlo en un departamento estratégico, planificado, automatizado y pasar de ser un soporte reactivo a preventivo. La plataforma empleado brinda  visibilidad y poder absolutos a su Depto. de TI, convirtiéndolo en un socio estratégico en la organización. Por tales, motivos el cliente HVC se vio obligada a buscar y encontrar una solución a su situación. Axion TI con esta herramienta integral le logro brindar a su cliente una resolución definitiva a sus problemas de TI.
						
						<br>

						<h4>Retos de Negocio solventados:</h4>

						<ul>
							<li>Capacidad de respuesta ante sus requerimientos, desde cualquier lugar y cualquier momento</li>
							<li>Menos interrupción al usuario</li>
							<li>Mantenimiento preventivo a sus equipos</li>
							<li>Inventario garantizado en tiempo real ( sin error humano)</li>
							<li>Auditoria</li>
							<li>Reportes en tiempo real</li>
							<li>Seguridad y backup para su plataforma</li>
							<li>Minimizando sus  riegos tecnológicos.</li>
						</ul>

						HVC con AXION TI logro solventar sus problemas de atención, vía remota y en tiempo real, con resultados comprobados de productividad, no solo para los usuarios, sino para todo el departamento.  Axion a través de kaseya nos brinda una visión  global  y garantizada de la empresa en el  mejor tiempo.
					</p>

					<div class="row center mt-xl">
						<div class="owl-carousel owl-theme" data-plugin-options='{"items": 6, "autoplay": true, "autoplayTimeout": 3000}'>
							

							<div>
								<img class="img-responsive" src="{{ asset('porto/img/logos/cestatiket.png')}}" alt="">
							</div>	

							<div>
								<img class="img-responsive" src="{{ asset('porto/img/logos/otepi.jpg')}}" alt="">
							</div>
							
							<div>
								<img class="img-responsive" src="{{ asset('porto/img/logos/roche.png')}}" alt="">
							</div>
							
							<div>
								<img class="img-responsive" src="{{ asset('porto/img/logos/zoom.jpg')}}" alt="">
							</div>

							<div>
								<img class="img-responsive" src="{{ asset('porto/img/logos/cam.png')}}" alt="">
							</div>
							
							<div>
								<img class="img-responsive" src="{{ asset('porto/img/logos/hipocampus.jpg')}}" alt="">
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