import {globSync} from 'node:fs';
import path from 'node:path';
import postcssImport from 'postcss-import';
import tailwindcss from 'tailwindcss';
import autoprefixer from 'autoprefixer';
import cssnano from 'cssnano';

const isProd = process.env.NODE_ENV === 'production';

export default {
	plugins: [
		postcssImport({
			resolve(id, basedir) {
				if (!id.includes('*')) {
					return id;
				}
				return globSync(id, {cwd: basedir})
					.sort()
					.map(file => path.join(basedir, file));
			}
		}),
		tailwindcss(),
		autoprefixer(),
		...(isProd ? [cssnano()] : [])
	]
};
