# wp-excellent

Classic PHP WordPress starter using the [buildexcellentwebsit.es](https://buildexcellentwebsit.es/) workflow: Cube CSS, Every Layout, Utopia design tokens, and constrained Tailwind utilities. Sibling of [eleventy-excellent](https://github.com/madrilene/eleventy-excellent).

Requires **Node ≥ 22**.

## Contents

- [wp-excellent](#wp-excellent)
     - [Contents](#contents)
     - [Install](#install)
     - [Develop](#develop)
     - [Design tokens](#design-tokens)
     - [Gutenberg blocks](#gutenberg-blocks)
     - [Production build](#production-build)
     - [Deploy](#deploy)
     - [Credits](#credits)

## Install

```bash
npm install
npm run production
```

Built assets land in `dist/` (CSS, front JS, Gutenberg bundles) — not committed. Run a production build after clone before activating the theme.

## Develop

Edit CSS/JS under `_resources`. Fonts and images live in `assets`.

`npm start` runs browser-sync (proxy your LocalWP host), PostCSS watch, esbuild watch, and the Gutenberg blocks watcher. It proxies via Local’s `sites.json` (auto-detects this site’s nginx port). Start the site in Local first.

```bash
npm start
```

## Design tokens

JSON tokens live in `_resources/design-tokens/`.

Generate the full palette from `colorsBase.json`:

```bash
npm run colors
```

Then rebuild CSS (`npm run css` or via `npm start`). Light/dark themes use `data-theme` plus `prefers-color-scheme` in `_resources/css/global/variables.css`.

## Gutenberg blocks

Dynamic SSR blocks follow this pattern (same idea as client themes built on this starter):

1. Editor source: `_resources/blocks/*.js` (entry `index.js`)
2. Build: `npm run build:blocks` → `dist/blocks/index.js` + `dist/blocks/index.asset.php`
3. Register in `core/inc/blocks.php` with `register_block_type` + `render_callback`
4. Markup: `template-parts/blocks/`
5. Styles: `_resources/css/blocks/` (picked up by the global CSS glob)

Sample block: **Callout** (`wpexcellent/callout`) in the Theme category.

```bash
npm run dev:blocks    # watch
npm run build:blocks  # production
```

To add another block: create `_resources/blocks/my-block.js`, import it from `index.js`, register + render in PHP, add a template part and CSS file.

ACF JSON can still live under `_config/acf-json` for page fields — this is not an ACF-blocks setup.

## Production build

```bash
npm run production
```

Runs minified CSS, minified front JS, and `build:blocks`.

## Deploy

Run `npm run production`, then upload:

- `assets/`
- `core/`
- `dist/` (generated)
- `template-parts/`
- WordPress PHP templates (`*.php` at theme root)
- `screenshot.jpg`
- `style.css`
- `site.webmanifest`

Do not upload `_resources/`, `node_modules/`, or config-only files unless you need them on the server.

## Credits

**Andy Bell** — Cube / buildexcellentwebsit.es
**Heydon Pickering** — Every Layout, inclusive components
**Tailwind CSS** — utility generation bridged to design tokens
