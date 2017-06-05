			<div class="row">
				<div class="col-md-4">

					<img class="img-responsive mt-xl appear-animation" src="{{ asset('porto/img/logos_tecnologia.png')}}" alt="layout styles" data-appear-animation="fadeInLeft">

				</div>
				<div class="col-md-7 col-md-offset-1">

					<h2>Comercialización y <strong style="color: #FFA500">Suministros</strong></h2>

					<p class="">

						Nuestro compromiso es proveer a nuestros clientes una <span class="alternative-font">solución integral</span> apalancados en las mejores marcas del mercado y en la mejor calidad de servicio.

					</p>
				</div>
			</div>

			<div class="featured-boxes">

				<div class="row">

					<br>
					<h2 class="mt-xl" style="color: #FFA500"><strong>Software</strong> </h2>

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

			<h2 class="mt-xl" style="color: #FFA500"><strong>Hardware</strong> </h2>

			<div class="row">

				<div class="col-md-12">

					@foreach ($hardware as $equipo)

						<div id="{{ $equipo->idmodelo }}" class="popup-inline-content">
							<h2 class="mt-lg">{{ $equipo->marca }} - {{ $equipo->modelo }}</h2>

							<div class="row">
								<div class="col-md-5">

		                            <img src="data:image/jpeg;base64,{{ base64_encode($equipo->blb_img) }}" alt="{!! $equipo->modelo !!}" title="{!! $equipo->modelo !!}">

								</div>

								<div class="col-md-7">

									<h4 class="heading-primary mb-sm"><strong>Caracteristicas</strong></h4>

									<ul class="list list-icons">

										@foreach ($especificaciones as $detalle)
											
											@if($equipo->idmodelo == $detalle->idmodelo)

												<li><i class="fa fa-check"></i> {{ $detalle->caracteristica }}</li>

											@endif

										@endforeach
									</ul>

								</div>
							</div>
						</div>

					@endforeach

					<div class="owl-carousel owl-theme mb-none" data-plugin-options='{"items": 4, "margin": 20, "loop": false}'>

						@foreach ($hardware as $equipo)

							<div>
								<a href="#{{ $equipo->idmodelo }}" data-plugin-lightbox data-plugin-options='{"type": "inline", preloader: false}'>
									<span class="thumb-info">
										<span class="thumb-info-wrapper">
											<img src="data:image/jpeg;base64,{{ base64_encode($equipo->blb_img) }}" alt="{!! $equipo->modelo !!}" title="{!! $equipo->modelo !!}" class="img-responsive">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">{{ $equipo->modelo }}</span>
												<span class="thumb-info-type">{{ $equipo->marca }}</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>

						@endforeach


					</div>
				</div>
			</div>

			<h2 class="mt-xl">Arrendamiento de <strong style="color: #FFA500">Equipos</strong> </h2>			

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





				<div class="container">
					<div class="row">
						<div class="col-md-12 center">
							<h2 class="heading-dark mt-xl">Nuestros <strong>Planes</strong></h2>
							<p>Nuestros planes pueden ser en dólares o moneda nacional. <br>
							Con plazos de 12 a 36 meses.</p>

							<h2 class="heading-dark mt-xl">Arrendamiento de equipos de <strong>cómputo</strong></h2>

						</div>
					</div>
					<div class="row mb-xl pb-lg">

						<div class="pricing-table princig-table-flat">
							<div class="col-md-3 col-sm-6">
								<div class="plan">
									<h3><span>Diamante</span></h3>
									<ul class="list list-icons list-secondary">
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Usted tiene la opción de comprar el equipo al finalizar el contrato</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Alquiler del equipos por tiempo limitado</li>	
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Instalación del agente Kaseya</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Entrega del inventario en tiempo record</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> El equipo le pertenece a la arrendadora</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Usted sólo paga la renta correspondiente</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Mantenimiento preventivo del equipo</li>
										<li><a class="btn btn-default" href="#">Comenzar</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 center">
								<div class="plan most-popular">
									<h3><em class="desc"></em><span>Oro</span></h3>
									<ul class="list list-icons list-secondary">
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Alquiler del equipos por tiempo limitado</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Instalación del agente Kaseya</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Entrega del inventario en tiempo record</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> El equipo le pertenece a la arrendadora</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Usted sólo paga la renta correspondiente</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Mantenimiento preventivo del equipo</li>
										<li><a class="btn btn-primary" href="#">Comenzar</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="plan">
									<h3><span>Plata</span></h3>
									<ul class="list list-icons list-secondary">
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Alquiler del equipos por tiempo limitado</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Instalación del agente Kaseya</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Entrega del inventario en tiempo record</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> El equipo le pertenece a la arrendadora</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Usted sólo paga la renta correspondiente</li>
										<li><a class="btn btn-default" href="#">Comenzar</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="plan">
									<h3><span>Bronce</span></h3>
									<ul class="list list-icons list-secondary">
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Alquiler del equipos por tiempo limitado</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> El equipo le pertenece a la arrendadora</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Usted sólo paga la renta correspondiente</li>
										<li><a class="btn btn-default" href="#">Comenzar</a></li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>



				<div class="container">
					<div class="row">
						<div class="col-md-12 center">

							<h2 class="heading-dark mt-xl">Arrendamiento de <strong>impresoras</strong></h2>

						</div>
					</div>
					<div class="row mb-xl pb-lg">

						<div class="pricing-table princig-table-flat">
							<div class="col-md-3 col-sm-6">
								<div class="plan">
									<h3><span>Diamante</span></h3>
									<ul class="list list-icons list-secondary">
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Usted tiene la opción de comprar el equipo al finalizar el contrato</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Alquiler del equipos por tiempo limitado</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> El equipo le pertenece a la arrendadora</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Usted sólo paga la renta correspondiente</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Entrega de suministros: papel y toner</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Mantenimiento preventivo del equipo</li>
										<li><a class="btn btn-default" href="#">Comenzar</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 center">
								<div class="plan most-popular">
									<h3><em class="desc"></em><span>Oro</span></h3>
									<ul class="list list-icons list-secondary">
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Alquiler del equipos por tiempo limitado</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> El equipo le pertenece a la arrendadora</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Usted sólo paga la renta correspondiente</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Entrega de suministros: papel y toner</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Mantenimiento preventivo del equipo</li>
										<li><a class="btn btn-primary" href="#">Comenzar</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="plan">
									<h3><span>Plata</span></h3>
									<ul class="list list-icons list-secondary">
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Alquiler del equipos por tiempo limitado</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> El equipo le pertenece a la arrendadora</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Usted sólo paga la renta correspondiente</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Entrega de suministros: papel y toner</li>
										<li><a class="btn btn-default" href="#">Comenzar</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="plan">
									<h3><span>Bronce</span></h3>
									<ul class="list list-icons list-secondary">
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Alquiler del equipos por tiempo limitado</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> El equipo le pertenece a la arrendadora</li>
										<li><strong><i class="fa fa-check" aria-hidden="true"></i></strong> Usted sólo paga la renta correspondiente</li>
										<li><a class="btn btn-default" href="#">Comenzar</a></li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>


			