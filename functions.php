<?php

/**
 * functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp-excellent
 */


include_once 'core/basic.php';
include_once 'core/helper.php';
require_once 'core/filter.php';

// components
foreach (glob(get_template_directory() . '/core/components/*.php') as $file) {
	require $file;
}
