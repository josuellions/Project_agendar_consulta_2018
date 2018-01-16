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
          <th>Remover</th>
          <th>Alterar</th>
        </tr>
      </thead>
        <tbody>
        <!-- Incluindo dados vindos da ConsultaController -->
          @foreach ($consultar as $consulta)
            <tr class="{{ $consulta->status == 1 ? 'danger' : ''}}">
              <td class="text-center">{{ $consulta->id }}</td>
              <td class="text-center">{{ $consulta->cod_medico }}</td>
              <td class="text-center">{{ $consulta->dt_cadastro}}</td>
              <td class="text-center">{{ $consulta->dt_agendada}}</td>            
              <td class="text-left">{{ $consulta->nome_medico }}</td>
              <td class="text-right">{{ $consulta->crm_cro }}</td>
              <td class="text-center">{{ $consulta->tipo_medico }}</td>
              <td class="text-center">{{ $consulta->status == 1 ? 'agendado' : 'finalizado'}}</td>
              <td class="text-center">
                  <a href="{{ action ('ConsultaController@detalhes', $consulta->id) }}">
                    <span class="glyphicon glyphicon-search"></span>
                  </a>
              </td>
              <td class="text-center">
                  <a href="{{ action ('ConsultaController@removerconsulta', $consulta->id) }}">
                    <span class="glyphicon glyphicon-trash"></span>
                  </a>
              </td>
              <td class="text-center" id="btnUpdate">
                <a href="{{action( 'ConsultaController@alterarconsulta', $consulta->id ) }}">
                  <span class="glyphicon glyphicon-pencil"></span>
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
    @if(old('nome_medico'))
      <div class="alert alert-success col-sm-8">
        <strong>Sucesso</strong> agendamento do paciente: {{ old('nome_medico') }} realizado.
      </div>
    @endif
  @stop