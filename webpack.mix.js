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

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/admin.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .scripts([
        'public/js/getwidthbrowser.js',
        'public/js/cs.bossthemes.js',
        'public/js/jquery.jgrowl.js',
        'public/js/jquery.appear.js',
        'public/js/jquery.smoothscroll.js',
        'public/js/carouFredSel-6.2.1.js',
        'public/js/boss_filterproduct.js',
        'public/js/plugins.js',
        'public/js/jquery.tools.min.js',
        'public/js/jquery.revolution.min.js',
        'public/js/jquery.selectbox-0.2.min.js',
        'public/js/cloud-zoom.1.0.3.js',
        'public/js/custom.js',
    ], 'public/js/all.js')
    .styles([
         // 'public/css/bootstrap.min.css',
         // 'public/css/font-awesome.min.css',
         // 'public/css/stylesheet.css',
         // 'public/css/menu_default.css',
         // 'public/css/boss_megamenu.css',
         // 'public/css/jquery.jgrowl.css',
         // 'public/css/boss_alphabet.css',
         // 'public/css/boss_alphabet.css',
         // 'public/css/boss_facecomments.css',
         // 'public/css/loading.css',
         // 'public/css/cs.animate.css',
         // 'public/css/boss_special.css',
         // 'public/css/boss_filterproduct.css',
         // 'public/css/revolutionslider_settings.css',
    ], 'public/css/all.css');
mix.disableNotifications();
