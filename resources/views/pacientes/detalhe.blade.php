    <!-- div#conteudo>h2{Titulo de cabeçalho}+ul.lista>li*5>a[href="#"] --> 

<!-- enviar contéudo para view master -->
@extends('layout.master')

@section('conteudo')
  <h1>Detalhes da Consulta</h1>
  <ul style="  list-style: none; margin-top: 2.5%; margin-bottom:34%;">
    <img src="{{asset ('../../img/dokter.png')}}" alt="foto médico" width="200px" height="164px">
    <li>Status: {{ $detalhes->status == 1 ? 'Agendado' : 'Finalizado'}}</li>
    <li>Data: {{ $detalhes->dt_agendada }}</li>
    <li>Nome: {{ $detalhes->nome_medico }}</li>
    <li>CRM/CRO: {{ $detalhes->crm_cro }}</li>
  </ul>
@endsection