# BNW Plugins: Example

Este é um plugin de exemplo, para ser usando com [laravel-plugin-core](https://github.com/bueno-networks/laravel-plugin-core)

## Instalação

Para instalar o plugin em um projeto Laravel, use o comando:

```
composer require bnw/laravel-plugin-example
```

## Rotas disponíveis 

Para exemplificar o funcionamento do plugin, algumas rotas estão disponiveis e acessíveis atrvés do Painel na URI '/admin' (configurada pelo plugin `laravel-plugin-core`):

### Rotas do Front
Método | URI           | Nome          | Ação        | Middleware
----   | ---           | ---           | ---         | ---
 GET   | example/form  | example.form  | App\Plugin\Example\Http\Controllers\FrontController@form | .
 GET   | example/grid  | example.grid  | App\Plugin\Example\Http\Controllers\FrontController@grid | .
 GET   | example/home  | example.home  | App\Plugin\Example\Http\Controllers\FrontController@home | .
 GET   | example/page  | example.page  | App\Plugin\Example\Http\Controllers\FrontController@page | .    

### Rotas da Api

Método | URI                       | Nome          | Ação        | Middleware
----   | ---                       | ---           | ---         | ---
GET    | api/example/form/store    | .             | App\Plugin\Example\Http\Controllers\ApiController@store  | api 
GET    | api/example/form/update   | .             | App\Plugin\Example\Http\Controllers\ApiController@update | api
GET    | api/example/grid/provider | .             | App\Plugin\Example\Http\Controllers\ApiController@gridProvider | api

# Créditos

Orgulhosamente desenvolvido pela equipe da [Bueno Networks](http://www.buenonetworks.com.br)