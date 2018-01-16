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

// rota para listagem de consultas
Route::get('/consultas', ['as' => 'listagem', 'uses' => 'ConsultaController@lista']);

// rota para detalhes de consultas
Route::get('/consultas/detalhes/{id}', 'ConsultaController@detalhe')->where('id','[0-9]+');

// rota para criar novo agendamento
Route::get('/consultas/nova',['as' => 'agendar', 'uses' => 'ConsultaController@novaconsulta']);

// rota para adcionar novo agendamento ao banco
Route::post('/consultas/adicionar', 'ConsultaController@adicionarconsulta');




