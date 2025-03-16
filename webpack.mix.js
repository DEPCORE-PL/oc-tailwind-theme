require("dotenv").config({ path: __dirname + "/./../../.env" });
let mix = require("laravel-mix");

mix.setPublicPath("/");
mix
    .js("src/js/app.js", "assets/js")
    .postCss("src/css/app.css", "assets/css", [
        require("@tailwindcss/postcss"),
    ]);

mix.webpackConfig({ watchOptions: { ignored: /node_modules|assets|mix-manifest.json/, }, });

mix.browserSync({
    proxy: `${process.env.APP_URL}`,
    host: `${process.env.APP_URL}`,
    port: 8020,
    https: false,
    notify: false,
    files: ["./assets/css/*.css", "./**/*.htm", "./assets/js/*.js"],
});

mix.minify(["assets/css/app.css", "assets/js/app.js"])
mix.sourceMaps(); // Enable sourcemaps
