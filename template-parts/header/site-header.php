<?php

/**
 * Header with logo, menu and hero image.
 * If is front page, data from ACF fields is pulled in.
 *
 * @package wp-excellent
 */

?>

<header class="wrapper">
	<div class="repel ontop">
		<?php get_template_part('template-parts/header/site', 'branding'); ?>
		<?php get_template_part('template-parts/header/site', 'nav'); ?>
	</div>
</header>