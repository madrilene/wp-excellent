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

<footer id="colophon"
		role="contentinfo"
		class="site-foot">

		<div class=" splitter wrapper">

			<?php get_template_part( 'template-parts/footer/footer', 'credit' ); ?>

	</div>

</footer>

<?php wp_footer(); ?>

</body>

</html>
