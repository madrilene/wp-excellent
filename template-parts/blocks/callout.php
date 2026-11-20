<?php

/**
 * Callout block template (sample dynamic block).
 *
 * @package wp-excellent
 *
 * @var array $args Template arguments.
 */

defined('ABSPATH') || exit;

$attributes = $args['attributes'] ?? array();
$heading    = $attributes['heading'] ?? '';
$body       = $attributes['body'] ?? '';
?>

<aside class="callout | flow">
	<?php if ($heading) : ?>
		<h2 class="callout__heading"><?php echo esc_html($heading); ?></h2>
	<?php endif; ?>
	<?php if ($body) : ?>
		<p class="callout__body"><?php echo esc_html($body); ?></p>
	<?php endif; ?>
</aside>
