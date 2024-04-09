# wp-excellent

Starter for classic PHP WordPress theme.
Based on the workflow suggested by Andy Bell's https://buildexcellentwebsit.es/.

## Contents

- [Using this](#using-this)
- [Credits](#credits)

## Using this

Edit CSS and JS in `_resources`. Fonts and images in `assets`.
For production run production build and upload in your theme folder:

- assets
- core
- css
- js
- template-parts
- Wordpress PHP files
- screenshot.jpg
- style.css

## Install dependencies

```
- npm install
```

### Working with browser-sync

Creates a dev server (browser-sync) with hot reload on **localhost:3000**, pointing to the domain created by _LocalWP_. The domain (eg "wp-excellent.local", "localhost:10028", etc.) must correspond to the "site host" created by Local. Change both occurrences of "localhost:10028" in the `scripts` section of `package.json`:

```json

"browser-sync": "browser-sync start --proxy \"localhost:10028\" --host=\"localhost:10028\" --no-inject-changes --files=\"./\"",

```

I might change that in the future, as LocalWP now offers hot [reload out of the box](https://localwp.com/help-docs/local-features/instant-reload/). But for now it only watches wp-content/plugins and wp-content/themes for changes to .css files.

```
npm start
```

## Creating a production build

```
npm run production
```

## Credits

**Andy Bell**
Andy recently came up an approach that incorporates Tailwind CSS into his methodology.

- https://cube.fyi/
- https://buildexcellentwebsit.es/

**Heydon Pickering**
I really like Heydon's approaches and recommend reading his books.

- https://every-layout.dev/
- https://inclusive-components.design/

**Tailwind**

- https://tailwindcss.com/
