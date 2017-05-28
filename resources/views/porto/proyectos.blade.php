@extends('porto.app')

@section('content')

<div role="main" class="main">

	<section id="soluciones" class="page-header page-header-custom-background" style="background-image: url({{ asset('porto/img/custom-header-bg.jpg') }});">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Proyectos <strong style="color: #FFA500">Realizados</strong>  <span>Consolidar y optimizar la plataforma tecnológica es clave para el negocio.</span></h1>
					<ul class="breadcrumb breadcrumb-valign-mid">
						<li><a href="{{ route('home')}}">Inicio</a></li>
						<li><a href="#">Soluciones</a></li>
						<li class="active">Proyectos</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section id="proyectos">
		<div class="container">
			<div class="row mt-xlg">
				<div class="col-md-12">

					<p>
						
						En AXIONTI, nos diferenciamos por nuestra capacidad de ofrecer el servicio de manera integral, incluyendo la definición de la estrategia, el diseño, la construcción y la operación del mismo. Aplicamos técnicas y metodologías de <span class="alternative-font">clase mundial</span> e integramos nuestra experiencia certificada, en tecnologías innovadoras que garantizan la consecución de los objetivos del negocio.								
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
					<div class="owl-carousel owl-padding-10 buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items":"4", "autoPlay": 4000, "navigation": true, "pagination": false}'>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive thumbnail" src="{{ asset('smarty/assets/images/img_proyectos/1.png')}}" alt="">
							</a>

							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Fortinet</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i> 
									Febrero 2016
								</li>

							</ul>
						</div>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive thumbnail" src="{{ asset('smarty/assets/images/img_proyectos/6.png')}}" alt="">
							</a>

							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Central Telefónica</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i> 
									Diciembre 2016
								</li>

							</ul>
						</div>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive thumbnail" src="{{ asset('smarty/assets/images/img_proyectos/7.png')}}" alt="">
							</a>

							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Backup (Nass /Google Drive)</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i> 
									Diciembre 2016
								</li>

							</ul>
						</div>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive thumbnail" src="{{ asset('smarty/assets/images/img_proyectos/10.png')}}" alt="">
							</a>

							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Monitor Tecnológico</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i> 
									Abril 2016
								</li>

							</ul>
						</div>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive thumbnail" src="{{ asset('smarty/assets/images/img_proyectos/4.png')}}" alt="">
							</a>
							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Fireware Watchguard</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i> 
									Diciembre 2015
								</li>

							</ul>
						</div>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive thumbnail" src="{{ asset('smarty/assets/images/img_proyectos/3.png')}}" alt="">
							</a>
							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Migración a Office 365</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i> 
									Octubre 2015
								</li>

							</ul>
						</div>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive thumbnail" src="{{ asset('smarty/assets/images/img_proyectos/5.png')}}" alt="">
							</a>
							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Migración a la Azure</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
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