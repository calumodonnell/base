<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package base
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div id="page" class="site hfeed">
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'base' ); ?></a>
      <div class="site-header">
        <nav class="navbar navbar-dark bg-inverse site-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
              <button type="button" class="navbar-toggle menu-toggle hidden-sm-up" data-toggle="collapse" data-target=".exCollapsingNavbar"></button>
            </div>
            <?php
              wp_nav_menu( array(
                'theme_location' => 'primary',
                'container_class' => 'collapse navbar-toggleable-xs exCollapsingNavbar',
                'menu_class' => 'nav navbar-nav',
                'fallback_cb' => '',
                'menu_id' => 'main-menu',
                'walker' => new wp_bootstrap_navwalker())
              );
            ?>
          </div>
        </nav>
      </div>
    </div>
