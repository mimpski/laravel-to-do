var elixir = require('laravel-elixir');
require('laravel-elixir-browser-sync-simple');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
    mix.scripts([
      'libs/jquery.js',
      'libs/bootstrap.min.js',
      'libs/datatables.js',
      'libs/selectize.js',
      'libs/picker.js',
      'libs/picker.date.js'
    ], './public/js/scripts.js')
      .version([
        'public/js/scripts.js',
        'public/css/app.css'
      ])
       .browserSync({ proxy: 'todo.app' });
});
