<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Armored
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'a-bootstraped-theme-with-flexibility-and-simplicity' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'a-bootstraped-theme-with-flexibility-and-simplicity' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'a-bootstraped-theme-with-flexibility-and-simplicity' ), 'Armored', '<a href="http://kirkclarke.com" rel="designer">Kirk Clarke</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
