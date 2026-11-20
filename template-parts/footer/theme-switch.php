<?php
/**
 * Light / dark theme switcher (progressive: hidden without JS via CSS).
 *
 * @package wp-excellent
 */
?>
<div
	role="region"
	class="theme-switch | cluster"
	style="--cluster-horizontal-alignment: center;"
	aria-labelledby="theme-switcher-label"
	data-theme-switcher
>
	<h2 id="theme-switcher-label"><?php esc_html_e('Theme', 'wp-excellent'); ?></h2>
	<button type="button" class="button" id="light-theme-toggle" data-theme="light">
		<span><?php esc_html_e('Light', 'wp-excellent'); ?></span>
	</button>
	<button type="button" class="button" id="dark-theme-toggle" data-theme="dark">
		<span><?php esc_html_e('Dark', 'wp-excellent'); ?></span>
	</button>
</div>
