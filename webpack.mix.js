let mix = require('laravel-mix');
let path = require('path');

mix.setPublicPath(path.resolve('./'));

mix.js('resources/js/app.js', 'js');

mix.sass('resources/css/app.scss', 'css');

mix.sass('resources/css/editor-style.scss', './');

mix.options({
    postCss: [
        require('postcss-nested-ancestors'),
        require('postcss-nested'),
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ],
});

// mix.browserSync({
//     proxy: 'http://your-website.test',
//     host: 'your-website.test',
//     open: 'external',
//     port: 8000
// });

mix.version();
