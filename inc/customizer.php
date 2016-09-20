<?php
/**
 * base Theme Customizer
 *
 * @package base
 */

function base_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'base_customize_register' );

function base_theme_customize_register( $wp_customize ) {
  $wp_customize->add_section( 'base_theme_slider_options', array(
    'title'          => __( 'Slider Settings', 'base' )
  ) );

  $wp_customize->add_setting( 'base_theme_slider_count_setting', array(
    'default'        => '1',
    'sanitize_callback' => 'esc_textarea'
  ) );

  $wp_customize->add_control( 'base_theme_slider_count', array(
    'label'      => __( 'Number of slides displaying at once', 'base' ),
    'section'    => 'base_theme_slider_options',
    'type'       => 'text',
    'settings'   => 'base_theme_slider_count_setting'
  ) );

  $wp_customize->add_setting( 'base_theme_slider_time_setting', array(
    'default'        => '5000',
    'sanitize_callback' => 'esc_textarea'
  ) );

  $wp_customize->add_control( 'base_theme_slider_time', array(
    'label'      => __( 'Slider Time (in ms)', 'base' ),
    'section'    => 'base_theme_slider_options',
    'type'       => 'text',
    'settings'   => 'base_theme_slider_time_setting'
  ) );

  $wp_customize->add_setting( 'base_theme_slider_loop_setting', array(
    'default'        => 'true',
    'sanitize_callback' => 'esc_textarea'
  ) );

  $wp_customize->add_control( 'base_theme_loop', array(
    'label'      => __( 'Loop Slider Content', 'base' ),
    'section'    => 'base_theme_slider_options',
    'type'     => 'radio',
    'choices'  => array(
      'true'  => 'yes',
      'false' => 'no',
    ),
    'settings'   => 'base_theme_slider_loop_setting'
  ) );
}
add_action( 'customize_register', 'base_theme_customize_register' );


function base_customize_preview_js() {
	wp_enqueue_script( 'base_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'base_customize_preview_js' );
