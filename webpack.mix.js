let mix = require('laravel-mix');

mix.options({
    processCssUrls: false
})
.js('src/app.js', 'dist')
.sass('src/styles.scss', 'dist');