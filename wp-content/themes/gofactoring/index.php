<?php get_header(); ?>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="<?php echo get_template_directory_uri(); ?>/images/slider/1.jpg" alt="Slider 1">
					<div class="carousel-caption">
						<h3>Asesorías financieras en el desarrollo de sus negocios</h3>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
					</div>
				</div>
				<div class="item">
					<img src="<?php echo get_template_directory_uri(); ?>/images/slider/2.jpg" alt="Slider 2">
					<div class="carousel-caption">
						<h3>Acceso a una nueva fuente de financiamiento que complementa las líneas de crédito tradicionales</h3>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
					</div>
				</div>

				<div class="item">
					<img src="<?php echo get_template_directory_uri(); ?>/images/slider/3.jpg" alt="Slider 3">
					<div class="carousel-caption">
						<h3>Reduce los tiempos de cobro y riesgo de no pago de las cuentas por cobrar</h3>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>


		<section class="body-content">
			<div class="promo-box padd-t-20">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="item bg-ghostwhite">
								<div class="content">
									<i class="glyphicon glyphicon-pencil"></i>
									<h5>PRODUCTOS Y SERVICIOS</h5>
									<a href="productos.html" class="btn btn-primary btn-more"><span class="fa fa-plus"></span> VER MÁS</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="item bg-ghostwhite">
								<div class="content">
									<i class="glyphicon glyphicon-check"></i>
									<h5>BENEFICIOS</h5>
									<a class="btn btn-primary btn-more"><span class="fa fa-plus"></span> VER MÁS</a>
								</div>	
								<div class="overlay"></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="item bg-ghostwhite">
								<div class="content">
									<i class="glyphicon glyphicon-th-list"></i>
									<h5>REQUERIMIENTOS</h5>
									<a class="btn btn-primary btn-more"><span class="fa fa-plus"></span> VER MÁS</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="bg-img-5">
				<div class="background-overlay padd-tb-100">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 text-center">
								<div class="title-underline mrg-bottom-50">
									<h2 class="text-uppercase font-white font-weight-400 ">Nuestra Empresa</h2>
								</div>
								<p class="p-white">Go Factoring S.A. es una empresa comformada por accionistas altamente calificados y por un grupo de socios gestores que sinergizan su vasta experiencia financiera, empresarial y legal. Nos caracterizamos por entregar un servicio personalizado y solucionar de manera ágil los requerimientos financieros de nuestros clientes.</p>
								<a href="empresa.html" class="btn btn-primary btn-more"><span class="fa fa-plus"></span> VER MÁS</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>