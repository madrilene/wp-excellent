<?php

// 'Basic Theme support

function setup() {
add_theme_support( 'title-tag' );

register_nav_menus(
array(
'primary' => __( 'Primary Menu', 'wp-excellent-starter' ),
'primarymobile' => __( 'Primary Menu Mobile', 'wp-excellent-starter' ),
'top' => __( 'Top Menu', 'wp-excellent-starter' ),
'footer' => __( 'Footer Menu', 'wp-excellent-starter' ),
)
);

add_theme_support(
'html5',
array(
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
)
);

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

add_image_size( 'image-xl', 1536, 700 ); // news preview startseite
add_image_size( 'image-2xl', 1280, 600 ); // news preview startseite

add_theme_support( 'align-wide' );
add_theme_support( 'wp-block-styles' );

add_theme_support( 'editor-styles' );
add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'setup' );

// Enqueue theme assets
function enqueue_scripts() {
$theme = wp_get_theme();
wp_enqueue_style( 'wp-excellent-starter', asset( 'css/global.css' ), array(), $theme->get( 'Version' ) );
wp_enqueue_script( 'wp-excellent-starter', asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );


// Get asset path
function asset( $path ) {
if ( wp_get_environment_type() === 'production' ) {
return get_stylesheet_directory_uri() . '/' . $path;
}
return add_query_arg( 'time', time(), get_stylesheet_directory_uri() . '/' . $path );
}