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
    //Consultar no banco
    $consulta = DB::select('select * from tb_medico where id = ?', [$id]);

    //enviar dados para view detalhes exibir na tela
    $resposta = (empty($consulta)) ? "Não encontrado!!!" : view('pacientes.detalhe')->withdetalhes( $consulta[0]);

    return $resposta;
  }

  public function novaconsulta() {
    //direcionando para pagina formulario
    return view('medicos.formulario');
  }

  public function adicionarconsulta(){
    //capturando dados do formulario, salvar no banco dados e retorna para listagem
    $codMedico = "2";
    $dtCadastro = "2018-01-15";

    $dtAgendada = Request::input('dtConsulta');
    $nmMedico = Request::input('nmMedico');

    $nmPaciente = Request::input('nmPaciente');
    $numConvenio = Request::input('numConvenio');
    $status = Request::input('nvStatus');

    $tpMedico = "2";
    
    //persistir dados no banco
    DB::table('tb_medico')->insert (
      ['cod_medico' => $codMedico,
       'dt_cadastro' => $dtCadastro,
       'dt_agendada' => $dtAgendada,
       'nome_medico' => $nmMedico,
       'crm_cro' => $numConvenio,
       'status' => $status,
       'tipo_medico'  => $tpMedico
      ]
    );

    //direcionar para pagina listagem
    return redirect()->route('listagem')->withInput(Request::only('nmMedico'));
  }

}
