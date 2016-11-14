<?php get_header(); ?>

		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner" role="listbox">
				<?php $slider = array(
						'post_type' => 'slider',
						'posts_per_page' => -1 //Cambiar si es necesario aumentar o restringir la cantidad de post en el index
					); 

					$get_slider = new WP_Query( $slider );
					$box = 0;

					while ( $get_slider->have_posts() ) {
						$get_slider->the_post();
						$box++;
						
					?>
						
				<div class="item <?php echo ($box == 1) ? 'active' : '' ?>">
					<?php the_post_thumbnail(); ?>
					<div class="carousel-caption">
						<h3><?php the_title() ?></h3>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
					</div>
				</div>

				<?php  } wp_reset_postdata(); ?>
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