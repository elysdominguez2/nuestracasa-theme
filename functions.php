<?php

function nuestracasa_styles() {

    wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css' );

    wp_enqueue_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");

    wp_enqueue_style('fontawesome', get_stylesheet_directory_uri() . '/css/all.min.css');

    wp_enqueue_style('Bebas Neue', 'Open Sans', 'Roboto', "https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@800&family=Roboto:wght@400;700;900&display=swap");

    wp_enqueue_style( 'style', get_stylesheet_uri());

    wp_enqueue_script('jquery');

    wp_enqueue_script('boorstrapjs', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array('jquery'), '3.3.6', true);
}
add_action( 'wp_enqueue_scripts', 'nuestracasa_styles' );

// Navs

register_nav_menus( array(
    'menu_principal' => __('Menu Principal', 'nuestraCasa'),
    'sociales_menu' => __('Menu Redes Sociales', 'nuestraCasa')
) );

// Widget
function nuestracasa_widgets() {
    register_sidebar(array(
        'name' => __('Footer Widgets'),
        'id' => 'footer_widget',
        'description' => 'Widgets para el Footer',
        'before_widget' => '<div id="&1$s" class="widget col-sm-6 %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',

    ) );

    register_sidebar(array(
        'name' => __('Footer Parrafo Widgets'),
        'id' => 'footer_parrafo_widgets',
        'description' => 'Widgets para el Parrafo del Footer',
        'before_widget' => '<div id="&1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',

    ) );

    register_sidebar(array(
        'name' => __('Sidebar Widgets'),
        'id' => 'sidebar_widgets',
        'description' => 'Widgets para el Sidebar',
        'before_widget' => '<div id="&1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',

    ) );
}
add_action( 'widgets_init', 'nuestracasa_widgets' );

// Imagen Destacada
add_theme_support('post-thumbnails');

add_image_size('entradas', 640, 340, true);

//TITULOS SEO
add_theme_support( 'title-tag' );
