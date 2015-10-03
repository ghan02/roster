var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');

elixir(function(mix) {
    mix.sass('app.scss')
    .version('css/app.css')

    mix.livereload();
});
