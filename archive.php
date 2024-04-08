<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-excellent
 */

get_header();
$description = get_the_archive_description();
?>

<div class="wrapper region flow prose">
	<?php if (have_posts()) : ?>

		<header class="flow">
			<?php the_archive_title('<h1 class="page-title gradient-text">', '</h1>'); ?>
			<?php if ($description) : ?>
				<?php echo wp_kses_post(wpautop($description)); ?>
			<?php endif; ?>
		</header><!-- .page-header -->

		<?php while (have_posts()) : ?>
			<?php the_post(); ?>
			<?php get_template_part('template-parts/content/content', 'excerpt'); ?>
		<?php endwhile; ?>

	<?php else : ?>
		<?php get_template_part('template-parts/content/content-none'); ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>