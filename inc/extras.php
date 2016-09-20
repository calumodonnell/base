<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package base
 */


//Adds custom classes to the array of body classes.
function base_body_classes( $classes ) {
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	return $classes;
}
add_filter( 'body_class', 'base_body_classes' );

function base_body_class($classes) {
	foreach ($classes as $key => $value) {
		if ($value == 'tag') unset($classes[$key]);
	}
	return $classes;
}
add_filter('body_class', 'base_body_class');
