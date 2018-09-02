<!DOCTYPE HTML>

<html>
	<head>
		<title>Prueva para vacante en Pekxel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		
		<link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/app.css" />
		<link rel="stylesheet" href="css/cuatro.css" />
		
	</head>
	<body class="homepage is-preload">
		
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">
					<!-- Nav -->
						<nav id="nav">
							<ul>
							<li><a href="bicis">BICIS</a></li>
							<li><a href="componentes">COMPONENTES</a></li>	
								<li><a href="accesorios">ACCESORIOS</a></li>
								
								<li><a href="#">VENDER</a></li>
                                <li><a href="comunidad">COMUNIDAD</a></li>
                                <li><a href="nosotros">NOSOTROS</a></li>
								<li><a href="contacto">CONTACTO</a></li>								
								<li><a href="#" class="icon fa-search" type="search"><span class="label">Buscar</span></a></li>                               
								<li><a href="#" class="icon fa-shopping-basket"><span class="label" style="color:blue">Carrito</span></a></li>                                
								<li><a href="formulario/resumen">RESUMEN</a></li>
							</ul>
						</nav>
						<div class="container">
								<div class="row justify-content-center">
									<div class="col-md-8">
										<div class="card">
											<div class="card-header" style="color:black">{{ __('Porfavor rellena este sencillo Formulario') }}</div>
							
											<div class="card-body">
												<form method="POST" action="{{ route('formulario.store') }}" aria-label="{{ __('Register') }}">
													@csrf
							
													<div class="form-group row">
														<label for="tipo_ciclismo" class="col-md-4 col-form-label text-md-right">{{ __('Qué tipo de ciclismo practicas?') }}</label>
							
														<div class="col-md-6">
															<select id="tipo_ciclismo" class="form-control{{ $errors->has('tipo_ciclismo') ? ' is-invalid' : '' }}"  name="tipo_ciclismo" value="{{ old('tipo_ciclismo') }}" required autofocus>
															<option value="Montaña">Montaña</option>
															<option value="Ciudad">Ciudad</option>
															<option value="Otro">otro</option>
															</select>
															@if ($errors->has('tipo_ciclismo'))
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $errors->first('tipo_ciclismo') }}</strong>
																</span>
															@endif
														</div>
													</div>
							
													<div class="form-group row">
														<label for="anios" class="col-md-4 col-form-label text-md-right">{{ __('Años usando Bicicleta') }}</label>
							
														<div class="col-md-6">
															<input id="anios" type="number" class="form-control{{ $errors->has('anios') ? ' is-invalid' : '' }}"  name="anios" value="{{ old('anios') }}" required>
							
															@if ($errors->has('anios'))
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $errors->first('anios') }}</strong>
																</span>
															@endif
														</div>
													</div>
							
													<div class="form-group row">
														<label for="horas" class="col-md-4 col-form-label text-md-right">{{ __('¿Cuantas horas a la semana usas tu bicilcleta?') }}</label>
							
														<div class="col-md-6">
															<input id="horas" type="number" class="form-control{{ $errors->has('horas') ? ' is-invalid' : '' }}" name="horas" value="{{ old('horas') }}" required autofocus>
							
															@if ($errors->has('horas'))
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $errors->first('horas') }}</strong>
																</span>
															@endif
														</div>
													</div>                        
																	 
												
													<div class="form-group row">
														<label for="marcas" class="col-md-4 col-form-label text-md-right">{{ __('Escribe las marcas que más te agraden') }}</label>
							
														<div class="col-md-6">
															<input id="marcas" type="text" class="form-control{{ $errors->has('marcas') ? ' is-invalid' : '' }}" placeholder="Ejemplo: benotto" name="marcas" value="{{ old('marcas') }}" required autofocus>
							
															@if ($errors->has('marcas'))
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $errors->first('marcas') }}</strong>
																</span>
															@endif
														</div>
													</div>
							
													<div class="form-group row mb-0">
														<div class="col-md-6 offset-md-4">
															<button type="submit"  id="Aceptar" class="icon fa-arrow-right"  onclick="ejecutarAjax()">
																{{ __('Enviar') }}
															</button>
															<div id="load"></div>
															<script type="text/javascript">
															function ejecutarAjax() {
							
																var resultado = document.getElementById("load");
																var ajaxRequest = new XMLHttpRequest();                                    
																
																$('#enviar').attr("disabled", true);
																resultado.innerHTML += "<br>" +"Muchas gracias!"+"</p>";
															}
															</script>
															
														</div>
													</div>                        
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
				</div>
           


			<!-- Features -->
			
			<div class="fondop">					
							<div class="fondopu"></div>							
							<div class="fondobl"></div>							
							<div class="fondoob"></div>							
							<div class="fondoam"></div>														
												
			</div>
			
			<!-- Footer -->
				<div id="footer">
						<div class="fondooba"></div>											
						<div class="row">
							<div class="col-12">
									
								<!-- Contact -->
									<section class="contact">
										<header>
												<ul>
														<li><a href="bicis">PRODUCTOS</a></li>
														<li><a href="componentes">SERVICIOS</a></li>	
														<li><a href="accesorios">COMUNIDAD</a></li>																														
														<li><a href="comunidad">NOSOTROS</a></li>														
														<li><a href="contacto">CONTACTO</a></li>																							
														</ul>
										</header>																				
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Todos los derecchos reservados.</li><li>Terminos y condiciones | <a href="#">Aviso de Privasidad |</a><a href="#"> Preguntas frecuentes</a></li>
										</ul>
									</div>

							</div>

						</div>	
						<div class="footera">
								<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<div class="azul"></div>
									</ul>
						</div>					
				</div>				

		</div>

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.dropotron.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/jquery.scrollex.min.js"></script>
			<script src="js/browser.min.js"></script>
			<script src="js/breakpoints.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>
			
	</body>
</html>