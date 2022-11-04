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

### Install dependencies

```
- npm install
- composer install
```

### Working locally

Creates a dev server (browser-sync) with hot reload on localhost:3000, pointing to the domain created by local by flywheel. The domain (eg "wpexcellent.local") Must be edited in scripts section of package.json.

```
npm start
```

### Creating a production build

Minify JS and CSS.

```
npm run production
```

## Credits

**Andy Bell**
His CSS methodology and ideas in gerneal make sense to me. He recently published an approach that incorporates Tailwind CSS into his methodology.

- https://cube.fyi/
- https://buildexcellentwebsit.es/

**Heydon Pickering**
I strongly orientate myself on Heydon's approaches and love his books.

- https://every-layout.dev/
- https://inclusive-components.design/

**Tailwind**

- https://tailwindcss.com/
