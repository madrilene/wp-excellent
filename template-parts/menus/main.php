<!--  depth => 1 defines that just the first level of the hierarchy is included on desktop. No expandable submenu. -->

<?php
				wp_nav_menu(
					array(
            'container'             => 'nav',
						'container_id'          => 'primary-menu',
						'container_class'       => 'navbar font-semibold pt-2 pb-3 px-2 space-y-1 justify-center lg:justify-end hidden md:py-2 md:flex md:space-x-8',
            'container_aria_label'  => 'Primary',
						'menu_class'            => 'z-30 flex flex-col mt-4 md:flex-row md:items-center md:space-x-6 md:mt-0',
						'theme_location'        => 'primary',
						'li_class'              => '',
						'fallback_cb'           => false,
            'depth'                  => 1,
            'submenu_class'         => 'pl-4 md:px-2 relative z-20 md:absolute md:transform md:translate-y-4 text-sm md:text-lg xl:text-xl list-none md:divide-y md:divide-blue-500 bg-gray-200 md:bg-white md:border-2 md:border-black md:w-44 hidden',
            'link_class'            => 'px-2 sm:px-6 md:px-0 py-3  block relative '
					)
				);
				?>