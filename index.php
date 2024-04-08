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

<article class="wrapper flow prose region">
	<h1 class="gradient-text">wp-excellent</h1>
	<p>This starter for WordPress is based on the workflow to build flexible front-ends, as described in <small><a href="https://buildexcellentwebsit.es/">buildexcellentwebsit.es</a></small> by Andy Bell.</p>

	<p> To work with it efficiently you should be familiar with <a href="https://cube.fyi/" target="_blank" rel="noreferrer noopener">cube.fyi</a>, <a href="https://utopia.fyi/" target="_blank" rel="noreferrer noopener">utopia.fyi</a> and <a href="https://every-layout.dev/" target="_blank" rel="noreferrer noopener">every-layout.dev</a>.</p>
	<ul>
		<li>Find out more on <a href="https://buildexcellentwebsit.es/" target="_blank" rel="noreferrer noopener">https://buildexcellentwebsit.es/</a>.</li>
		<li>Remix the original: <a href="https://glitch.com/edit/#!/remix/build-excellent-websites" target="_blank" rel="noreferrer noopener">https://glitch.com/edit/#!/remix/build-excellent-websites</a></li>
	</ul>
	<p>Edit your preferences in <code>_resouces/css/design-tokens/</code>.</p>

	<p>Modify index.php and the files in the src folder to start creating your theme! Have fun!</p>
</article>

<!-- delete me end -->

<div class="wrapper region flow prose">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post();	?>
			<?php get_template_part('template-parts/content/content', get_theme_mod('display_excerpt_or_full_post', 'excerpt')); ?>
		<?php endwhile; ?>

	<?php else : ?>
		<?php get_template_part('template-parts/content/content-none'); ?>
	<?php endif; ?>

</div>

<?php get_footer();
