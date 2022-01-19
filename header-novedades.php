<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        
       <?php 
        $pagina_blog = get_option( 'page_for_posts' );
        $id_imagen = get_post_thumbnail_id($pagina_blog);
        $destacada = wp_get_attachment_image_src($id_imagen, 'full');
        $destacada = $destacada[0];
       ?>

    <header class="site-header" style="background-image:url(<?php echo $destacada; ?>)">
    <nav class="navegacion navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- <div class="row"> -->
                <div class="navbar-header">
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
                </div>
            <!-- </div> -->
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-7">
                <div class="titulo">
                <?php 
                    $pagina_blog = get_option( 'page_for_posts' );
                    $titulo = get_the_title($pagina_blog);
                ?>
                    <h1 class="site-title"><span><?php echo $titulo; ?></span></h1>
                    
                </div>

            </div>

        </div>

    </div>
</header>