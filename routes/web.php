<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//rota sem parametro
Route::get('/hello', function()
{
    echo 'hello world!';
});
//rota com parametro
Route::get('/saudacoes/{nome}', function ($nome){
    echo 'Ola ' . $nome;
});
//rota com parametro opcional
Route::get('/multiplicacao/{numero1}/{numero2?}', function($numero1, $numero2 = null){
    if ($numero2 != null){
        echo $numero1 * $numero2;
    } else {
        echo 'Faltou o segundo numero';
    }
});
//rota que redireciona para view
Route::get('/view', function(){
    return view('minhaPrimeira');
});

Route::get('/view-parametro/{nome}', function ($nome){
    return view('minhaSegunda')->with('nomeBlade', $nome);
});

Route::get('/filmes', 'FilmesController@exibirTodos');

Route::get('/filmes/{id}', 'FilmesController@exibirDetalhe');

Route::get('/filme/adicionar', 'FilmesController@adicionarFilme');
Route::post('/filme/adicionar', 'FilmesController@salvarFilme');

Route::get('filme/editar{id}', 'FilmesController@editarFilme');
Route::post('filme/editar{id}', 'FilmesController@salvarFilmeEditado');

Route::get('filme/excluir{id}', 'FilmesController@excluirFilme');