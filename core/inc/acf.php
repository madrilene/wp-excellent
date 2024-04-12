<?php

/**
 * ACF options
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp-excellent
 */

/**
 * Add options page.
 */

if (function_exists('acf_add_options_page')) {
	acf_add_options_page();
}


/**
 * Custom acf save point
 */

function my_acf_json_save_point($path)
{
	return get_stylesheet_directory() . '/_config/acf-json';
}
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

/**
 * Custom acf load point
 */

function my_acf_json_load_point($paths)
{
	// Remove the original path (optional).
	unset($paths[0]);

	// Append the new path and return it.
	$paths[] = get_stylesheet_directory() . '/_config/acf-json';

	return $paths;
}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');
