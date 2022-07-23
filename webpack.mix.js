const mix = require('laravel-mix');

mix
  .styles(
    'resources/views/assets/css/global.css',
    'public/assets/css/styles.css',
  )

  .styles(
    'resources/views/assets/css/styles.css',
    'public/assets/css/styles.css',
  )

  .js('resources/views/assets/js/scripts.js', 'public/assets/js')

  .version();
