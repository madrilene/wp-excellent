'use strict';

const storageKey = 'theme-preference';
const themeColors = {
	dark: '#2e2e2e',
	light: '#FFD000'
};

const theme = {
	value: getColorPreference()
};

// Set early so CSS can react before paint when possible
reflectPreference();

window.addEventListener('load', () => {
	const lightThemeToggle = document.querySelector('#light-theme-toggle');
	const darkThemeToggle = document.querySelector('#dark-theme-toggle');
	const switcher = document.querySelector('[data-theme-switcher]');

	if (!switcher) {
		return;
	}

	reflectPreference();
	updateMetaThemeColor();

	lightThemeToggle?.addEventListener('click', () => onClick('light'));
	darkThemeToggle?.addEventListener('click', () => onClick('dark'));

	lightThemeToggle?.setAttribute('aria-pressed', String(theme.value === 'light'));
	darkThemeToggle?.setAttribute('aria-pressed', String(theme.value === 'dark'));
});

window
	.matchMedia('(prefers-color-scheme: dark)')
	.addEventListener('change', ({matches: isDark}) => {
		if (getStoredPreference()) {
			return;
		}

		theme.value = isDark ? 'dark' : 'light';
		reflectPreference();
		updateMetaThemeColor();

		document
			.querySelector('#light-theme-toggle')
			?.setAttribute('aria-pressed', String(theme.value === 'light'));
		document
			.querySelector('#dark-theme-toggle')
			?.setAttribute('aria-pressed', String(theme.value === 'dark'));
	});

function onClick(themeValue) {
	theme.value = themeValue;
	document
		.querySelector('#light-theme-toggle')
		?.setAttribute('aria-pressed', String(themeValue === 'light'));
	document
		.querySelector('#dark-theme-toggle')
		?.setAttribute('aria-pressed', String(themeValue === 'dark'));
	setPreference();
}

function getStoredPreference() {
	try {
		return localStorage.getItem(storageKey);
	} catch {
		return null;
	}
}

function getColorPreference() {
	return (
		getStoredPreference() ||
		(window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light')
	);
}

function setPreference() {
	try {
		localStorage.setItem(storageKey, theme.value);
	} catch {
		// Preference not persisted; page still reflects the choice.
	}
	reflectPreference();
	updateMetaThemeColor();
}

function reflectPreference() {
	document.documentElement.setAttribute('data-theme', theme.value);
}

function updateMetaThemeColor() {
	const metaThemeColor = document.querySelector('meta[name="theme-color"]');
	if (!metaThemeColor) {
		return;
	}
	metaThemeColor.setAttribute(
		'content',
		theme.value === 'dark' ? themeColors.dark : themeColors.light
	);
}
