<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <?php dynamic_sidebar('footer_widget'); ?>

                </div>

            </div>
            <div class="col-sm-4">
                <h3>Redes sociales</h3>
                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'sociales_menu',
                        'container' => 'div',
                        'container_id' => 'menu-social',
                        'container_class' => 'menu',
                        'menu_id' => 'social',
                        'menu_class' => 'menu-items',
                        'depth' => 1,
                        'link_before' => '<span class="sr-only">',
                        'link_after' => '</span>',
                        'fallback_cb' => '',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    ));
                ?>
            </div>
            <div class="col-sm-2 frase">
            <?php dynamic_sidebar('footer_parrafo_widgets'); ?>
                <div class="contenedor-deco-footer">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/decofinalfooter.png" class="deco-footer img-responsive" alt="deco" >
                </div>
            </div>
            
            
        </div>
    </div>
        

    <p class= "footer-info text-center">
        Stichting Nuestra Casa <?php echo date('Y'); ?>
    </p>
</footer>

<?php wp_footer(); ?>

</body>

</html>