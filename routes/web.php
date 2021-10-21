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

Route::post('/ciclovia/salvar/{id?}', ['as' => 'CicloviaController.salvar', 'uses' => 'CicloviaController@salvar']);
Route::get('/ciclovia/deletar/{id?}', ['as' => 'CicloviaController.deletar', 'uses' => 'CicloviaController@deletar']);
Route::get('/', ['as' => 'CicloviaController.inicio', 'uses' => 'CicloviaController@inicio']);
Route::get('/ciclovia/cadastro/{id?}', ['as' => 'CicloviaController.cadastro', 'uses' => 'CicloviaController@cadastro']);

Route::get('/tipociclovia', ['as' => 'TipoCicloviaController.inicio', 'uses' => 'TipoCicloviaController@inicio']);

Route::post('/teste', function () {
    print_r($_POST);
});

/* Route::post('/dashboard/usuario/salvarRegistroUsuario', ['as' => 'dashboard.UsuarioController.salvarRegistroUsuario', 'uses' => 'dashboard\UsuarioController@salvarRegistroUsuario']);
Route::get('/dashboard/usuario/excluirRegistroUsuario/{reu_codigo?}/{usu_codigo?}', ['as' => 'dashboard.UsuarioController.excluirRegistroUsuario', 'uses' => 'dashboard\UsuarioController@excluirRegistroUsuario']);
 */