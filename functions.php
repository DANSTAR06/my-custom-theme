<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style('my-custom-style', get_stylesheet_uri());
    // Enqueue STYLES AND scripts 

    wp_enqueue_style('main-styles', get_stylesheet_uri());
    wp_enqueue_style('font-awesome', get_template_directory_uri() . './assets/fontawesome-free-6.5.2-web/css/fontawesome.min.css');
    wp_enqueue_style('brands', get_template_directory_uri() . './assets/fontawesome-free-6.5.2-web/css/brands.min.css');
    wp_enqueue_style('solid', get_template_directory_uri() . './assets/fontawesome-free-6.5.2-web/css/solid.min.css');
   
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_custom_theme_scripts() {
    // Enqueue jQuery from CDN
    wp_enqueue_script(
        'jquery-slim', 
        'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.slim.min.js', 
        array(), 
        null, 
        true
    );

    // Enqueue custom main.js
    wp_enqueue_script(
        'main-js', 
        get_template_directory_uri() . '/assets/js/main.js', 
        array('jquery-slim'), 
        null, 
        true
    );
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');

function my_custom_theme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar Widget Area', 'my-custom-theme'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets in this area will be shown on the sidebar.', 'my-custom-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'my-custom-theme'),
        'id'            => 'footer-1',
        'description'   => __('Widgets in this area will be shown in the footer.', 'my-custom-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'my_custom_theme_widgets_init');



function my_custom_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-custom-theme'),
        'footer'  => __('Footer Menu', 'my-custom-theme'),
    ));
}
add_action('after_setup_theme', 'my_custom_theme_setup');
