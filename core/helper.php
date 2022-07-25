<?php

/*
|--------------------------------------------------------------------------
| Helper Functions
|--------------------------------------------------------------------------
*/

// Remove wp-embed script

function disable_embed_js(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'disable_embed_js' );


// remove emoji support
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

// Remove rss feed links
function disable_rss() {
	remove_action( 'wp_head', 'feed_links_extra', 3 );
  remove_action( 'wp_head', 'feed_links', 2 );
}
add_action( 'init', 'disable_rss' );


// // remove wp-embed
// add_action( 'wp_footer', function(){
//     wp_dequeue_script( 'wp-embed' );
// });

add_action( 'wp_enqueue_scripts', function(){
    // // remove block library css
    // wp_dequeue_style( 'wp-block-library' );
    // // remove comment reply JS
    wp_dequeue_script( 'comment-reply' );
} );

// for wp-config.php
// define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', true );
// define('WP_POST_REVISIONS', false);
// define('WP_POST_REVISIONS', 5);