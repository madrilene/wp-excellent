<?php
wp_nav_menu([
	'container' => 'nav',
	'container_id' => 'primary-menu',
	'container_class' =>
		'navbar hidden font-semibold pt-2 pb-3 space-y-1 justify-center',
	'container_aria_label' => 'Primary',
	'menu_class' => 'z-30 flex flex-col mt-4',
	'theme_location' => 'primarymobile',
	'li_class' => '',
	'fallback_cb' => false,
	'depth' => 0,
	'submenu_class' => 'relative z-20 text-xs list-none hidden',
	'link_class' => 'px-2  py-3  block relative ',
]);
?>