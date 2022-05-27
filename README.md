# npx run hot for 
```
const mix = require('laravel-mix');
require('laravel-mix-blade-reload');



mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .sass('resources/sass/app.scss', 'public/bootstrap')
    .bladeReload();


if (mix.inProduction()) {
    mix.version();
}
```