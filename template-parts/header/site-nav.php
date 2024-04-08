<?php

/**
 * Primary nav
 *
 * @package wp-excellent
 */

?>


<?php if (has_nav_menu('primary')) : ?>

	<?php
	wp_nav_menu(
		array(
			'container'            => 'nav',
			'container_id'         => 'primary-menu',
			'container_class'      => 'site-nav-drawer',
			'container_aria_label' => 'Main',
			'items_wrap'           => '<ul id="%1$s" class="%2$s" role="list" >%3$s</ul>',
			'menu_class'           => 'cluster',
			'theme_location'       => 'primary',
			'li_class'             => '',
		)
	);
	?>

	<!--  template element holding a button that needs to be injected when JavaScript is finally available. Source: https://web.dev/website-navigation/ -->

	<template id="burger-template">
		<button type="button" aria-expanded="false" aria-label="Menu" aria-controls="mainnav">
			<span>Menu</span>

			<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
				<path d="M5 12h14" />
				<path d="M12 5v14" />
			</svg>
		</button>
	</template>



<?php endif; ?>