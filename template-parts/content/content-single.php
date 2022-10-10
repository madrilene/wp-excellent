<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-excellent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'flow' ); ?>>

	<header class="entry-header alignwide">
		<?php the_title( '<h1 class="entry-title gradient-text">', '</h1>' ); ?>
	</header><!-- .entry-header -->


		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>



</article><!-- #post-<?php the_ID(); ?> -->
