				<!-- TOP NAV -->
				<header id="topNav">

					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- Logo -->
						<a class="logo pull-left" href="{{ route('home')}}">							
							<img clas="img-responsive" src="{{ asset('smarty/assets/images/top2.png') }}" alt="logo axionti" title="axionti" />		
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

										@if(Route::current()->getName() == 'home')
										
											<a class="dropdown-toggle" href="#slider">
												AXIONTI
											</a>

											<ul class="dropdown-menu">
												<li class="dropdown">
													<a class="" href="#mision">
														Misión
													</a>
												</li>
												<li class="dropdown">
													<a class="" href="#vision">
														Visión
													</a>
												</li>
												<li class="dropdown">
													<a class="" href="#valores">
														Valores
													</a>
												</li>
												<li class="dropdown">
													<a class="" href="#porqueaxion">
														¿Por qué AXIONTI?
													</a>
												</li>
												<li class="dropdown">
													<a class="" href="#equipo">
														Equipo AXIONTI
													</a>
												</li>																								
											</ul>

										@else

											<a class="dropdown-toggle" href="{{route('home')}}">
												AXIONTI
											</a>

											<ul class="dropdown-menu">
												<li class="dropdown">
													<a class="" href="http://localhost:8001##mision">
														Misión
													</a>
												</li>
												<li class="dropdown">
													<a class="" href="http://localhost:8001##vision">
														Visión
													</a>
												</li>
												<li class="dropdown">
													<a class="" href="http://localhost:8001##valores">
														Valores
													</a>
												</li>
												<li class="dropdown">
													<a class="" href="http://localhost:8001##porqueaxion">
														¿Por qué AXIONTI?
													</a>
												</li>
												<li class="dropdown">
													<a class="" href="http://localhost:8001##equipo">
														Equipo AXIONTI
													</a>
												</li>																																					
											</ul>
										
										@endif

									</li>

									<li><!-- FEATURES -->

										@if(Route::current()->getName() == 'home')
										
											<a class="dropdown-toggle" href="#solucionesppal">
												SOLUCIONES
											</a>

											<ul class="dropdown-menu">
												<li class="dropdown">
													<a class="" href="#servicios">
														Servicios
													</a>
												</li>
												<li class="dropdown">
													<a class="" href="#soluciones">
														Soluciones
													</a>
												</li>												

												<li class="dropdown">
													<a class="" href="#proyectos">
														Proyectos
													</a>
												</li>																									
											</ul>

										@else

											<a class="dropdown-toggle" href="http://localhost:8001#solucionesppal">
												SOLUCIONES
											</a>

											<ul class="dropdown-menu">
												<li class="dropdown">
													<a class="" href="http://localhost:8001#servicios">
														Servicios
													</a>
												</li>
												<li class="dropdown">
													<a class="" href="http://localhost:8001#soluciones">
														Soluciones
													</a>
												</li>												
												<li class="dropdown">
													<a class="" href="http://localhost:8001#comercializacion">
														Comercialización y Suministros
													</a>
												</li>
												<li class="dropdown">
													<a class="" href="http://localhost:8001#arrendamiento">
														Arrendamientos de Equipos
													</a>
												</li>
												<li class="dropdown">
													<a class="" href="http://localhost:8001#proyectos">
														Proyectos
													</a>
												</li>																									
											</ul>
										
										@endif

									</li>

									<li>

										@if(Route::current()->getName() == 'home')
										
											<a href="#casos">
												CASOS DE ÉXITO
											</a>

										@else

											<a href="http://localhost:8001#casos">
												CASOS DE ÉXITO
											</a>
										
										@endif

									</li>

									<li><!-- FEATURES -->

										@if(Route::current()->getName() == 'home')
										
											<a href="#empleo">
												EMPLEO AXION
											</a>
										@else

											<a href="http://localhost:8001#empleo">
												EMPLEO AXION
											</a>
										
										@endif

									</li>									

									<li>

										@if(Route::current()->getName() == 'home')
										
											<a href="#contacto">
												CONTÁCTANOS
											</a>
											
										@else

											<a href="http://localhost:8001#contacto">
												CONTÁCTANOS
											</a>
										
										@endif

									</li>																		
	
								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->