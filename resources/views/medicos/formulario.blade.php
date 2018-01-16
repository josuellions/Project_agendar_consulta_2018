@extends('layout.master')

<!-- Adicionar novo agendamento do pacientes -->
@section('conteudo')
  <h1>Agendar Consulta</h1>
  <form action="/consultas/adicionar" method="post" class="col-sm-6">

  <!-- Passando o csrf_tocken do CSRF do mecanismo de segurança LARAVEL -->
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

    <!-- para teste -->
    <input type="hidden" class="form-control" name="cod_medico"  id="codMedico" value="1">
      
    <div class="form-group">
      <label for="dtConsulta">Data Consulta:</label>
      <input type="text" class="form-control" name="dt_cadastro"  id="dtCadastro" value="2018-05-15">
    </div>
    <!-- para teste -->
    <input type="hidden" class="form-control" name="dt_agendada"  id="dtAgendada" value="2018-05-15">

    <div class="form-group">
      <label for="nmPaciente">Nome Médico:</label>
      <input type="text" class="form-control" name="nome_medico" id="nmMedico" value="Nome do Medico"> 
    </div>
    <!-- <div class="form-group">
      <label for="nmPaciente">Nome Paciente:</label>
      <input type="text" class="form-control" name="nome_paciente" id="nmPaciente" value="Nome do Paciente"> 
    </div> -->
    <div class="form-group">
      <label for="numConvenio">Número Convênio:</label>
      <input type="number" class="form-control" name="crm_cro" id="numConvenio" value="77777"> 
    </div>
    <div class="form-group">
      <label for="nvStatus" >Status:</label>
      <input type="text" class="form-control" name="status" id="nvStatus" value="1"> 
    </div>

    <!-- para teste -->
    <input type="hidden" class="form-control" name="tipo_medico"  id="dtConsulta" value="1">

    <button type="submit" class="btn btn-primary col-sm-4">Agendar</button>
  </form>
@stop