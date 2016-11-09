<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Go Factoring</title>

	<link rel="stylesheet" href="https://use.fontawesome.com/ea786a6c52.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<?php wp_head(); ?>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,300italic,400italic,500,500italic,600,600italic,700,700italic%7COpen+Sans:400,600,700,400italic' rel='stylesheet' type='text/css'>

	<!-- Favicon -->
	<!--<link rel="icon" href="images/favicon.ico">-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<div class="wrapper">
		<header id="header" class="header">
			<div class="top-bar bg-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-6">
							<div class="social text-right">
								<form class="form-inline">
									<div class="form-group">
										<label class="sr-only" for="rut">RUT</label>
										<input type="text" class="form-control" id="rut" placeholder="Rut">
									</div>
									<div class="form-group">
										<label class="sr-only" for="password">PASSWORD</label>
										<input type="password" class="form-control" id="password" placeholder="Password">
									</div>
									<div class="form-group">
										<button class="btn btn-primary">INGRESAR</button>
									</div>
									<a href="javascript:;">Solicitar contraseña</a>|
									<a href="javascript:;">Olvidó su contraseña?</a>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			

			<nav class="navbar">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#my-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<a class="navbar-brand" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="Logo Go Factoring"></a>
					</div>

					<div class="collapse navbar-collapse" id="my-navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="empresa.html">NUESTRA EMPRESA</a></li>
							<li><a href="productos.html">PRODUCTOS Y SERVICIOS</a></li>
							<li><a href="beneficios.html">BENEFICIOS</a></li>
							<li><a href="requerimientos.html">REQUERIMIENTOS</a></li>
							<li><a href="contacto.html">CONTACTO</a></li>			
						</ul>

					</div>
				</div>
				<!-- bar for hover navbar -->
				<div class="bar-multi-color">
					<div class="container"></div>
				</div>
				<!-- end bar -->
			</nav>
		</header>