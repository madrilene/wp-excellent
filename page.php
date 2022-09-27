<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-excellent
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

	<?php
	while ( have_posts() ) :
		the_post();
		?>

<article id="post-<?php the_ID(); ?>"
			 <?php post_class( '' ); ?>>
  <div class="wrapper flow prose ">
	<h1> <?php the_title(); ?></h1>

		<?php the_content(); ?>

  </div>
</article>

		<?php
endwhile;
	?>

<?php endif; ?>

<?php
get_footer();
