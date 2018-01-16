    <!-- div#conteudo>h2{Titulo de cabeçalho}+ul.lista>li*5>a[href="#"] --> 

<!-- enviar contéudo para view master -->
@extends('layout.master')

@section('conteudo')
  <h1>Detalhes da Consulta</h1>
  <ul>
    <!-- <img src="img/text" alt="imagem"> -->
    <li>Status: {{ $detalhes->status == 1 ? 'Agendado' : 'Finalizado'}}</li>
    <li>Data: {{ $detalhes->dt_agendada }}</li>
    <li>Nome: {{ $detalhes->nome_medico }}</li>
    <li>CRM/CRO: {{ $detalhes->crm_cro }}</li>
  </ul>
@stop