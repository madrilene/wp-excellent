<?php if (have_rows('rechtsgebiete')) : ?>
	<?php while (have_rows('rechtsgebiete')) : the_row(); ?>

		<div class="wrapper">
			<div class="region grid" data-layout="50-50">

				<?php if (have_rows('links')) : ?>
					<article class="card flow">
						<?php while (have_rows('links')) : the_row(); ?>
							<h2><?php the_sub_field('titel'); ?></h2>
							<?php the_sub_field('inhalt'); ?>
							<?php
							$link_post = get_sub_field('link'); // Assuming 'link' is now set to return a Post Object
							if ($link_post) :
								$link_url = get_permalink($link_post->ID); // Get the URL of the linked page
								$link_title = get_the_title($link_post->ID); // Get the title of the linked page
							?>
								<p><a href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a></p>
							<?php endif; ?>
						<?php endwhile; ?>
					</article>
				<?php endif; ?>

				<?php if (have_rows('rechts')) : ?>
					<article class="card flow">
						<?php while (have_rows('rechts')) : the_row(); ?>
							<h2><?php the_sub_field('titel'); ?></h2>
							<?php the_sub_field('inhalt'); ?>
							<?php
							$link_post = get_sub_field('link'); // Assuming 'link' is now set to return a Post Object
							if ($link_post) :
								$link_url = get_permalink($link_post->ID); // Get the URL of the linked page
								$link_title = get_the_title($link_post->ID); // Get the title of the linked page
							?>
								<p><a href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a></p>
							<?php endif; ?>
						<?php endwhile; ?>
					</article>
				<?php endif; ?>

			</div>
		</div>

	<?php endwhile; ?>
<?php endif; ?>