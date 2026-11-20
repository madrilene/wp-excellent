'use strict';

// Whole-card click when a card contains a single primary link.

window.addEventListener('load', () => {
	document.querySelectorAll('.card').forEach(card => {
		const link = card.querySelector('a');
		if (!link) {
			return;
		}

		card.style.cursor = 'pointer';
		let down = 0;

		card.addEventListener('mousedown', () => {
			down = Date.now();
		});

		card.addEventListener('mouseup', () => {
			if (Date.now() - down < 200) {
				link.click();
			}
		});
	});
});
