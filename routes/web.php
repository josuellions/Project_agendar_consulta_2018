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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware'=>'web'], function(){
   // Route::auth();
    Route::get('/home', 'HomeController@index')->name('home');

    // Route::get('/', 'HomeController@index')->name('home');
    
    // rota para listagem de consultas
    Route::get('/consultas', ['as' => 'listagem', 'uses' => 'ConsultaController@lista']);

    // rota para detalhes de consultas
    Route::get('/consultas/detalhes/{id}',['as' => 'detalhes', 'uses' => 'ConsultaController@detalhes'])->where('id','[0-9]+');

    // rota para criar novo agendamento
    Route::get('/consultas/nova',['as' => 'agendar', 'uses' => 'ConsultaController@novaconsulta']);

    // rota para adcionar novo agendamento ao banco dados
    Route::post('/consultas/adicionar', 'ConsultaController@adicionarconsulta');

    // rota para remover agendamento no banco dados
    Route::get('/consultas/remover/{id}', 'ConsultaController@removerconsulta');

    // rota para altera agendamento
    Route::get('/consultas/alterar/{id}', ['as' => 'alterar', 'uses' => 'ConsultaController@alterarconsulta']);

    // rota para update no agendamento no banco dados
    //Route::patch('consultas/update', 'ConsultaController@updateconsulta');
    Route::patch('/consultas/update/{id}', 'ConsultaController@updateconsulta');

});

Auth::routes();
$router->get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');


//ok acesso lista
//$router->get('/consultas', ['as' => 'listagem','uses' => 'ConsultaController@lista']);

//na funcinou
// Route::controllers([
//     'auth' => 'Auth\AuthController',
//     'password' => 'Auth\PasswordController',
// ]);

//Route::get('auth/login','HomeController@login')->name('login');
