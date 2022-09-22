<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Dev-Posts

Esse projeto consiste em um blog para publicar artigos relacionados a área de desenvolvimento.
A pessoa pode ver os artigos publicados e vizualizar os comentários feitos, mas para criar seus artigos ou interagir comentando outros artigos
ela precisará se cadastrar e fazer o login.

Pacotes necessários
` composer require laravel/breeze --dev `

Instalar o breeze

```
php artisan breeze:install
 
php artisan migrate
npm install
npm run dev
```

Instalar o bootstrap
` npm i bootstrap --save-dev `

Substituir a chave "scripts" dentro de package.json por:
```
"scripts": {
"dev": "npm run development",
"development": "mix",
"watch": "mix watch",
"watch-poll": "mix watch -- --watch-options-poll=1000",
"hot": "mix watch --hot",
"prod": "npm run production",
"production": "mix --production"
}
```

Edite o arquivo webpack.mix.js na raiz com:
```
const mix = require('laravel-mix');

mix.js('src/app.js', 'dist/')
.sass('src/app.scss', 'dist/');
```


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
