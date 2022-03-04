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


mix.setPublicPath('./')


// Account
mix.js('assets/js/foruminvest.js', 'assets/js/foruminvest.min.js')
    .sass('sass/foruminvest/foruminvest.scss', 'assets/css/foruminvest.min.css')
    .options({
        processCssUrls: false,
    });

// Version the files
if (mix.inProduction()) {
    mix.setPublicPath(`./`);
    mix.version([
        'assets/js/foruminvest.min.js',
        'assets/css/foruminvest.min.css',
    ]);
}


