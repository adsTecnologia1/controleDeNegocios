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


Route::get('/', 'visitanteController@indexWelcome');
Route::get('/novoUsuario', 'UsuariosController@index');
Route::get('/recuperarLogin', 'UsuariosController@index2');
Route::get('/fazerLogin', 'UsuariosController@index3');
Route::get('/areaDoAdmin', 'UsuariosController@index4');
Route::get('/areaDoColaborador', 'UsuariosController@index5');
Route::get('/areaDaEmpresa', 'UsuariosController@index6');
Route::get('/novaEmpresa', 'UsuariosController@index7');
Route::post('/criarNovaEmpresa', 'UsuariosController@create');
Route::get('/cpfExistente', 'UsuariosController@index8');
Route::get('/termoResponsabilidade', 'UsuariosController@index9');
Route::post('/apagarEmpresa', 'UsuariosController@create2');
Route::post('/criarNovoUsuario', 'UsuariosController@create3');
Route::get('/usuarioNaoCadastrado', 'UsuariosController@index10');
Route::get('/novoAdmin', 'UsuariosController@index11');
Route::post('/criarNovoAdmin', 'UsuariosController@create4');
Route::post('/entrarNoSistema', 'UsuariosController@store');
Route::get('/acessoNegado', 'UsuariosController@index12');
Route::get('/liberacaoEprevilegios', 'UsuariosController@index13');
Route::post('/criarLiberacaoEprevilegios', 'UsuariosController@edit');
Route::get('/darAcessoEmpresa', 'UsuariosController@index14');
Route::post('/criarLiberacaoEmpresa', 'UsuariosController@edit2');
Route::post('/criarLiberacaoColaborador', 'UsuariosController@edit3');
Route::get('/liberarAcessoColaborador', 'UsuariosController@index15');
Route::get('/adicionarEstoque', 'EmpresaController@index');
Route::post('/criarEstoque', 'EmpresaController@create');
Route::get('/buscaDeEstoque', 'EmpresaController@index2');
Route::get('/verEstoque', 'EmpresaController@index3');
Route::post('/mostrarEstoque', 'EmpresaController@store');
