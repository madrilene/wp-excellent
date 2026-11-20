<?php

/**
 * Custom template tags for this theme
 *
 * @package wp-excellent
 */

if (! function_exists('wpexcellent_post_thumbnail')) {
	/**
	 * Displays an optional post thumbnail.
	 *
	 * @return void
	 */
	function wpexcellent_post_thumbnail()
	{
		if (! has_post_thumbnail()) {
			return;
		}
		?>
		<figure class="post-thumbnail">
			<?php
			if (is_singular()) {
				the_post_thumbnail('post-thumbnail', array('loading' => false));
			} else {
				?>
				<a class="post-thumbnail-inner" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
					<?php the_post_thumbnail('post-thumbnail'); ?>
				</a>
				<?php
			}
			if (wp_get_attachment_caption(get_post_thumbnail_id())) :
				?>
				<figcaption class="wp-caption-text"><?php echo wp_kses_post(wp_get_attachment_caption(get_post_thumbnail_id())); ?></figcaption>
			<?php endif; ?>
		</figure>
		<?php
	}
}

if (! function_exists('wpexcellent_the_posts_navigation')) {
	/**
	 * Print next/previous posts navigation with cluster layout.
	 *
	 * @return void
	 */
	function wpexcellent_the_posts_navigation()
	{
		ob_start();

		the_posts_pagination(
			array(
				'before_page_number' => esc_html__('Page', 'wp-excellent') . ' ',
				'mid_size'           => 0,
				'prev_text'          => sprintf(
					'%s <span class="nav-prev-text">%s</span>',
					is_rtl() ? '→' : '←',
					wp_kses(
						__('Newer <span class="nav-short">posts</span>', 'wp-excellent'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					)
				),
				'next_text'          => sprintf(
					'<span class="nav-next-text">%s</span> %s',
					wp_kses(
						__('Older <span class="nav-short">posts</span>', 'wp-excellent'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					is_rtl() ? '←' : '→'
				),
			)
		);

		$pagination = ob_get_clean();
		$pagination = str_replace('<div class="nav-links"', '<div class="cluster"', $pagination);

		echo $pagination; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
