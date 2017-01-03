<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//neste arquivo definimos as rotas de nossa aplicação
Route::get('/', function () {
    return view('welcome');
});
//aqui passamos como parametro ('caminho', 'Classe@metodo')
Route::get('/produtos', 'ProdutoController@lista');

//para passar parametros na url para a rota colocamos entre chaves
//usando o where para limitar a entrada no navegador a somente números
Route::get('produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');

Route::get('produtos/novo', 'ProdutoController@novo');

Route::post('produtos/adiciona', 'ProdutoController@adiciona');
