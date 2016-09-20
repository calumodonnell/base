<?php
/**
 * The main front page file.
 *
 * @package base
 */

get_header(); ?>

<div id="front-page" class="site-content">
	<div id="content" class="container">
		<div class="row">
			<section id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-9<?php else : ?>col-md-12<?php endif; ?> content-area">
				<main id="main" class="site-main">
					<?php
						if ( have_posts() ) :
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
