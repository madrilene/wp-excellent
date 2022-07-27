'use strict';

window.addEventListener('load', function () {
	// show version on starter
	const version = document.querySelector('.wpexcellent-version');
	version.innerHTML = 'v1.0.0';

	// Navigation toggle
	const navigationToggle = document.querySelector('[data-id="nav-toggle"]');
	const navigationItems = document.querySelector('#primary-menu');
	let navIsOpen = false;
	navigationToggle.addEventListener(
		'click',
		function (event) {
			navIsOpen = !navIsOpen;
			navIsOpen
				? ((navigationToggle.querySelector('span').textContent = 'Close'),
				  navigationToggle
						.querySelector('.menuClosedIcon')
						.classList.add('hidden'),
				  navigationToggle
						.querySelector('.menuOpenIcon')
						.classList.remove('hidden'),
				  navigationToggle.setAttribute('aria-expanded', 'true'))
				: ((navigationToggle.querySelector('span').textContent = 'Menu'),
				  navigationToggle
						.querySelector('.menuClosedIcon')
						.classList.remove('hidden'),
				  navigationToggle
						.querySelector('.menuOpenIcon')
						.classList.add('hidden'),
				  navigationToggle.setAttribute('aria-expanded', 'false'));
			navigationItems.classList.toggle('hidden');
		},
		false
	);

	// mobile dropdown toggle + close dropdown on click outside
	let menuItems = document.querySelectorAll('.menu-item-has-children');
	Array.prototype.forEach.call(menuItems, function (el) {
		el.querySelector('a').addEventListener('click', function (event) {
			if (this.getAttribute('aria-expanded') === 'false') {
				this.parentNode.classList.remove('navicon-down');
				this.classList.add('navicon-up');
				this.classList.remove('navicon-down');
				this.nextElementSibling.classList.add('block');
				this.nextElementSibling.classList.remove('hidden');
				this.setAttribute('aria-expanded', 'true');
			} else {
				this.classList.remove('navicon-up');
				this.classList.add('navicon-down');
				this.nextElementSibling.classList.add('hidden');
				this.nextElementSibling.classList.remove('block');
				this.setAttribute('aria-expanded', 'false');
			}
			event.preventDefault();
			return false;
		});
	});

	// cards redundant click, accessible whole card clickable solution

	const cards = [...document.querySelectorAll('.card')];
	cards.forEach(card => {
		card.style.cursor = 'pointer';
		let down,
			up,
			link = card.querySelector('h3 a');
		card.onmousedown = () => (down = +new Date());
		card.onmouseup = () => {
			up = +new Date();
			if (up - down < 200) {
				link.click();
			}
		};
	});

	// end
});
