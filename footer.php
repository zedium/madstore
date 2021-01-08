<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Madstore_woocomerce
 */

?>

	<footer id="footer" class="site-footer container">
		<div class="site-info row">
			<div class="col-md-12">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'madstore-woocomerce' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'madstore-woocomerce' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'madstore-woocomerce' ), 'madstore-woocomerce', '<a href="https://automattic.com/">Automattic</a>' );
					?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
