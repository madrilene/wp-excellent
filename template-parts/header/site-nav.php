<?php
/**
 * Primary nav
 *
 * @package wp-excellent
 */

?>


<?php if ( has_nav_menu( 'primary' ) ) : ?>

	<?php
	wp_nav_menu(
		array(
			'container'            => 'nav',
			'container_id'         => 'primary-menu',
			'container_class'      => 'navbar',
			'container_aria_label' => 'Primary navigation',
			'items_wrap'           => '<ul id="%1$s" class="%2$s" role="menu" >%3$s</ul>',
			'menu_class'           => 'navlist',
			'theme_location'       => 'primary',
			'li_class'             => '',
		)
	);
	?>

<template id="burger-template">
  <button type="button" aria-expanded="false" aria-label="Menu" aria-controls="primary-menu">
	<svg width="24" height="24" aria-hidden="true">
	  <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z">
	</svg>
  </button>
</template>


<?php endif; ?>
