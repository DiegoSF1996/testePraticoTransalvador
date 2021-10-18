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
/* 
Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/{reu_codigo?}/{usu_codigo?}', ['as' => 'ExemploController', 'uses' => 'ExemploController@inicio']);

/* Route::post('/dashboard/usuario/salvarRegistroUsuario', ['as' => 'dashboard.UsuarioController.salvarRegistroUsuario', 'uses' => 'dashboard\UsuarioController@salvarRegistroUsuario']);
Route::get('/dashboard/usuario/excluirRegistroUsuario/{reu_codigo?}/{usu_codigo?}', ['as' => 'dashboard.UsuarioController.excluirRegistroUsuario', 'uses' => 'dashboard\UsuarioController@excluirRegistroUsuario']);
 */