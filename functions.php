<?php
// add_filter( 'show_admin_bar', '__return_false' );

function theme_styles() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'jumbotron_css', get_template_directory_uri() . '/css/jumbotron.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

/*add javascript */

function theme_js() {
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery, tether'), '', true );
    wp_enqueue_script( 'ie10_js', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );

/*=============================
=            Menus            =
=============================*/
add_theme_support( 'menus' );
function thundertube_register_menu() {
  register_nav_menu('main-menu', __( 'Main Menu') );
}
add_action('init', 'thundertube_register_menu');
