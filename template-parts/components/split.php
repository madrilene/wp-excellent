<?php

/**
 * Optional ACF split/cards component.
 *
 * Expects a repeater `sections` with nested `left` / `right` groups
 * (title, content, link as post object).
 *
 * @package wp-excellent
 */

if (! function_exists('have_rows') || ! have_rows('sections')) {
	return;
}

while (have_rows('sections')) :
	the_row();
	?>
	<div class="wrapper">
		<div class="region grid" data-layout="50-50">
			<?php
			foreach (array('left', 'right') as $side) :
				if (! have_rows($side)) {
					continue;
				}
				?>
				<article class="card flow">
					<?php
					while (have_rows($side)) :
						the_row();
						?>
						<?php if (get_sub_field('title')) : ?>
							<h2><?php the_sub_field('title'); ?></h2>
						<?php endif; ?>
						<?php the_sub_field('content'); ?>
						<?php
						$link_post = get_sub_field('link');
						if ($link_post) :
							?>
							<p><a href="<?php echo esc_url(get_permalink($link_post->ID)); ?>"><?php echo esc_html(get_the_title($link_post->ID)); ?></a></p>
						<?php endif; ?>
					<?php endwhile; ?>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
	<?php
endwhile;
