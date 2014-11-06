var elixir = require('laravel-elixir');

// Custom directories
var dir = "resources/assets/";

elixir(function(mix) {
    mix
        .sass([
            "style.scss",
            "../animate-css/animate.min.css"
        ])
        .styles([
            "css/style.css",
            "css/animate.min.css"
        ])
        .version("css/all.css")
        .scripts([
            "jquery/dist/jquery.min.js",
            "bootstrap-sass-official/assets/javascripts/bootstrap.js",
            "enquire/dist/enquire.min.js"
        ], dir)
        .routes()
        .events()
        .phpUnit();

});