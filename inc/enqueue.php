<?php
/**
 * base enqueue scripts
 *
 * @package base
 */

function base_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/res/css/style.css', array(), '1.3' );

    wp_enqueue_style( 'print', get_stylesheet_directory_uri() . '/res/css/print.css', array(), '1.0', 'print' );

    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'tether', get_template_directory_uri() . '/res/js/libs/tether.min.js', array(), '1.3.1', true );

    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/res/js/libs/bootstrap.min.js', array(), '4.2', true );

    wp_enqueue_script( 'functions', get_template_directory_uri() . '/res/js/bin/main.min.js', array(), '1.3', true );

    wp_enqueue_script( 'respond', get_template_directory_uri() . '/res/js/libs/respond.min.js', array(), '1.3', true );

    wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/res/js/libs/html5shiv.min.js', array(), '1.3', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'base_scripts' );
