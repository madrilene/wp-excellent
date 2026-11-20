<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @package wp-excellent
 */

get_header();
?>

<div class="wrapper region flow prose">
	<header class="flow">
		<h1 class="page-title gradient-text"><?php esc_html_e('Page not found', 'wp-excellent'); ?></h1>
		<p><?php esc_html_e('It seems we can’t find what you’re looking for. Perhaps searching can help.', 'wp-excellent'); ?></p>
	</header>
	<?php get_search_form(); ?>
</div>

<?php
get_footer();
