<?php

function theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

add_theme_support( 'post-thumbnails' );

register_nav_menu( 'main-menu', 'The main menu at the top of the site' );

?>