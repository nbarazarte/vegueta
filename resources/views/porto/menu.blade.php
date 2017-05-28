			@if(Route::current()->getName() == 'home')

				<header id="header" class="header-narrow header-transparent" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 1, "stickySetTop": "1"}'>

			@else
			
				<header id="header" class="header-narrow" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 0, "stickySetTop": "0"}'>
			
			@endif

				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="{{ route('home') }}">
										
										<img alt="logo axionti" title="AXIONTI" clas="img-responsive" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="{{ asset('smarty/assets/images/logoaxionti.jpg') }}">
										
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									<div class="header-nav header-nav-top-line">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										<ul class="header-social-icons social-icons hidden-xs">
											<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
											<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
										</ul>
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1 collapse">
											<nav>
												<ul class="nav nav-pills" id="mainNav">
													



												@if(Route::current()->getName() == 'home')

													<li class="dropdown">
														<a data-hash class="dropdown-toggle" href="#">
															Inicio
														</a>
														<ul class="dropdown-menu">
															<li><a data-hash data-hash-offset="70" href="#home">AXIONTI</a></li>
															<li><a data-hash data-hash-offset="70" href="#porqueelegirnos">¿Por qué elegirnos?</a></li>
															<li><a data-hash data-hash-offset="70" href="#equipo">Equipo AXIONTI</a></li>
														</ul>
													</li>

												@else

													<li class="dropdown">
														<a data-hash class="dropdown-toggle" href="{{ route('home')}}">
															Inicio
														</a>
														<ul class="dropdown-menu">
															<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}:8001/Inicio#home">AXIONTI</a></li>
															<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}:8001/Inicio#porqueelegirnos">¿Por qué elegirnos?</a></li>
															<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}:8001/Inicio#equipo">Equipo AXIONTI</a></li>
														</ul>
													</li>

												@endif

												@if(Route::current()->getName() == 'home')

													<li class="dropdown">
														<a data-hash class="dropdown-toggle" href="{{ route('soluciones')}}">
															Soluciones
														</a>
														<ul class="dropdown-menu">
															<li><a href="http://{{ $_SERVER['SERVER_NAME'] }}:8001/Inicio/Soluciones#servicios">Servicios</a></li>
															<li><a href="#">Proyectos</a></li>
															<li><a href="#">Equipo AXIONTI</a></li>
														</ul>
													</li>

												@else

													<li class="dropdown">
														<a data-hash class="dropdown-toggle" href="{{ route('soluciones')}}">
															Soluciones
														</a>
														<ul class="dropdown-menu">
															<li><a data-hash data-hash-offset="70"  href="#servicios">Servicios</a></li>
															<li><a data-hash data-hash-offset="70"  href="#nuestrassoluciones">Nuestras Soluciones</a></li>
															<li><a data-hash data-hash-offset="70"  href="#proyectos">Proyectos</a></li>
															
														</ul>
													</li>

												@endif





													<li>
														<a data-hash data-hash-offset="70" href="#">Features</a>
													</li>
													<li>
														<a data-hash data-hash-offset="70" href="#">Meet the Team</a>
													</li>
													<li>
														<a data-hash data-hash-offset="70" href="#">Contact Us</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>