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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
mix.styles([
    'resources/views/assets/css/style.css',
    'resources/views/assets/css/library/bootstrap.min.css',
    'resources/views/assets/css/library/font-awesome.min.css',
    'resources/views/assets/css/library/owl.carousel.css',
    'resources/views/assets/css/style-v3.css',
    'resources/views/assets/css/md-font.css',
    'resources/views/assets/css/custom.css',
    'resources/views/assets/css/main.css',
    'resources/views/assets/css/login/JiSlider.css',
    'resources/views/assets/css/login/style.css',
    ], 'public/css/all.css');
mix.scripts([
    'resources/views/assets/js/library/jquery-1.11.0.min.js',
    'resources/views/assets/js/jquery.datepick.js',
    'resources/views/assets/js/jquery.form.js',
    'resources/views/assets/js/library/jquery.owl.carousel.js',
    'resources/views/assets/js/library/jquery.appear.min.js',
    'resources/views/assets/js/library/perfect-scrollbar.min.js',
    'resources/views/assets/js/scripts.js',
    'resources/views/assets/js/main.js',
    'resources/views/assets/js/login/jquery-1.10.2.min.js',
    'resources/views/assets/js/login/JiSlider.js',
    'resources/views/assets/js/login/js/my-js.js',
    ], 'public/js/all.js');
