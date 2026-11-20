#!/usr/bin/env node
// Proxy browser-sync to this theme's Local WP nginx port (from ~/.config/Local/sites.json)
import { spawn } from 'node:child_process';
import { readFileSync } from 'node:fs';
import { homedir } from 'node:os';
import path from 'node:path';
import { fileURLToPath } from 'node:url';

const root = path.resolve(path.dirname(fileURLToPath(import.meta.url)), '../..');
const site = Object.values(
	JSON.parse(readFileSync(path.join(homedir(), '.config/Local/sites.json'), 'utf8'))
).find(s => s.path && root.startsWith(path.resolve(s.path)));

const port = site?.services?.nginx?.ports?.HTTP?.[0];
if (!port) {
	console.error('No Local nginx port for this theme (is the site running?)');
	process.exit(1);
}

console.log(`[browser-sync-local] ${site.name} → localhost:${port}`);

spawn(
	'browser-sync',
	[
		'start',
		'--proxy',
		`localhost:${port}`,
		'--no-inject-changes',
		'--files',
		'**/*.php, **/*.css, **/*.js',
		'--ignore',
		'node_modules/**/*'
	],
	{stdio: 'inherit', shell: true}
).on('exit', code => process.exit(code ?? 1));
