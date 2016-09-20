<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package base
 */

get_header(); ?>

<div id="index" class="site-content">
	<div id="content" class="container">
		<div class="row">
			<section id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-9<?php else : ?>col-md-12<?php endif; ?> content-area">
				<main id="main" class="site-main">
					<?php
						if ( have_posts() ) :
							if ( is_home() && ! is_front_page() ) : ?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>
							<?php
							endif;

							// Start the loop
							while ( have_posts() ) : the_post();
								get_template_part( 'loop-templates/content', get_post_format() );
							endwhile;

              the_posts_navigation();

						else :
							get_template_part( ' loop-templates/content', 'none' );
						endif;
					?>
				</main>
			</section>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
