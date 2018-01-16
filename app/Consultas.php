<?php

namespace agendaconsulta;

use Illuminate\Database\Eloquent\Model;

class Consultas extends Model
{
    //Table Banco Dados AgendaConsulta
    protected $table = 'tb_medico';
    public $timestamps = false;

    protected $filelable = array('cod_medico, dt_cadastro, dt_agendada, nome_medico, crm_cro, status, tipo_medico');

    protected $guarded = ['id'];

}
