## Dev Posts "humilde" 

## TODO

- Implementar as rotas da seguinte forma
  - `"/"` a home deve mostrar Posts publicados recentemente
  - `"/username"` irá para o perfil do usuário
  - `"/username/slug"` irá para um post específico
  - `"/username/followers"` mostrar usuarios que segue
  - `"/username/following"` mostrar seguidores
  - `"/new"` para criar novo post
  - `"/edit"` para editar um post
  - `"/dashboard"` mostra dados relacionados a posts, likes, comentarios... 
  - `"/settings"` para editar relacionados ao perfil 
  - `"/readinglist"` posts salvos

- Criar Views
  - Dashboard
  - profile
  - settings

- Implementar Like, Follow, Unfollow


## No futuro
- implementar notificações
- login com redes socias
- Opção para compartilhar perfil e post



### Para rodar o projeto

```
composer install
 
php artisan migrate
npm install
npm run dev
```


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
