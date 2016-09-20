<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package base
 */

get_header(); ?>

<div id="search" class="site-content">
  <div id="content" class="container">
    <div class="row">
      <section id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-9<?php else : ?>col-md-12<?php endif; ?> content-area">
        <main id="main" class="site-main">
          <?php if ( have_posts() ) : ?>

						<header class="page-header">
							<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'base' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						</header>

						<?php
              // Start the loop
              while ( have_posts() ) : the_post();
                // Run the loop for the search to output the results.
                // If you want to overload this in a child theme then include a file called content-search.php and that will be used instead.
  						  get_template_part( 'loop-templates/content', 'search' );
  					  endwhile;

              the_posts_navigation();

					  else :
  					    get_template_part( 'loop-templates/content', 'none' );
  				  endif;
          ?>
        </main>
      </section>
      <?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
