<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package base
 */

get_header(); ?>

<div id="archive" class="site-content">
	<div id="content" class="container">
		<div class="row">
			<section id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-lg-9<?php else : ?>col-md-12<?php endif; ?> content-area">
				<main id="main" class="site-main">
					<?php if ( have_posts() ) : ?>
						<header class="page-header">
							<?php
								the_archive_title( "<h1 class='page-title'>", "</h1>" );
								the_archive_description( "<div class='archive-description'", "</div>" );
							?>
						</header>

						<?php
							while ( have_posts() ) : the_post();
								get_template_part( 'loop-templates/content', get_post_format() );
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
