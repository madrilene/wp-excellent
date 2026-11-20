<?php

/**
 * The template for displaying search results
 *
 * @package wp-excellent
 */

get_header();
?>

<div class="wrapper region flow prose">
	<?php if (have_posts()) : ?>

		<header class="flow">
			<h1 class="page-title gradient-text">
				<?php
				printf(
					/* translators: %s: Search query. */
					esc_html__('Results for “%s”', 'wp-excellent'),
					esc_html(get_search_query())
				);
				?>
			</h1>
		</header>

		<?php
		while (have_posts()) :
			the_post();
			get_template_part('template-parts/content/content', 'excerpt');
		endwhile;

		wpexcellent_the_posts_navigation();
		?>

	<?php else : ?>
		<?php get_template_part('template-parts/content/content-none'); ?>
	<?php endif; ?>
</div>

<?php
get_footer();
