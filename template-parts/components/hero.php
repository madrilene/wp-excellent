<?php

/**
 * Optional ACF hero component.
 *
 * Expects a group field `hero` with subfields:
 * - background (image ID)
 * - title (text)
 * - subtitle (text)
 *
 * @package wp-excellent
 */

if (! function_exists('get_field') || ! have_rows('hero')) {
	return;
}
?>

<div class="hero | wrapper">
	<?php
	while (have_rows('hero')) :
		the_row();
		$image_id = get_sub_field('background');
		if ($image_id) {
			wpexcellent\responsive_image($image_id, 'full', 'eager');
		}
		?>
		<header>
			<h1>
				<?php if (get_sub_field('title')) : ?>
					<?php the_sub_field('title'); ?>
				<?php else : ?>
					<?php echo esc_html(get_bloginfo('name')); ?>
				<?php endif; ?>
				<?php if (get_sub_field('subtitle')) : ?>
					<span><?php the_sub_field('subtitle'); ?></span>
				<?php endif; ?>
			</h1>
		</header>
	<?php endwhile; ?>
</div>
