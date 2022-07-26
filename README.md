# wp-excellent

This is my developer profile. It's built with Eleventy, Javascript and CSS. Based on my personal opiniated Eleventy Starter for client projects, it still brings a lot of preconfigurations I'll have to strip out. It is quite over-engineered considering the simplicity of the page.
This is also where I try new stuff, so things might be a little inconsistent and verbose.

- [Using this](#using-this)
- [Credits](#credits)
- [Logbook](#logbook)

## Using this

### Install dependencies

```
npm install
```

### Working locally

Creates a dev server via browser-sync which then points to the domain created by local by flywheel. Must be edited in package.json.

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
His CSS methodology and ideas in gerneal make sense to me. Has recently published an approach that incorporates Tailwind CSS into his methodology.

- https://cube.fyi/
- https://buildexcellentwebsit.es/

**Heydon Pickering**
I strongly orientate myself on Heydon's approaches and love his books.

- https://every-layout.dev/
- https://inclusive-components.design/

**Tailwind**

- https://tailwindcss.com/

## Logbook

### 22-07-26

Tried finding a good combination of automatic style formatting respecting the PHP Wordpress standards and failed. Now using a half-manual config of Prettier.

### 22-07-25

- created first version. still problems in utility export from tailwind
