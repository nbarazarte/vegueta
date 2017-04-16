@extends('app')

@section('content')

<section id="" class="heading-title parallax parallax-2" style="background-image: url('smarty/assets/images/demo/1200x800/servidores.jpeg');">
	<div class="overlay dark-8"><!-- dark overlay [1 to 9 opacity] --></div>
				<div class="container">

					<div class="text-center">
						<h3 class="size-30">Mapa <span>del Sitio</span></h3>
						<p><strong style="color: #F47741; font-size: 20px"></strong>  <em><b></b></em></p>
					</div>

				</div>
			</section>
		





			<section>
				<div class="container">		



			<!-- -->
			<section>
				<div class="container">
					
					<div class="heading-title heading-border">
						<h3><span><span class="countTo" data-speed="2000">8</span>+</span> AXIONTI</h3>
						<p class="font-lato size-17">Nuestras páginas de interés</p>
					</div>

					<div class="row">

						<div class="col-md-4 col-sm-4">
							<ul class="list-unstyled href-reset">
								<li><a href="{{ route('home')}}">AXIONTI</a></li>
								<li><a href="http://www.axionti.com/#comercializacion">Comercialización y Suministros</a></li>
								<li><a href="http://www.axionti.com/#proyectos">Proyectos</a></li>
								
								
								<li><a href="http://www.axionti.com/#casos">Casos de Éxito</a></li>
								<li><a href="http://www.axionti.com/#contacto">Contáctanos</a></li>
								<li><a href="#">Soporte</a>
									<ul>
										<li><a href="{{ route('mapa')}}">Mapa del Sitio</a></li>
										<li><a href="{{ route('terminos')}}">Términos del Servicio</a></li>
										<li><a href="{{ route('politicas')}}">Políticas de Privacidad</a></li>	
									</ul>
								</li>								
							

							</ul>
						</div>

					</div>

				</div>
			</section>
			<!-- / -->


				</div>
			</section>
			<!-- / -->

@endsection					