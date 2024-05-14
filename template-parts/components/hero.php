<div class="hero | wrapper">

	<?php $hero = get_field('hero'); ?>

	<?php if (have_rows('hero')) : ?>
		<?php while (have_rows('hero')) : the_row(); ?>

			<!-- BG image -->
			<?php
			$image_id = get_sub_field('hintergrund');
			if ($image_id) {
				wpexcellent\responsive_image($image_id, 'full', 'eager');
			}
			?>

			<header>
				<h1>
					<!-- main title -->
					<?php if (get_sub_field('titel')) : ?>
						<?php the_sub_field('titel'); ?>
					<?php else : ?>
						Kamps & Kollegen
					<?php endif; ?>
					<!-- subtitle -->
					<span>
						<?php if (get_sub_field('untertitel')) : ?>
							<?php the_sub_field('untertitel'); ?>
						<?php else : ?>
							Rechtsanwälte
						<?php endif; ?>
					</span>
				</h1>
			</header>

		<?php endwhile; ?>
	<?php endif; ?>

</div>