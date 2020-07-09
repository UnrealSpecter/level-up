const mix = require('laravel-mix');
require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/sass/app.css', 'public/css/app.css', [
            require('postcss-import'),
            require('tailwindcss'),
            require('postcss-nested'),
            require('postcss-custom-properties'),
            require('autoprefixer'),
    ])
    .extract(['vue', 'axios', 'lodash'])
    .version()
    .purgeCss();

mix.browserSync({
    open: false,
    proxy: 'level-up.test'
});
