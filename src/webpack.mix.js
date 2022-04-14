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

mix.version();

if (mix.inProduction()) {
    mix.sourceMaps();
}

// mix.js('resources/js/app.js', 'public/js/app.js');
// mix.sass('resources/sass/app.scss', 'public/css/app.css');
const tailwindcss = require('tailwindcss');
mix.sass('resources/sass/app.scss', 'public/css')
    .options({
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .version();
//
// mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
//     require('postcss-import'),
//     require('tailwindcss'),
//     require('autoprefixer'),
// ]);
