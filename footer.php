<?php

/**
 * The template for displaying the footer
 *
 * #main is opened in header and closed here.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-excellent
 */
?>

</main>

<footer class="site-foot">

	<div class="wrapper flow">

		<?php get_template_part('template-parts/footer/theme', 'switch'); ?>
		<?php get_template_part('template-parts/footer/footer', 'credit'); ?>

	</div>

</footer>

<?php wp_footer(); ?>

</body>

</html>