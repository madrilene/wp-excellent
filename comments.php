<?php

/**
 * The template for displaying comments
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
	return;
}
?>

<aside id="comments" class="flow full wrapper | comments">

	<?php if (have_comments()) : ?>
		<h2>
			<?php
			$comments_number = get_comments_number();
			printf( // WPCS: XSS OK.
				esc_html(_nx('One comment', '%1$s comments', $comments_number, 'comments title', 'textdomain')),
				number_format_i18n($comments_number)
			);
			?>
		</h2>

		<!-- Import custom comment template from core -->

		<ol class="commentlist">
			<?php wp_list_comments('short_ping=true,avatar_size=60,max_depth=3,&callback=wpexcellent\\comment_template'); ?>
		</ol>

		<?php
		// Are there comments to navigate through?
		if (get_comment_pages_count() > 1 && get_option('page_comments')) :
		?>
			<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
				<h2 class="screen-reader-text"><?php esc_html_e('Comment navigation', 'textdomain'); ?></h2>
				<div class="nav-links">
					<?php
					if ($prev_link = get_previous_comments_link(__('Older Comments', 'textdomain'))) :
						printf('<div class="nav-previous">%s</div>', $prev_link);
					endif;

					if ($next_link = get_next_comments_link(__('Newer Comments', 'textdomain'))) :
						printf('<div class="nav-next">%s</div>', $next_link);
					endif;
					?>
				</div>
			</nav>
		<?php endif; ?>

	<?php endif; ?>

	<?php
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
	?>
		<p class="no-comments"><?php esc_html_e('Comments are closed.', 'textdomain'); ?></p>
	<?php endif; ?>

	<?php
	comment_form(array(
		'format' => 'html5',
		'class_container' => 'flow',
		'class_submit' => 'asdfbutton',
		'class_form' => 'comment-form | flow',
	));
	?>

</aside><!-- #comments -->