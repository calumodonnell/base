<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package base
 */

get_header(); ?>

<div id="single" class="site-content">
	<div id="content" class="container">
		<div class="row">
			<section id="primary" class="content-area <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-9<?php else : ?>col-md-12<?php endif; ?>">
				<main id="main" class="site-main">
					<?php
						while ( have_posts() ) : the_post();
							get_template_part( 'loop-templates/content', 'single' );

							the_post_navigation();

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
