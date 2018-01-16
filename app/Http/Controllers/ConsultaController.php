<?php

namespace agendaconsulta\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ConsultaController {
  
  public function lista(){
    // consultando dados no banco
    $consultar = DB::select('select * from tb_medico');

    //enviando dados para view listagem exibir na tela
    return view ('pacientes.listagem')->withConsultar($consultar);
    
    //teste if listagem
    //return view ('listagem')->withConsultar( array());
  }

  public function detalhe($id){
    // Consultar no banco
    // $id = Request::route('id');
    $consulta = DB::select('select * from tb_medico where id = ?', [$id]);

    //enviar dados para view detalhes exibir na tela
    $resposta = (empty($consulta)) ? "Não encontrado!!!" : view('pacientes.detalhe')->withdetalhes( $consulta[0]);

    return $resposta;
  }

}
