<footer id="footer" >
				<div class="container" >

					<div class="row" style="text-align: center;">
						
						<div class="col-md-3">
							<!-- Footer Logo -->
							
							<ul class="list-unstyled">
								<li>

									<a href="http://www.axionti.com" target="">
										<img class="img-responsive" src="{{ asset('smarty/assets/images/top2.png') }}" alt="logo axionti" title="www.axionti.com" style="width: 100%" />	
									</a>

								</li>

								<li>El nombre y logo de AXIONTI son marcas registradas.</li>
								
							</ul>

						</div>

						<div class="col-md-3">
							<!-- Links -->
							<h4 class="letter-spacing-1">Soporte</h4>
							<ul class="footer-links list-unstyled">
								<li><a href="{{ route('mapa')}}">Mapa del Sitio</a></li>
								<li><a href="{{ route('terminos') }}">Términos del Servicio</a></li>
								<li><a href="{{ route('politicas')}}">Políticas de Privacidad</a></li>

							</ul>
							<!-- /Links -->
						</div>

						<div class="col-md-3">
							<!-- Links -->
							<h4 class="letter-spacing-1">Newsletter</h4>

								<form class="validate" action="smarty/php/newsletter.php" method="post" data-success="¡Gracias por suscribirse!" data-toastr-position="top-right" >

									
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
										<input type="email" id="email" name="email" class="form-control required" placeholder="Correo Electrónico">
										<input type="text" id="nombre" name="nombre" class="form-control required" placeholder="Nombre y Apellido">
										<span class="input-group-addon">
											<button class="btn btn-primary" type="submit"><i class="fa fa-send"></i></button>
										</span>
									</div>
									
								</form>

							<!-- /Links -->
						</div>

						<div class="col-md-3">

							<ul class="list-unstyled">
								<li>

									<a href="http://www.monitorbg.com" target="_blank">
										<img class="img-responsive" src="{{ asset('smarty/assets/images/bg.png') }}" alt="logo bg" title="www.monitorbg.com" style="width: 100%" />	
									</a>

								</li>

								<li>Desarrollado por B&G  S.A. J-405498633</li>
								
							</ul>

						</div>

					</div>

				</div>

				<div class="copyright">
					<div class="container">
						<ul class="pull-right nomargin list-inline mobile-block">

							<li>
								
									<a href="https://www.facebook.com/ilernus/" target="_blank" class="social-icon social-icon-sm social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
										<i class="fa fa-facebook"></i>
										<i class="fa fa-facebook"></i>
									</a>

									<a href="https://twitter.com/ilernus" target="_blank" class="social-icon social-icon-sm social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
										<i class="fa fa-twitter"></i>
										<i class="fa fa-twitter"></i>
									</a>

									<a href="https://www.instagram.com/ilernus/" target="_blank" class="social-icon social-icon-sm social-instagram" style="background-color: #bc2a8d" data-toggle="tooltip" data-placement="top" title="Instagram">
										<i class="fa fa-instagram" aria-hidden="true"></i>
										<i class="fa fa-instagram" aria-hidden="true"></i>
									</a>

									<a href="https://www.linkedin.com/company/ilernus" target="_blank" class="social-icon social-icon-sm social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin">
										<i class="fa fa-linkedin"></i>
										<i class="fa fa-linkedin"></i>
									</a>

							</li>

						</ul>
						&copy; 2017 AXIONTI. Todos los derechos reservados.
					</div>
				</div>
			</footer>