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
  
  mix.styles([
   		'resources/css/home.css',
   		'resources/css/app.css',
      'node_modules/slick-carousel/slick/slick.css',
   		'node_modules/@fortawesome/fontawesome-free/css/all.css',
   		'node_modules/materialize-css/dist/css/materialize.css',
      'node_modules/toastr/build/toastr.css',

   	], 'public/css/app1.css');

mix.js(['resources/js/app.js', 
		  'resources/js/init.js', 
		  'node_modules/@fortawesome/fontawesome-free/js/all.js',
   		'node_modules/materialize-css/dist/js/materialize.js',
      'node_modules/toastr/toastr.js',

], 'public/js')
    .sass('resources/sass/app.scss', 'public/css/app.css');

   