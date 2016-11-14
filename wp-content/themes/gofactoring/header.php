<!DOCTYPE html>
<html dir="<?php bloginfo('text_direction') ?>" lang="<?php bloginfo('language') ?>">
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Go Factoring</title>
	<?php wp_head(); ?>

	<!-- Favicon -->
	<link rel="icon" href="<?php bloginfo('template_url') ?>/images/favicon.ico">

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

						<a class="navbar-brand" href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_url') ?>/images/logo.jpg" alt="Logo Go Factoring"></a>
					</div>

					<div class="collapse navbar-collapse" id="my-navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="<?php bloginfo('url') ?>/empresa/">NUESTRA EMPRESA</a></li>
							<li><a href="<?php bloginfo('url') ?>/productos_servicios/">PRODUCTOS Y SERVICIOS</a></li>
							<li><a href="<?php bloginfo('url') ?>/beneficios/">BENEFICIOS</a></li>
							<li><a href="<?php bloginfo('url') ?>/requerimientos/">REQUERIMIENTOS</a></li>
							<li><a href="<?php bloginfo('url') ?>/contacto/">CONTACTO</a></li>	
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