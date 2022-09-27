# wp-excellent

My current starter theme for WordPress is called _excellent_, not because I consider it to be excellent 🙃, but because it is based on the workflow suggested by Andy Bell's https://buildexcellentwebsit.es/.

## Contents

- [Editor workflow](#editor-workflow)
- [Using this](#using-this)
- [Credits](#credits)

## Editor workflow

...

## Using this

### Install dependencies

```
- npm install
- composer install
```

### Working locally

Creates a dev server (browser-sync) with hot reload on localhost:3000, pointing to the domain created by local by flywheel. Must be edited in package.json.

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

## Logbook

### 22-09-27

Updated menu and other files.

### 22-07-27

some updates and some new style files. Layout now looking ok. new screenshot.

### 22-07-26

Tried finding a good combination of automatic style formatting respecting the PHP Wordpress standards and failed. Now using a half-manual config of Prettier.

### 22-07-25

- created first version. still problems in utility export from tailwind
