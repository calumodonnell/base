<?php
/**
 * Declaring widgets
 *
 * @package trak
 */


 /**
  * Register widget area.
  *
  * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
  */
function base_widgets_init() {
  register_sidebar( array(
    'name'		      => esc_html__( 'Sidebar', 'base' ),
    'id'			      => 'sidebar-1',
    'description'	  => esc_html__( 'Sidebar widget area', 'base' ),
    'before_widget'	=> '<aside id="%1$s" class="widget %2$s">',
    'after_widget' 	=> '</aside>',
    'before_title' 	=> '<h3 class="widget-title">',
    'after_title'	  => '</h3>',
  ) );
}
add_action( 'widgets_init', 'base_widgets_init' );
