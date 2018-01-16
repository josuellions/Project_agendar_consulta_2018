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
    return '<h1>Primeira pagina</h1>';
});

// rota para listagem de consultas
Route::get('/consultas', 'ConsultaController@lista');

// rota para detalhes de consultas
Route::get('/consultas/detalhes/{id}', 'ConsultaController@detalhe')->where('id','[0-9]+');




