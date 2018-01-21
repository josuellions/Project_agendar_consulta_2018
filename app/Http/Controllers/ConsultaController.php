<?php

namespace agendaconsulta\Http\Controllers;

use agendaconsulta\Http\ConsultasRequest;
use Illuminate\Support\Facades\DB;
use agendaconsulta\Consultas;
use Illuminate\Http\Request;
use Redirect;
//use Request;

class ConsultaController extends Controller {

  public function __construct() {
    $this->middleware('auth', ['only' => ['lista','detalhes', 'novaconsulta','removerconsulta','alterarconsulta' ]] );
  }
  
  //consultando dados no banco, enviando dados para view listagem exibir na tela
  public function lista(){
    $consultar = Consultas::all();
    return view ('pacientes.listagem')->withConsultar($consultar);
  }

  //Consultar detalhada no banco dados, enviar dados para view detalhes exibir na tela 
  public function detalhes($id){
    $consultar = Consultas::findOrFail($id);
    $resposta = (empty($consultar)) ? "Não encontrado!!!" : view('pacientes.detalhe')->withdetalhes( $consultar);
    return $resposta;
  }

  //direcionando para pagina formulario
  public function novaconsulta() {
    return view('medicos.formulario');
  }

  //capturando dados do formulario, salvar no banco dados e retorna para listagem
  public function adicionarconsulta(Request $request){
    $consulta = new Consultas();
    $consulta = $consulta::create($request->all());

    return redirect()->route('listagem');
    //return redirect()->route('listagem');//->withInput(Request::only('nome_medico'));
  }

  //remover consulta do banco dados, retorna para listagem
  public function removerconsulta($id) {
    $consultar = Consultas::find($id);
    $consultar->delete();
    return redirect()->route('listagem'); //->with('autofocus', true);
  }

  //direcionando para pagina formulario de alteração
  public function alterarconsulta($id){
    $resposta = Consultas::findOrFail($id);
    return view('medicos.formulario', ['resposta' => $resposta] );
  }

  //alterando informações no banco de dados
  public function updateconsulta($id, Request $request){
    $consulta = Consultas::findOrFail($id);
    $consulta->update($request->all());
    return redirect()->route('listagem')->with('autofocus', true); //->withInput( Request::only( 'nome_medico') );
  }

}
