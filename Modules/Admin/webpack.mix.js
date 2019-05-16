const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('Resources/assets/').mergeManifest();

mix.sass( __dirname + '/Resources/assets/sass/app.scss', 'css/admin.css');

if (mix.inProduction()) {
    mix.version();
}