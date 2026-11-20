<?php

/**
 * Theme Gutenberg blocks — registration and sample callout.
 *
 * Pattern: editor JS in _resources/blocks → npm run build:blocks → blocks/
 * PHP register_block_type + render_callback → template-parts/blocks/
 *
 * @package wp-excellent
 */

defined('ABSPATH') || exit;

/**
 * Register theme block category.
 *
 * @param array $categories Block categories.
 * @return array
 */
function wpexcellent_register_block_category($categories)
{
	return array_merge(
		array(
			array(
				'slug'  => 'wpexcellent-theme',
				'title' => __('Theme', 'wp-excellent'),
			),
		),
		$categories
	);
}
add_filter('block_categories_all', 'wpexcellent_register_block_category', 10, 1);

/**
 * Register theme blocks and editor script.
 *
 * @return void
 */
function wpexcellent_register_blocks()
{
	$asset_file = get_template_directory() . '/blocks/index.asset.php';
	$asset      = file_exists($asset_file) ? require $asset_file : array(
		'dependencies' => array(),
		'version'      => wp_get_theme()->get('Version'),
	);

	wp_register_script(
		'wpexcellent-blocks',
		get_template_directory_uri() . '/blocks/index.js',
		$asset['dependencies'],
		$asset['version'],
		true
	);

	register_block_type(
		'wpexcellent/callout',
		array(
			'attributes'      => array(
				'heading' => array(
					'type'    => 'string',
					'default' => __('Callout heading', 'wp-excellent'),
				),
				'body'    => array(
					'type'    => 'string',
					'default' => __('Short supporting text for this callout.', 'wp-excellent'),
				),
			),
			'render_callback' => 'wpexcellent_render_callout',
			'editor_script'   => 'wpexcellent-blocks',
		)
	);
}
add_action('init', 'wpexcellent_register_blocks');

/**
 * Render the callout block.
 *
 * @param array $attributes Block attributes.
 * @return string
 */
function wpexcellent_render_callout($attributes)
{
	ob_start();
	get_template_part(
		'template-parts/blocks/callout',
		null,
		array(
			'attributes' => $attributes,
		)
	);
	return ob_get_clean();
}
