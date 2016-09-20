<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package base
 */
?>

		<div id="footer-content" class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<footer id="colophon" class="content-footer">
							<div class="site-info">
								<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'base' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'base' ), 'WordPress' ); ?></a>
								<span class="sep"> | </span>
								<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'base' ), "base", "<a href='http://calumodonnell.co.uk/'>Calum O'Donnell</a>" ); ?>
							</div>
						</footer>
					</div>
				</div>
			</div>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
