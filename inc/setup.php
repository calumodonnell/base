<?php
/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @package trak
 */

if ( ! function_exists( 'base_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function base_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
      	 * Let WordPress manage the document title.
      	 * By adding theme support, we declare that this theme does not use a
      	 * hard-coded <title> tag in the document head, and expect WordPress to
      	 * provide it for us.
      	 */
		    add_theme_support( 'title-tag' );

        /*
      	 * Enable support for Post Thumbnails on posts and pages.
      	 *
      	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
      	 */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
    		register_nav_menus( array(
  		      'primary' => esc_html__( 'Primary', 'base' ),
    		) );

        /*
      	 * Switch default core markup for search form, comment form, and comments
      	 * to output valid HTML5.
      	 */
        add_theme_support( 'html5', array(
          	'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
        ) );

    		add_theme_support( 'post-formats', array(
      			'aside', 'image', 'video', 'quote', 'link',
    		) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'base_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );
    }
endif;
add_action( 'after_setup_theme', 'base_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _s_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_s_content_width', 640 );
}
add_action( 'after_setup_theme', '_s_content_width', 0 );


function custom_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );


function all_excerpts_get_more_link($post_excerpt) {
    return $post_excerpt . ' [...]<p><a class="btn btn-secondary base-read-more-link" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More...', 'base')  . '</a></p>';
}
add_filter('wp_trim_excerpt', 'all_excerpts_get_more_link');
