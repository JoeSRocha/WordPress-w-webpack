# WordPress with webpack Starter Kit
A starter kit to leverage the module bundler [webpack](https://webpack.js.org/) with your [WordPress](wordpress.org) theme. Tested with the official Automattic starter template [_underscore](https://underscores.me/), however should work with any template using the WP template structure standard.

## Getting Started
If you have not already done so, generate or create your theme parent. Then you will be able to clone this repo as the child theme. Make sure to replace <child-theme> with your child theme name.
```
$ cd wp-content/themes/<child-theme>
$ git clone git@github.com:JoeSRocha/WordPress-with-webpack.git <child-theme>
```
Make sure to update `style.css` with the correct Theme and Template name from your parent theme.


## Install
From inside the new child theme folder, install all npm dependencies.
```
$ cd <child-theme>
$ npm install
```

Once installation is complete, you may run the dev or prod runner.
```
// Dev env. webpack
$ npm run start

// Prod. env. prep.
$ npm run build
```
You will notice the output will be to `dist/* ` which is where `functions.php` is serving from.


## Customize
This starter kit is open source. Feel free to customize to your liking.
If you would like to disable `watch` when running webpack, comment out or remove line 36 from `webpack.config.js`.


## Author
Author: Joe S. Rocha<br/>
URL: AdroitGraphics.com