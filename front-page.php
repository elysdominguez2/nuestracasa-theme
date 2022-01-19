<?php get_header(); ?>

<h2 class="text-center"> Bienvenidos a Nuestra Casa </h2>

<section class="container contenido">
    <div class="contenido-titulos">
        <div class="subtitulo-entradas">
            <div class="subtitulo-entradas2">
                <h2 class="titulo-enlace text-center"> Novedades </h2>
                <h3 class="subtitulo text-center"> Noticias y Actividades </h3>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/decosubtitulo.png" class="deco-titulo img-responsive" alt="deco" >
        </div>
    </div>
    <div class="row">
     <?php   
        $args = array(
            'posts_per_page' => 6
        );
        $entradas = new WP_Query($args); while($entradas->have_posts()): $entradas->the_post(); ?>

            <div class="col-xs-6 col-md-4 entrada">

            <?php the_post_thumbnail( 'entradas', array('class' => 'img-responsive shadow bg-white')); ?>
                <div class="contenido-entrada">

                    <p>
                        <span><?php the_time(get_option('date_format')); ?></span>
                    </p>
                    
                    <?php the_title('<h3>', '</h3>'); ?>

                    <p>
                        Escrito por: <?php the_author(); ?>
                    </p>

                    <p><?php the_excerpt(); ?></p>

                    <a href="<?php the_permalink() ?>" class="links-generales">Leer más</a>

                </div>

            </div>
            

       <?php endwhile; wp_reset_postdata();

    ?>

    </div>
    <div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/decofinalentrada.png" class="deco-titulo img-responsive" alt="deco" >
    </div>
</section>

<section class="categorias-blog container">
    <h2 class="text-center">Por categoría</h2>

    <?php $categorias = get_categories(); ?>
    <div class="row">
        <?php foreach($categorias as $categoria) { ?>
            <div class="col-xs-6 col-md-6 col-lg-3 categoria">
                <i class="<?php echo $categoria->description; ?>"></i>
                <a href="<?php echo get_category_link($categoria->cat_ID) ?>">
                    <?php echo $categoria->name; ?>
                </a>
            </div>
        <?php } ?>
    </div>
    
</section>

<?php get_footer(); ?>