var elixir = require('laravel-elixir');

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
      'one.js',
      'two.js',
      'three.js'
    ], './public/js/scripts.js')
      .version([
        'public/js/scripts.js',
        'public/css/app.css'
      ]);
});
