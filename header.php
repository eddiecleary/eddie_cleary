<?php
    /*
        This is the template for the header

        @package eddiecleary
    */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php bloginfo('name'); wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo('description') ?>">
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php endif; ?>
        <?php wp_head(); ?>
    </head>

    <header class="mt-7">
        <div class="mx-auto lg:container w-full flex flex-wrap justify-between content-center relative">
            <div class="logo w-28 md:w-1/4">
                <?php

                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if ( has_custom_logo() ) {
                    the_custom_logo();
                }
                ?>
            </div>

            <button id="hamburger" class="hamburger hamburger--emphatic" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>

            <nav id="nav" class="text-ec-grey top-full w-full hidden">
                <?php wp_nav_menu(array(
                    'theme_location'    => 'header',
                    'container'         => false,
                    'menu_class'        => 'flex flex-col text-center justify-between',
                )); ?>
            </nav>

        </div>

    </header>

<body <?php body_class(); ?>>