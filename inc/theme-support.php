<?php

add_theme_support('post-thumbnails');
add_theme_support('custom-header');
add_theme_support('custom-logo');
add_theme_support('menus');
add_theme_support('html5');

/* Activate Nav Menu Option */
function ec_register_nav_menu() {
    register_nav_menu( 'header', 'Header navigation menu' );
}
add_action( 'after_setup_theme', 'ec_register_nav_menu' );