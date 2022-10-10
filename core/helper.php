<?php
/**
 * Helper Functions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp-excellent
 */

/**
 * Remove wp-embed script.
 *
 * @return void
 */
function disable_embed_js() {
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'disable_embed_js' );


/**
 * Remove emoji support.
 *
 * @return void
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Disable RSS.
 *
 * @return void
 */
function disable_rss() {
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'feed_links', 2 );
}
add_action( 'init', 'disable_rss' );

// Remove comment reply JS.
add_action(
	'wp_enqueue_scripts',
	function() {
		wp_dequeue_script( 'comment-reply' );
	}
);

// Add custom login form logo.
add_action(
	'login_head',
	function () {
		$url   = get_theme_file_uri( 'favicon.svg' );
		$width = 200;

		$styles = array(
			sprintf( 'background-image: url(%s);', $url ),
			sprintf( 'width: %dpx;', $width ),
			'background-position: center;',
			'background-size: contain;',
		);

		echo sprintf(
			'<style> .login h1 a { %s } </style>',
			implode( '', $styles )
		);
	}
);
