<?php
/**
 * Filters
 *
 * Special filters needed by the theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp-excellent
 */


 /**
  * Change the read more link for excerpts
  *
  * Replace the excerpt with the new replacement string.
  *
  * @param string $read_more_text is never used.
  */


function read_more_link( $read_more_text ) {

	global $post;
	$new_read_more = '... <a href="' . get_permalink( $post->ID ) . '">' . esc_html__( 'Read more!!', 'wp-excellent' ) . '</a>';
	return $new_read_more;
}
add_filter( 'excerpt_more', 'read_more_link', 20 );
