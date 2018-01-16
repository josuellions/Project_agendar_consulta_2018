<?php

namespace agendaconsulta\Http\Controllers;

use Illuminate\Support\Facades\DB;
use agendaconsulta\Consultas;
use Request;

class ConsultaController extends Controller {
  
  public function lista(){
    // consultando dados no banco
    $consultar = Consultas::all();

    //enviando dados para view listagem exibir na tela
    return view ('pacientes.listagem')->withConsultar($consultar);
  }

  public function detalhe($id){
    //Consultar no banco
    $consultar = Consultas::find($id);

    //enviar dados para view detalhes exibir na tela
    $resposta = (empty($consultar)) ? "Não encontrado!!!" : view('pacientes.detalhe')->withdetalhes( $consultar);

    return $resposta;
  }

  public function novaconsulta() {
    //direcionando para pagina formulario
    return view('medicos.formulario');
  }

  public function adicionarconsulta(){
    //capturando dados do formulario, salvar no banco dados e retorna para listagem
    Consultas::create(Request::all());
    return redirect()->route('listagem')->withInput(Request::only('nome_medico'));
  }

}
