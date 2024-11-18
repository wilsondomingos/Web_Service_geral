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




Route::get('registar_utilizadore', 'ControllerUtilizador@registar_utilizadore')->name('registar_utilizadore')->Middleware('auth');
Route::get('Adicionar_servico_utilizadore', 'ControllerUtilizador@Adicionar_servico_utilizadore')->name('Adicionar_servico_utilizadore')->Middleware('auth');

Route::post('register_utilizador', 'ControllerUtilizador@register_utilizador')->name('register_utilizador')->Middleware('auth');
Route::get('associar_utilizadores/{id}', 'ControllerUtilizador@Associar')->Middleware('auth');
Route::post('Cadastrar_Associacao_usre_servico', 'ControllerUtilizador@Cadastrar_Associacao_usre_servico')->Middleware('auth');


Route::get('/', 'ControllerServico@index')->name('welcome')->Middleware('auth');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->Middleware('auth');

Route::get('token', 'TokenControllController@token')->name('token')->Middleware('auth');
Route::post('gerarToken', 'TokenControllController@gerarToken')->name('gerarToken')->Middleware('auth');
Route::post('desativar', 'TokenControllController@desativar')->name('desativar')->Middleware('auth');






