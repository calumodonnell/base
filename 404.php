<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package base
 */

get_header(); ?>

<div id="404" class="site-content">
	<div id="content" class="container">
		<div class="row">
			<section id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<article class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'base' ); ?></h1>
						</header>
					  <div class="page-content">
							<p><?php _e( 'The page you were looking for appears to have been moved, deleted or does not exist. Maybe try a search?', 'base' ); ?></p>
							<?php get_search_form();?>
					  </div>
					</article>
				</main>
			</section>
		</div>
	</div>
</div>

<?php get_footer(); ?>
