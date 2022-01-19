<?php get_header(); ?>

<section class="container contenido">
   
    <div class="row">
     <?php   
        $args = array(
            'posts_per_page' => 50
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

<?php get_footer(); ?>