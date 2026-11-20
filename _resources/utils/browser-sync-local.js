#!/usr/bin/env node
// Proxy browser-sync to this theme's Local WP nginx port (from ~/.config/Local/sites.json)
import {spawn} from 'node:child_process';
import {readFileSync} from 'node:fs';
import {createRequire} from 'node:module';
import {homedir} from 'node:os';
import path from 'node:path';
import {fileURLToPath} from 'node:url';

const root = path.resolve(path.dirname(fileURLToPath(import.meta.url)), '../..');
const site = Object.values(
	JSON.parse(readFileSync(path.join(homedir(), '.config/Local/sites.json'), 'utf8'))
).find(s => s.path && root.startsWith(path.resolve(s.path)));

const port = site?.services?.nginx?.ports?.HTTP?.[0];
if (!port) {
	console.error('No Local nginx port for this theme (is the site running?)');
	process.exit(1);
}

const browserSync = createRequire(import.meta.url).resolve('browser-sync/dist/bin.js');

console.log(`[browser-sync-local] ${site.name} → localhost:${port}`);

spawn(
	process.execPath,
	[
		browserSync,
		'start',
		'--proxy',
		`localhost:${port}`,
		'--no-inject-changes',
		'--files',
		'**/*.php, **/*.css, **/*.js',
		'--ignore',
		'node_modules/**/*'
	],
	{stdio: 'inherit'}
).on('exit', code => process.exit(code ?? 1));
