<?php get_header(); ?>

<section class="container contenido">
    <h2 class="titulo-enlace bienvenidos text-center"> <?php the_field('encabezado_bienvenida'); ?></h2>
    <p class="text-center text-bienvenida"> <?php the_field('texto_bienvenida'); ?></p>
</section>

<div class="seccion-areas">
    <ul class="contenedor-areas">
        <li class="area">
            <?php 
                $area1 = get_field('area_1');
                $imagen = wp_get_attachment_image_src($area1['area_imagen'], 'mediano')[0];
            
            ?>
            <img src="<?php echo esc_attr($imagen); ?>" />
            <a class="links-generales" href="<?php echo esc_html( $area1['area_link']); ?>">Apoyo a la mujer</a>
            

        </li>
        <li class="area">
            <?php 
                $area2 = get_field('area_2');
                $imagen = wp_get_attachment_image_src($area2['area_imagen'], 'mediano')[0];
            
            ?>
            <img src="<?php echo esc_attr($imagen); ?>" />
            <a class="links-generales" href="<?php echo esc_html( $area2['area_link']); ?>">Asesoramiento Gratuito</a>

        </li>
        <li class="area">
            <?php 
                $area3 = get_field('area_3');
                $imagen = wp_get_attachment_image_src($area3['area_imagen'], 'mediano')[0];
            
            ?>
            <img src="<?php echo esc_attr($imagen); ?>" />
            <a class="links-generales" href="<?php echo esc_html( $area3['area_link']); ?>">Clases de Holandés</a>

        </li>
        <li class="area">
            <?php 
                $area4 = get_field('area_4');
                $imagen = wp_get_attachment_image_src($area4['area_imagen'], 'mediano')[0];
            
            ?>
            <img src="<?php echo esc_attr($imagen); ?>" />
            <a class="links-generales" href="<?php echo esc_html( $area4['area_link']); ?>">Acompañamiento a personas mayores</a>

        </li>

    </ul>

</div>

<div class="que-hacemos">
        <div class="que-hacemos-foto">
            <?php 
                $image = get_field('imagen_que_hacemos');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="que-hacemos-info">

            <h2 class="titulo-enlace bienvenidos"> <?php the_field('encabezado_que_hacemos'); ?></h2>
            <p class="text-bienvenida"> <?php the_field('texto_que_hacemos'); ?></p>
            <p class="text-bienvenida"> <?php the_field('texto_que_hacemos_2'); ?></p>
            <a class="links-generales" href="<?php the_field('leer_mas_que_hacemos'); ?>">Saber más</a>
        </div>


    
</div>


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

<div class="apoyo">

    <h2 class="titulo-enlace bienvenidos"> <?php the_field('texto_apoyo'); ?></h2>
    <a class="links-generales" href="<?php the_field('boton_voluntario'); ?>">Ser Voluntario</a>
    <a class="links-generales" href="<?php the_field('boton_cafe'); ?>">Invitarnos un café</a>
    
</div>

<!-- <section class="categorias-blog container">
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
    
</section> -->

<?php get_footer(); ?>