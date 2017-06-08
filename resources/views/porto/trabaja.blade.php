@extends('porto.app')

@section('content')

<div role="main" class="main">


@include('porto.sliderTrabaja')

<br>
	<section id="">
		<div class="container">



<div class="container">

					<div class="row">
						<div class="col-md-6">

							<div class="alert alert-success hidden" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-danger hidden" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
							</div>

							
							<h2>Nos gustría trabajar contigo,<strong style="color: #da5417"> envíanos tus datos y adjunta tu hoja de vida.</strong></h2>

										

								@if(Session::has('message'))
					            
									<div id="mensaje-enviado" class="alert alert-success" role="alert">
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									  <span aria-hidden="true">&times;</span></button>
									  <strong><i class="fa fa-check"></i></strong> {{Session::get('message')}}
									</div>

								@endif  							

							{!! Form::open(['route' => 'enviarTrabaja', 'method'=>'PUT', 'id' => 'demo-form', 'enctype'=>'multipart/form-data', 'class' => '', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!} 

								<fieldset>
									<input type="hidden" name="action" value="contact_send" />

									<div class="row">
										<div class="form-group">
											<div class="col-md-4">
												<label for="name">Nombre y Apellido *</label>
												<input required type="text" value="" class="form-control" name="name" id="name">
											</div>
											<div class="col-md-4">
												<label for="email">Correo Electrónico *</label>
												<input required type="email" value="" class="form-control" name="email" id="email">
											</div>
											<div class="col-md-4">
												<label for="phone">Teléfono</label>
												<input required type="text" class="form-control masked" data-format="(9999) 999-99-99" data-placeholder="X" placeholder="" name="phone" id="phone">

												
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">

											<div class="col-md-4">

											</div>
											<div class="col-md-4">

											</div>											
											<div class="col-md-4">
										
											</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="message">Mensaje *</label>
												<textarea required maxlength="10000" rows="8" class="form-control" name="message" id="message"></textarea>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<input class="custom-file-upload" type="file" id="file" name="archivo" id="contact:attachment" data-btn-text="Buscar CV" />
												<small class="text-muted block">Tamaño máximo: 1Mb (zip/pdf/jpg/png)</small>
											</div>
										</div>

									</div>

								</fieldset>

								<div class="row">
									<div class="col-md-12">
										{!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
									</div>
								</div>
							{!! Form::close() !!}
						</div>
						<div class="col-md-6">

							

							<h4>En<strong style="color: #da5417"> AXION TI.</strong></h4>

							<p>Te estamos esperando.</p>

							<hr>

							
							<h4>¿Cómo<strong style="color: #da5417"> ubicarnos?</strong></h4>

							<ul class="list list-icons list-icons-style-3 mt-xlg">
								<li><i class="fa fa-map-marker"></i> <strong>Dirección:</strong> Urb. Terrazas del Ávila, Zona Rental UNIMET. Edif. 1. P1. Ofic. AXIONTI, (B&G). Caracas, Edo. Miranda.</li>
								<li><i class="fa fa-phone"></i> <strong>Teléfono:</strong> (123) 456-789</li>
								<li><i class="fa fa-envelope"></i> <strong>Correo electrónico:</strong> <a href="mailto:comercial@axionti.com">comercial@axionti.com</a></li>
							</ul>

							<hr>

							<h4>Horario de<strong style="color: #da5417"> ficina</strong></h4>

							<ul class="list list-icons list-dark mt-xlg">
								<li><i class="fa fa-clock-o"></i> Lunes - Viernes 8:00 am a 5:00 pm</li>
							</ul>

						</div>

					</div>

				</div>


		</div>

	</section>






</div>
		
<script type="text/javascript">
function showfield(name){
  if(name=='otros')
  	document.getElementById('div1').innerHTML='<label for="otroCargo">Indique</label><input type="text" class="form-control pointer" name="otroCargo" />';

  else document.getElementById('div1').innerHTML='';
}

function showfield2(name){
  if(name=='otros')
  	document.getElementById('div2').innerHTML='<label for="otroSector">Indique</label><input type="text" class="form-control pointer" name="otroSector" />';

  else document.getElementById('div2').innerHTML='';
}
</script>

@endsection		