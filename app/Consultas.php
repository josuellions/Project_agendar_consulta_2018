<?php

namespace agendaconsulta;

use Illuminate\Database\Eloquent\Model;

class Consultas extends Model
{
    //Table Banco Dados AgendaConsulta
    protected $table = 'tb_consultas';
    public $timestamps = false;

    protected $filelable = ['cod_medico, dt_cadastro, dt_agendada, nome_medico, crm_cro, status, tipo_medico'];

    protected $guarded = ['id'];

}
