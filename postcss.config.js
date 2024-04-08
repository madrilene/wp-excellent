import postcssImport from 'postcss-import';
import postcssImportExtGlob from 'postcss-import-ext-glob';
import tailwindcss from 'tailwindcss';
import autoprefixer from 'autoprefixer';
import cssnano from 'cssnano';

export default {
	plugins: [
		postcssImportExtGlob(),
		postcssImport(),
		tailwindcss(),
		autoprefixer(),
		cssnano()
	]
};
