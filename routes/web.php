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

Route::get('/', 'UsuarioController@index');
//Route::get('/soma/{a}/{b}', 'UsuarioController@soma');

// ROTAS DE USUÁRIO

Route::get('/form', "UsuarioController@create");
Route::post('/', 'UsuarioController@store');
