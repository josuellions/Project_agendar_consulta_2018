@extends('layout.master')

<!-- Adicionar novo agendamento do pacientes -->
@section('conteudo')
  <h1>Altera Consulta</h1>
  <form action="/consultas/adicionar" method="post" class="col-sm-6">

  <!-- Passando o csrf_tocken do CSRF do mecanismo de segurança LARAVEL -->
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

    <!-- Passando ID do paciente -->
    <input type="hidden" name="id" value="{{ $consultas->id }}" />

    <!-- para teste -->
    <input type="hidden" class="form-control" name="cod_medico"  id="codMedico" value="{{ $consultas->cod_medico }}" />
      
    <div class="form-group">
      <label for="dtConsulta">Data Consulta:</label>
      <input type="text" class="form-control" name="dt_cadastro"  id="dtCadastro" value="{{ $consultas->dt_cadastro }}">
    </div>
    <!-- para teste -->
    <input type="hidden" class="form-control" name="dt_agendada"  id="dtAgendada" value="{{ $consultas->dt_agendada }}">

    <div class="form-group">
      <label for="nmPaciente">Nome Médico:</label>
      <input type="text" class="form-control" name="nome_medico" id="nmMedico" value="{{ $consultas->nome_medico }}"> 
    </div>
    <!-- <div class="form-group">
      <label for="nmPaciente">Nome Paciente:</label>
      <input type="text" class="form-control" name="nome_paciente" id="nmPaciente" value="Nome do Paciente"> 
    </div> -->
    <div class="form-group">
      <label for="numConvenio">Número Convênio:</label>
      <input type="number" class="form-control" name="crm_cro" id="numConvenio" value="{{ $consultas->crm_cro }}"> 
    </div>
    <div class="form-group">
      <label for="nvStatus" >Status:</label>
      <input type="text" class="form-control" name="status" id="nvStatus" value="{{ $consultas->status }}"> 
    </div>

    <!-- para teste -->
    <input type="hidden" class="form-control" name="tipo_medico"  id="dtConsulta" value="{{ $consultas->tipo_medico }}">

    <button type="submit" class="btn btn-primary col-sm-4">Alterar</button>
  </form>
@stop