<?php
				wp_nav_menu(
					array(
            'container'             => 'nav',
						'container_id'          => 'secondary-menu',
						'container_class'       => 'hidden md:block absolute z-20 ml-4 flex items-center justify-end top-1 md:top-2 lg:top-10 right-0 pr-2 text-sm font-semibold text-gray-600',
            'container_aria_label'  => 'Zusatzmenü',
						'menu_class'            => 'ml-4 flex-shrink-0 flex divide-x divide-gray-400',
						'theme_location'        => 'top',
						'li_class'              => 'px-2',
						'fallback_cb'           => false,
            'link_class'            => '',
						'depth'                  => 1,
					)
				);
				?>