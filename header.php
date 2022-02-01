<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        
        <?php $destacada = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
        <?php $destacada = $destacada[0]; ?>

    <header class="site-header" style="background-image:url(<?php echo $destacada; ?>)">
    <nav class="navegacion navbar navbar-expand-lg navbar-light">
        <div class="container">

        <!-- /*PRUEBA DE MENU */ -->
            <!-------------- MENU PC ---------------->

			<div class="fixed-top menupc shadow p-3 mb-5 bg-white">
				<div
					class="row justify-content-lg-between align-items-center px-5"
				>
					<div class="col-12 d-flex justify-content-center col-lg-auto">
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')) ?>">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logoweb.svg" class="img-fluid" alt="Logo Nuestra Casa" >
                        </a>
					</div>
					<div class="d-none d-md-inline col-12 col-lg-auto">
						<ul class="nav justify-content-center">
							<li class="nav-item">
								<a href="#" class="nav-link active">Inicio</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Que hacemos</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Novedades</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Quienes somos</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Contacto</a>
							</li>
						</ul>
					</div>
					<div
						class="t-idiomas d-none d-md-inline col-12 text-center col-lg-auto"
					>
						<a href="#" class="mr-1">
							<i class="fas fa-language"></i>
						</a>
						
					</div>
				</div>
			</div>

            <!-------------- MENU MOVIL ---------------->

			<!-- <div class="container d-md-none">
				<div class="row fixed-bottom">
					<div class="col text-right my-4 mx-4">
						<div class="dropup">
							<buttom
								class="btn btn-primary dropdown-toggle"
								type="buttom"
								data-toggle="dropdown"
							>
								<i class="fas fa-bars"></i>
							</buttom>
							<div class="dropdown-menu">
								<a href="#" class="dropdown-item">Inicio</a>
								<a href="#" class="dropdown-item">Que hacemos</a>
								<a href="#" class="dropdown-item">Novedades</a>
								<a href="#" class="dropdown-item">Quienes somos</a>
								<a href="#" class="dropdown-item">Contacto</a>

								<div class="col d-inline-block text-left ml-2">
									<a href="#" class="mr-1">
										<i class="fab fa-facebook-f"></i>
									</a>
									<a href="#" class="mr-1">
										<i class="fab fa-instagram"></i>
									</a>
									<a href="#">
										<i class="far fa-envelope"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
        <!-- /*PRUEBA DE MENU */ -->
            <!-- <div class="row"> -->
                <!-- <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')) ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logoweb.svg" class="img-fluid" alt="Logo Nuestra Casa" >
                    </a>
                    <a class="navbar-brand2" href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logomovil.svg" class="img-fluid" alt="Logo Nuestra Casa" >
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="navbar-right">
                    <?php wp_nav_menu(array(
                        'theme_location'    => 'menu_principal',
                        'container_id'      => 'navbar',
                        'container_class'   => 'collapse navbar-collapse',
                        'menu_class'        => 'nav navbar-nav navbar-right'
                    )); ?>
                </div> -->
            <!-- </div> -->
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="titulo">
                    <?php if(is_front_page()): ?>
                    <?php $descripcion = get_bloginfo('description', 'display' ); ?>
                    <h1 class="site-title"><span><?php echo $descripcion; ?></span></h1>
                    <?php elseif(is_category()): ?>
                    <h1 class="site-title"><span><?php the_archive_title(); ?></span></h1>
                    <?php else: ?>
                        <h1 class="site-title"><span><?php the_title(); ?></span></h1>
                    <?php endif; ?>
                </div>

            </div>

        </div>

    </div>
</header>