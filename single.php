<?php get_header(); ?>

<section class="container contenido">
    <div class="row">
        <?php 
            while(have_posts()): the_post();
                the_content();
            endwhile;
        ?>

  

    </div>
    <div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/decofinalentrada.png" class="deco-titulo img-responsive" alt="deco" >
    </div>
</section>

<?php get_footer(); ?>