const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('Resources/assets/').mergeManifest();

mix.js(__dirname + '/Resources/assets/js/app.js', 'js/frontend.js')
    .sass( __dirname + '/Resources/assets/sass/app.scss', 'css/frontend.css')
    .options({
        processCssUrls: false
    });

if (mix.inProduction()) {
    mix.version();
}