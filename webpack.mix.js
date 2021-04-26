let mix = require('laravel-mix');

mix.js('src/js/app.js', 'js/app.js')
  .sass("src/css/app.scss", "css/app.css")
  .setPublicPath('dist');
