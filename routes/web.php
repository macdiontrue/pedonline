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

//===============================================================================
//Home Controller
//===============================================================================
Route::get('/','HomeController@home');
Route::get('/endereco','HomeController@endereco');
//===============================================================================
//Route de sessao
//===============================================================================
 Route::get('/cliente/dashboard','HomeController@apresentaDashboard');
//===============================================================================
//Usuarios Controller
//============================Iniciar Sessao===================================================
Route::get('/autenticar','UsuariosController@login');
Route::post('/login','UsuariosController@executarLogin');
//============================Fechar Sessao==================================================
Route::get('/logout','UsuariosController@logout');
//============================================================================================
Route::get('/recuperar', 'UsuariosController@recuperarSenha');
Route::post('/exe_recuperar','UsuariosController@executarRecuperarSenha');
//===============================================================================
Route::get('/registar/cliente', 'UsuariosController@registarCliente');
Route::post('/exe_store','UsuariosController@executarRegistarUser');
//===============================================================================
Route::get('/registar/restaurante', 'UsuariosController@registarRestaurante');
//=============================================================================
//Rotas do utilizador
//==========================================================================================
Route::get('/index','UsuariosController@userindex');
