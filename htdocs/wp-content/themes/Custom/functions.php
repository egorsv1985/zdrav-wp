<?php
add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action('after_setup_theme', 'new_menu');
add_action('after_setup_theme', 'add_logo');
add_action( 'wp_enqueue_scripts', 'contact_styles' );

function contact_styles() {
    if ( is_page( array(88, 97, 104, 134, 166, 170, 172, 168, 292, 288) ) ) {
        //подключаем стили
        wp_enqueue_style ( 'add', get_template_directory_uri() . '/assets/css/add.css' );
        //отключаем стили
        wp_dequeue_style ( 'main' );
    }
}


function add_logo() {
    add_theme_support( 'custom-logo', [
        'unlink-homepage-logo' => false, 
    ] );
}

function style_theme() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
}

function scripts_theme() {
    wp_enqueue_script('JQuery', '//code.jquery.com/jquery-1.11.0.min.js');
    wp_enqueue_script('Migrate', '//code.jquery.com/jquery-migrate-1.2.1.min.js');
    wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
}

function new_Menu() {
    register_nav_menu('top', 'Верхнее меню');
}
