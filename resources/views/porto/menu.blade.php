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
										
										<img alt="logo axionti" title="AXIONTI" clas="img-responsive" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="{{ asset('porto/img/logoaxionti.png') }}">
										
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
											<li class="social-icons-facebook"><a href="https://www.facebook.com/axionti/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
											<li class="social-icons-twitter"><a href="https://twitter.com/search?q=%40axionti&src=typd" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="https://www.linkedin.com/company-beta/2228496/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
										</ul>
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1 collapse">
											<nav>
												<ul class="nav nav-pills" id="mainNav">
													
													<li>
														<a href="{{ route('home')}}" style="color: #da5417">
															AXION TI
														</a>
													</li>

													<li class="dropdown">
														<a data-hash  class="dropdown-toggle" href="#" style="color: #da5417">
															Soluciones
														</a>
														<ul class="dropdown-menu">
															<li><a href="{{ route('servicios')}}" style="color: #da5417">Servicios</a></li>
															<li><a href="{{ route('proyectos')}}" style="color: #da5417">Proyectos</a></li>
														</ul>
													</li>

													<li>
														<a href="{{ route('casosExito')}}" style="color: #da5417">Casos de Éxito</a>
													</li>
													<li>
														<a href="{{ route('trabaja')}}" style="color: #da5417">Empleo AXIONTI</a>
													</li>
													<li>
														<a href="{{ route('contacto')}}" style="color: #da5417">Contáctanos</a>
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