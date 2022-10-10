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
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
</svg>

  </button>
</template>


<?php endif; ?>
