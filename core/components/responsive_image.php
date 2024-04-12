<?php

/**
 * Renders a responsive image element for a specified image ID and size.
 *
 * This function retrieves various attributes of the specified image (such as URL, srcset, sizes, and alt text)
 * and generates the corresponding HTML for a responsive <picture> element. This allows the browser to select
 * the most appropriate image size based on the current viewport width.
 *
 * @param int|string $image_id The attachment ID of the image in WordPress.
 * @param string $size Optional. The size of the image (name of the WordPress image size). Default 'full'.
 * @return void Outputs the HTML for a picture element, does not return.
 */

namespace wpexcellent;

function responsive_image($image_id, $size = 'full', $loading = 'lazy')
{
	if (!$image_id) {
		return;
	}

	$img_url = wp_get_attachment_image_url($image_id, $size);
	$img_srcset = wp_get_attachment_image_srcset($image_id, $size);
	$img_sizes = wp_get_attachment_image_sizes($image_id, $size);
	$img_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); // Provide a default alt if empty.

?>
	<picture>
		<source srcset="<?php echo esc_attr($img_srcset); ?>" sizes="<?php echo esc_attr($img_sizes); ?>">
		<img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($img_alt); ?>" loading="<?php echo esc_attr($loading); ?>" />
	</picture>
<?php
}
