<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    echo('Conteudo dinamico Home');
});
Route::get('/sobre', function () {
    echo('Conteudo dinamico sobre');
});

Route::get('/conteudo', function () {
    echo('Conteudo dinamico conteudo');
});

Route::get('/servicos', function () {
    echo('Conteudo dinamico servico');
});

Route::get('/servicos/{id}', function (int $id) {
    $servicos = [
        1 => [
            'nome' => 'lavagem de ropa',
            'descricao' => 'descricao muito longa...'
        ],
        2 => [
            'nome' => 'lavagem de Coberta',
            'descricao' => 'descricao muito longa...'
        ],
        3 => [
            'nome' => 'lavagem de Urso',
            'descricao' => 'descricao muito longa...'
        ],
    ];
    echo $servicos[$id]["nome"];
    echo("<br>");
    echo $servicos[$id]["descricao"];
});

//Parametro opcional
Route::get('/saudacao/{nome?}', function (string $nome = null) {
    echo("Ola $nome");
});
