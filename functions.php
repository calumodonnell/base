<?php
/**
 * Functions and definitions.
 *
 * base functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package base
 */

/* Theme setup and custom theme supports. */
require get_template_directory() . '/inc/setup.php';

/* Register widget area. */
require get_template_directory() . '/inc/widgets.php';

/* Load functions to secure your WP install. */
require get_template_directory() . '/inc/security.php';

/* Enqueue scripts and styles. */
require get_template_directory() . '/inc/enqueue.php';

/* Custom template tags for this theme. */
require( get_template_directory() . '/inc/template-tags.php' );

/* Custom functions that act independently of the theme templates. */
require get_template_directory() . '/inc/extras.php';

/* Load custom WordPress nav walker. */
require get_template_directory() . '/inc/nav_walker.php';

/* Custom header. */
require get_template_directory() . '/inc/custom-header.php';

/* Jetpack compatibility file. */
require get_template_directory() . '/inc/jetpack.php';

/* Jetpack compatibility file. */
require get_template_directory() . '/inc/custom-comments.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';
