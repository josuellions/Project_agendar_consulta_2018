<!-- enviar contéudo para view master -->
@extends('layout.master')

@section('conteudo')

<!-- Verifica se existem dados para exibir na listagem -->
@if(empty($consultar))
  <div class="alert alert-danger">Nenhum informação encontrada em nossos cadastros!</div>
  @else
    <h1>Listagem Consultas Agendadas</h1>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Cod</th>
          <th>Dt Cadastro</th>
          <th>Dt Consulta</th>
          <th>Nome</th>
          <th>CRM/CRO</th>
          <th>Tipo</th>
          <th>Status</th>
          <th>Detalhes</th>
        </tr>
      </thead>
        <tbody>
        <!-- Incluindo dados vindos da ConsultaController -->
          @foreach ($consultar as $consulta)
            <tr class="{{ $consulta->status == 1 ? 'danger' : ''}}">
              <td>{{ $consulta->id }}</td>
              <td>{{ $consulta->cod_medico }}</td>
              <td>{{ $consulta->dt_cadastro}}</td>
              <td>{{ $consulta->dt_agendada}}</td>            
              <td>{{ $consulta->nome_medico }}</td>
              <td>{{ $consulta->crm_cro }}</td>
              <td>{{ $consulta->tipo_medico }}</td>
              <td>{{ $consulta->status == 1 ? 'agendado' : 'finalizado'}}</td>
              <td>
                  <a href="/consultas/detalhes/{{ $consulta->id }}">
                    <span class="glyphicon glyphicon-search"></span>
                  </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif
    <div class="col-sm-12">
      <h4><span class="label label-danger pull-right">* Atenção a data de suas consultas.</span></h4>
    </div>
    @if(old('nmMedico'))
      <div class="alert alert-success col-sm-12">
        <strong>Sucesso</strong> agendamento do paciente: {{ old('nmMedico') }} realizado.
      </div>
    @endif
  @stop