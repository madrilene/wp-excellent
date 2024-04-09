<?php

namespace wpexcellent;

function comment_template($comment, $args, $depth)
{
	$tag = ('div' === $args['style']) ? 'div' : 'li';
	$add_below = ('div' === $args['style']) ? 'comment' : 'div-comment';
?>
	<<?php echo $tag; ?> <?php comment_class(empty($args['has_children']) ? '' : 'parent'); ?> id="comment-<?php comment_ID() ?>">
		<?php if ('div' !== $args['style']) : ?>
			<div id="div-comment-<?php comment_ID() ?>" class="flow">
			<?php endif; ?>
			<div class="comment-author vcard">
				<?php
				if ($args['avatar_size'] != 0) {
					echo get_avatar($comment, $args['avatar_size']);
				}
				printf(
					// Translators: %s is the comment author link.
					__('<cite class="fn">%s</cite> <span class="says">says:</span>', 'wp-excellent'),
					get_comment_author_link()
				);
				?>
			</div>
			<?php if ($comment->comment_approved == '0') : ?>
				<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'wp-excellent'); ?></em>
				<br />
			<?php endif; ?>
			<div class="comment-meta">
				<a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>">
					<?php
					printf(
						// Translators: 1: comment date, 2: comment time.
						__('%1$s at %2$s', 'wp-excellent'),
						get_comment_date(),
						get_comment_time()
					);
					?>
				</a>
				<?php edit_comment_link(__('(Edit)', 'wp-excellent'), '  ', ''); ?>
			</div>
			<?php comment_text(); ?>
			<div class="reply">
				<?php
				comment_reply_link(
					array_merge(
						$args,
						array(
							'add_below' => $add_below,
							'depth'     => $depth,
							'max_depth' => $args['max_depth']
						)
					)
				);
				?>
			</div>
			<?php if ('div' !== $args['style']) : ?>
			</div>
	<?php endif;
		}
