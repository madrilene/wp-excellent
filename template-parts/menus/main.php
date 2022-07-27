<!--  depth => 1 defines that just the first level of the hierarchy is included on desktop. No expandable submenu. -->

<?php wp_nav_menu([
	'container' => 'nav',
	'container_id' => 'primary-menu',
	'container_class' => 'navbar',
	'container_aria_label' => 'Primary',
	'items_wrap' => '<ul id="%1$s" class="%2$s" role="menu" >%3$s</ul>',
	'menu_class' => 'navlist',
	'theme_location' => 'primary',
	'li_class' => '',
	'fallback_cb' => false,
	'depth' => 1,
	'submenu_class' => '',
	'link_class' => '',
]);
?>