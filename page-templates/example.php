<?php
/**
 * Template Name: Cable Wizard
 *
 * The template for the cable wizard.
 *
 * @package base
 */

get_header(); ?>

<div id="cable-wizard" class="site-content">
	<div id="content" class="container">
		<div class="row">
			<section id="primary" class="content-area col-md-12">
				<main id="main" class="site-main" role="main">
					<?php
						while ( have_posts() ) : the_post();
							get_template_part( 'loop-templates/content', 'page' );

							// if comments are open or have at least one comment, load up the comment template
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						endwhile;
					?>
				</main>
			</section>
		</div>
	</div>
</div>

<?php get_footer(); ?>
