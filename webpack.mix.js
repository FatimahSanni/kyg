let mix = require('laravel-mix');

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
mix.copy('node_modules/font-awesome/css/font-awesome.min.css', 'public/css/font-awesome.min.css');
mix.copy('node_modules/sweetalert/dist/sweetalert.min.js', 'public/js/sweetalert.min.js');
mix.copy('node_modules/sweetalert/dist/sweetalert.css', 'public/css/sweetalert.css');
mix.copy('node_modules/font-awesome/fonts', 'public/fonts');
mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');
