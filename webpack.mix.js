const mix = require('laravel-mix');

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

    /*mix.js('resources/js/majestic/hoverable-collapse.js', 'public/js/majestic');
    mix.js('resources/js/majestic/app.js', 'public/js/majestic');
    mix.js('resources/js/majestic/app.js', 'public/js/majestic');*/

    mix.copy('node_modules/sweetalert/dist','public/sweetalert');
