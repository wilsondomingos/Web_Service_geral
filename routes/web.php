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
})->Middleware('auth');


Route::get('registar_utilizadore', 'ControllerUtilizador@registar_utilizadore')->name('registar_utilizadore')->Middleware('auth');
Route::get('Adicionar_servico_utilizadore', 'ControllerUtilizador@Adicionar_servico_utilizadore')->name('Adicionar_servico_utilizadore')->Middleware('auth');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->Middleware('auth');