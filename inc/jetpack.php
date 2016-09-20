<?php
/**
  * Jetpack compatibility file
  *
  * @package base
**/

function base_jetpack_setup() {
  add_theme_support( 'infinite-scroll', array(
    'container' => 'main',
    'render'    => 'base_infinite_scroll_render',
    'footer'    => 'page',
  ) );
  add_theme_support('jetpack-responsive-videos');
}
add_action( 'after_setup_theme', 'base_jetpack_setup' );

function base_infinite_scroll_render() {
  while (have_posts()) {
    the_post();
    if(is_search()) :
      get_template_part('loop-templates/content', 'search');
    else :
      get_template_part('loop-templates/content', get_post_format());
    endif;
  }
}
