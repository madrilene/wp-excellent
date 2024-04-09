<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp-excellent
 */

get_header(); ?>


<?php
/* Start the Loop */
while (have_posts()) :
	the_post();
?>

	<div class="wrapper region flow prose">

		<?php
		get_template_part('template-parts/content/content-single');
		?>

		<?php
		if (is_attachment()) {
			// Parent post navigation.
			the_post_navigation(
				array(
					/* translators: %s: Parent post link. */
					'prev_text' => sprintf(__('<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentytwentyone'), '%title'),
				)
			);
		}
		?>

		<?php
		if (comments_open() || get_comments_number()) {
			comments_template();
		}
		?>

	</div>

<?php endwhile; // End of the loop.
?>

<?php
get_footer();
