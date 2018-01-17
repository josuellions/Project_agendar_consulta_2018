@extends('layout.master')

<!-- Adicionar novo agendamento do pacientes -->
@section('conteudo')
  <h1>Agendar Consulta</h1>
  <form action="/consultas/adicionar" method="post" class="col-sm-6">

  <!-- Passando o csrf_tocken do CSRF do mecanismo de segurança LARAVEL -->
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
      
    <div class="form-group">
      <label for="dtConsulta">Data Consulta:</label>
      <input type="text" class="form-control" name="dtConsulta"  id="dtConsulta" value="2018-05-15">
    </div>
    <div class="form-group">
      <label for="nmPaciente">Nome Médico:</label>
      <input type="text" class="form-control" name="nmMedico" id="nmMedico" value="Nome do Medico"> 
    </div>
    <div class="form-group">
      <label for="nmPaciente">Nome Paciente:</label>
      <input type="text" class="form-control" name="nmPaciente" id="nmPaciente" value="Nome do Paciente"> 
    </div>
    <div class="form-group">
      <label for="numConvenio">Número Convênio:</label>
      <input type="number" class="form-control" name="numConvenio" id="numConvenio" value="77777"> 
    </div>
    <div class="form-group">
      <label for="nvStatus" >Status:</label>
      <input type="text" class="form-control" name="nvStatus" id="nvStatus" value="1"> 
    </div>
    <button type="submit" class="btn btn-primary col-sm-4">Agendar</button>
  </form>
@stop