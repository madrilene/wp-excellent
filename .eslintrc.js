module.exports = {
	extends: [' plugin:@wordpress/eslint-plugin/esnext '],
	env: {
		browser: true,
		node: true,
		es6: true,
	},
	plugins: [],
	rules: { 'linebreak-style': 0 },
};
