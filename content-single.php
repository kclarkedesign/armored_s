<?php
/**
 * @package Armored
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php a_bootstraped_theme_with_flexibility_and_simplicity_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'a-bootstraped-theme-with-flexibility-and-simplicity' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php a_bootstraped_theme_with_flexibility_and_simplicity_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
