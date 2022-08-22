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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('verifica_usuario_logado')->group(function () {
    Route::get('receita/index', 'ReceitaController@index');
    Route::get('receita/cadastrar', 'ReceitaController@cadastrar');
    Route::post('receita/cadastrar', 'ReceitaController@cadastrar');
    Route::get('receita/alterar/{id}', 'ReceitaController@alterar');
    Route::post('receita/alterar', 'ReceitaController@alterar');
    Route::get('receita/remover/{id}', 'ReceitaController@remover');
});
