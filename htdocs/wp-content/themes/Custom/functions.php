<?php
add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action('after_setup_theme', 'new_menu');
add_action('after_setup_theme', 'add_logo');
add_action('wp_enqueue_scripts', 'contact_styles');


function contact_styles()
{
    if (is_page(array(88, 97, 104, 134, 166, 170, 172, 168, 292, 288))) {
        //подключаем стили
        wp_enqueue_style('add', get_template_directory_uri() . '/assets/css/add.css');
        //отключаем стили
        wp_dequeue_style('main');
    }
}


function add_logo()
{
    add_theme_support('custom-logo', [
        'unlink-homepage-logo' => false,
    ]);
}

function style_theme()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
}

function scripts_theme()
{
    wp_enqueue_script('JQuery', '//code.jquery.com/jquery-1.11.0.min.js');
    wp_enqueue_script('Migrate', '//code.jquery.com/jquery-migrate-1.2.1.min.js');
    wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
    wp_enqueue_script('main-new', get_template_directory_uri() . '/assets/js/main-new.js');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
}

function new_Menu()
{
    register_nav_menu('top', 'Верхнее меню');
}

/* перенос css в файл шаблона */
function woo_style()
{
    wp_register_style('my-woocommerce', get_template_directory_uri() . '/woocommerce.css', null, 1.0, 'screen');
    wp_enqueue_style('my-woocommerce');
}
add_action('wp_enqueue_scripts', 'woo_style');
/* перенос css в файл шаблона */

/* перенос css в файл шаблона */
function woo2_style()
{
    wp_register_style('my-woocommerce-layout', get_template_directory_uri() . '/woocommerce-layout.css', null, 1.0, 'screen');
    wp_enqueue_style('my-woocommerce-layout');
}
add_action('wp_enqueue_scripts', 'woo2_style');
/* ФИНАЛ МАГАЗИН перенос css в файл шаблона */

add_action('after_setup_theme', 'woocommerce_support');
function woocommerce_support()
{
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
function custom_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'custom_add_woocommerce_support');




/* Изменяет символ валюты на буквы */
add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);
function change_existing_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'RUB': $currency_symbol = 'руб.'; break;
     }
     return $currency_symbol;
}


remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination' );

add_action( 'woocommerce_after_shop_loop', 'custom_woocommerce_pagination' );
