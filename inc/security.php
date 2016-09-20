<?php
/**
 * Security functions.
 *
 * @package trak
 */

function no_generator()  {
    return '';
}
add_filter( 'the_generator', 'no_generator' );

remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

function base_login_errors(){
	return 'Incorrect login details.';
}
add_filter('login_errors', 'base_login_errors');
