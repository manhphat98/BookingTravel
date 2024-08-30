// webpack.mix.js

const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .vue() // Kích hoạt xử lý Vue.js
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ])
    .setPublicPath('public');
