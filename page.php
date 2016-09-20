<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package base
 */

get_header(); ?>

<div id="page" class="site-content">
	<div id="content" class="container">
		<div class="row">
			<section id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-9<?php else : ?>col-md-12<?php endif; ?> content-area">
				<main id="main" class="site-main">
					<?php
						while ( have_posts() ) : the_post();
							get_template_part( 'loop-templates/content', 'page' );

							// if comments are open or have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						endwhile;
					?>
				</main>
			</section>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
