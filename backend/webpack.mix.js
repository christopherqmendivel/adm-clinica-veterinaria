const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.js('frontend/src/main.js', 'public/js')
 .sass('frontend/src/assets/app.scss', 'public/css')
 .copy('frontend/src/index.html', 'public')
 .vue();
