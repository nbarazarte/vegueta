@extends('porto.app')

@section('content')

<div role="main" class="main">


				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps" class="google-map"></div>




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

							
							<h2>Envíanos tus<strong style="color: #da5417"> preguntas y comentarios.</strong></h2>

                    			@if(Session::has('message'))
					            
									<div id="mensaje-enviado" class="alert alert-success" role="alert">
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									  <span aria-hidden="true">&times;</span></button>
									  <strong><i class="fa fa-check"></i></strong> {{Session::get('message')}}
									</div>

								@endif  


							{!! Form::open(['route' => 'enviar', 'method'=>'PUT', 'id' => '', 'enctype'=>'multipart/form-data', 'class' => '', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!} 
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Nombre y Apellido *</label>
											<input type="text" value="" data-msg-required="Por favor ingrese su nombre y apellido." maxlength="100" class="form-control" name="name" id="name" required>
										</div>
										<div class="col-md-6">
											<label>Correo Electrónico *</label>
											<input type="email" value="" data-msg-required="Por favor ingrese su dirección de correo electrónico." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
										</div>
									</div>
								</div>


								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Teléfono * (Ej.: 0415-999-0099)</label>
											<input type="text" pattern="^\d{4}-\d{3}-\d{4}$" value="" data-msg-required="Por favor ingrese su número de teléfono." maxlength="100" class="form-control" name="phone" id="phone" required>
										</div>
										<div class="col-md-6">
											<label>Cargo *</label>
											<select required class="form-control pointer" id="cargo" name="cargo" data-msg-required="Por favor ingrese su cargo." onchange="showfield(this.options[this.selectedIndex].value)">
												<option value="">--- Seleccione ---</option>
												<option value="Director">Director</option>
												<option value="Gerente">Gerente</option>
												<option value="otros">Otros</option>
											</select>
											<div id="div1"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">

										<div class="col-md-6">
											<label for="sector">Sector Industrial</label>
											<select required class="form-control pointer" id="sector" name="sector" data-msg-required="Por favor ingrese el sector industrial de su empresa." onchange="showfield2(this.options[this.selectedIndex].value)">
												<option value="">--- Seleccione ---</option>
												<option value="Salud">Salud</option>
												<option value="Medios de Comunicación">Medios de Comunicación</option>
												<option value="Deportes">Deportes</option>
												<option value="Tecnología">Tecnología</option>
												<option value="Educación">Educación</option>
												<option value="Comercio">Comercio</option>
												<option value="Transporte y Comunicaciones">Transporte y Comunicaciones</option>
												<option value="Turismo">Turismo</option>
												<option value="Banca/Finanzas">Banca/Finanzas</option>
												<option value="Seguros">Seguros</option>
												<option value="Administración Pública">Administración Pública</option>
												<option value="Marketing">Marketing</option>
												<option value="Capital Humano">Capital Humano</option>
												<option value="otros">Otros</option>
											</select>
											<div id="div2"></div>
										</div>
										<div class="col-md-6">
											<label>Asunto</label>
											<select required class="form-control pointer" id="asunto" name="asunto" data-msg-required="Pór favor selecione de la lista.">
												<option value="">--- Seleccione ---</option>
												<option value="Comentarios">Comentarios</option>
												<option value="Sugerencias">Sugerencias</option>
											</select>

										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Mensaje *</label>
											<textarea maxlength="5000" data-msg-required="Por favor ingrese su mensaje." rows="10" class="form-control" name="message" id="message" required></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										
										{!! Form::submit('Enviar',['class' => 'btn btn-primary btn-lg mb-xlg', 'value' => 'Enviar', 'style' => '' , 'data-loading-text' => 'Enviando']) !!}
									</div>
								</div>
							{!! Form::close() !!}
						</div>
						<div class="col-md-6">

							

							<h4>En<strong style="color: #da5417"> AXION TI.</strong></h4>

							<p>Tenemos la mejor solución para tu empresa</p>

							<hr>

							
							<h4>¿Cómo<strong style="color: #da5417"> ubicarnos?</strong></h4>

							<ul class="list list-icons list-icons-style-3 mt-xlg">
								<li><i class="fa fa-map-marker"></i> <strong>Dirección:</strong> Urb. Terrazas del Ávila, Zona Rental UNIMET. Edif. 1. P1. Ofic. AXIONTI, (B&G). Caracas, Edo. Miranda.</li>
								<li><i class="fa fa-phone"></i> <strong>Teléfonos:</strong> (212) 204-21-76 / (212) 241-26-90 / (212) 242-61-14</li>
								<li><i class="fa fa-envelope"></i> <strong>Correo Electrónico:</strong> <a href="mailto:comercial@axionti.com">comercial@axionti.com</a></li>
							</ul>

							<hr>

							<h4>Horario de<strong style="color: #da5417"> Oficina</strong></h4>

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