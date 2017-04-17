				<!-- TOP NAV -->
				<header id="topNav">

					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- Logo -->
						<a class="logo pull-left" href="{{ route('home')}}">							
							<img src="{{ asset('smarty/assets/images/top2.png') }}" alt="logo axionti" title="axionti" />		
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
										
											<a href="#slider">
												AXIONTI
											</a>

										@else

											<a href="{{route('home')}}">
												AXIONTI
											</a>
										
										@endif

									</li>

									<li><!-- FEATURES -->

										@if(Route::current()->getName() == 'home')
										
											<a href="#comercializacion">
												COMERCIALIZACIÓN Y SUMINISTROS
											</a>

										@else

											<a href="http://localhost:8001#comercializacion">
												COMERCIALIZACIÓN Y SUMINISTROS
											</a>
										
										@endif

									</li>

									<li><!-- FEATURES -->

										@if(Route::current()->getName() == 'home')
										
											<a href="#proyectos">
												PROYECTOS
											</a>
										@else

											<a href="http://localhost:8001#proyectos">
												PROYECTOS
											</a>
										
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