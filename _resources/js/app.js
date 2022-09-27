'use strict';

window.addEventListener('load', function () {
	// cards redundant click, accessible whole card clickable solution

	const cards = [...document.querySelectorAll('.card')];
	cards.forEach(card => {
		card.style.cursor = 'pointer';
		let down,
			up,
			link = card.querySelector('a');
		card.onmousedown = () => (down = +new Date());
		card.onmouseup = () => {
			up = +new Date();
			if (up - down < 200) {
				link.click();
			}
		};
	});

	// responsive and accessible website-navigation by Manuel Matuzović, https://web.dev/website-navigation/

	const nav = document.querySelector('nav');
	const list = nav.querySelector('ul');
	const burgerClone = document
		.querySelector('#burger-template')
		.content.cloneNode(true);

	const button = burgerClone.querySelector('button');
	button.addEventListener('click', e => {
		const isOpen = button.getAttribute('aria-expanded') === 'false';

		button.setAttribute('aria-expanded', isOpen);
	});

	nav.addEventListener('keyup', e => {
		if (e.code === 'Escape') {
			button.setAttribute('aria-expanded', false);
			button.focus();
		}
	});

	nav.insertBefore(burgerClone, list);
});
