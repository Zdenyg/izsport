let mix = require('laravel-mix');

// require('laravel-mix-purgecss');


mix.js('assets/js/app.js', 'assets/dist/js')
   .sass('assets/scss/styles.scss', 'assets/dist/css')
