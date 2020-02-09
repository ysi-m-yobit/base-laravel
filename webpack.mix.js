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
    .extract(['vue'])
    .sass('resources/sass/app.scss', 'public/css')
    .browserSync({
        proxy: {
            // nodoコンテナ起動
            target: 'http://nginx:80',
            // ローカル起動
            // target: 'http://127.0.0.1:80',
        },
        browser: ["google chrome", "firefox"],
        watchOptions: {
            usePolling: true,
            interval: 100
        },
        files: [
            "resources/views/**/*.blade.php",
            "public/**/*.*"
        ],
        open: false,
        reloadOnRestart: true,
    });
