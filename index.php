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

<!-- delete me -->

<div class="wrapper flow prose ">
	<h1 class="gradient-text">wp-excellent-starter — <span class="wpexcellent-version"></span></h1>
	<p>This starter for WordPress is based on the workflow to build flexible front-ends, as described in <a
		 href="https://buildexcellentwebsit.es/">buildexcellentwebsit.es</a> by Andy Bell.

	<p>Modify index.php and the files in the src folder to start creating your theme! Have fun!</p>
</div>

<!-- delete me end -->

<?php if ( have_posts() ) : ?>

	<div class="wrapper flow prose ">

	<?php
	while ( have_posts() ) :
		the_post();
		?>

		<?php get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) ); ?>


<?php endwhile; ?>

<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

</div>

<?php
get_footer();
