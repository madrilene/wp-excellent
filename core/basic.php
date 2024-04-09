<?php

/**
 * Basic setup
 *
 * Registers nav menus, adds theme support and enqueues scripts and styles.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp-excellent
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @return void
 */
function setup()
{
	register_nav_menus(
		array(
			'primary' => __('Primary Menu', 'wp-excellent'),
			'footer'  => __('Footer Menu', 'wp-excellent'),
		)
	);

	/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
	add_theme_support('title-tag');

	/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		)
	);

	/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
	add_theme_support('custom-logo');

	/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */

	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'setup');


/**
 * Enqueue scripts and styles.
 *
 * @return void
 */
function enqueue_scripts()
{
	$theme = wp_get_theme();

	// theme base.
	wp_enqueue_style('global', asset('css/global.css'), array(), $theme->get('Version'));
	wp_enqueue_script('app', asset('js/app.js'), array(), $theme->get('Version'), true);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');



/**
 * Environment functionality
 *
 * @param string $path
 * @return {string} The current environment type.
 */
function asset($path)
{
	if (wp_get_environment_type() === 'production') {
		return get_stylesheet_directory_uri() . '/' . $path;
	}
	return add_query_arg('time', time(), get_stylesheet_directory_uri() . '/' . $path);
}


// get all includes

// acf stuff
require get_template_directory() . '/core/inc/acf.php';

// Custom template tags for the theme.
require get_template_directory() . '/core/inc/template-tags.php';

// Block Patterns.
require get_template_directory() . '/core/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/core/inc/block-styles.php';

// Comment template
require get_template_directory() . '/core/inc/comment_template.php';
