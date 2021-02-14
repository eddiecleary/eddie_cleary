<?php

/*

@package eddiecleary

    ======================
    ENQUEUE STYLES/SCRIPTS
    ======================
*/

function ec_load_scripts() {

    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&family=Ubuntu' );
    wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js', array(), '3.6.0', true);
    wp_enqueue_script( 'gsap-scrollTrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js', array('gsap'), '3.6.0', true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('gsap'), '1.0.0', true);

    if (is_front_page()) {
        wp_deregister_script( 'main' );
        wp_enqueue_script( 'gsap-motionPath', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/MotionPathPlugin.min.js', array('gsap'), '3.6.0', true);
        wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('gsap','gsap-motionPath','gsap-scrollTrigger'), '1.0.0', true);
    };

    if (is_page('resume')){
        wp_enqueue_style( 'ubuntubold', 'https://fonts.googleapis.com/css2?family=Ubuntu:wght@700' );
    };

    wp_deregister_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'ec_load_scripts' );
