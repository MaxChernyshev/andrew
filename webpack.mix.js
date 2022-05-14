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

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);


// FRONT
mix.js(['resources/js/front/app.js', 'resources/js/front/faq.js'], 'public/js/front/js')
    .sass('resources/sass/front/app.scss', 'public/css/front/css')
    .sourceMaps();


// ADMIN
mix.js([
    // 'resources/js/admin/app.js',
    'node_modules/admin-lte/dist/js/adminlte.js',
    'node_modules/admin-lte/plugins/jquery/jquery.min.js',
    'node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'node_modules/admin-lte/dist/js/adminlte.min.js',
], 'public/js/admin/js')
    .copy(
        'node_modules/@fortawesome/fontawesome-free/webfonts',
        'public/webfonts'
    )
    .copy('node_modules/admin-lte/dist/css/adminlte.css', 'public/css/admin/css')
    // .sass('node_modules/admin-lte/dist/css/adminlte.css', 'public/css/admin/css')
    .sass('resources/sass/admin/app.scss', 'public/css/admin/css')

    .sourceMaps();
