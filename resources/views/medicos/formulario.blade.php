@extends('layout.master')

<!-- Adicionar novo agendamento do pacientes -->
@section('conteudo')

<div class="panel-body col-sm-6 col-sm-offset-3">

    @if(Request::is('*/alterar/*') )
      <h1>Alterar Consulta</h1>
      {!! Form::model($resposta, ['method' => 'PATCH', 'url' => 'consultas/update/'.$resposta->id]) !!}
    @else
      <h1>Agendar Consulta</h1>
      {!! Form::open(['url' => 'consultas/adicionar','method' => 'post']) !!}
    @endif

     {{--  <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />  --}}

      <!-- para teste -->
      {!!Form::input('hidden','cod_medico','1')!!}
        
      <div class="form-group">
        {!!Form::label('dt_cadastro','Data Consulta:')!!}
        {!!Form::input('text','dt_cadastro', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'yyyy-mm-dd'])!!}
      </div>
      <!-- para teste -->
      {!!Form::hidden('dt_agendada', '2018-05-15', ['class'=>'form-control', 'placeholder' => 'yyyy-mm-dd'])!!}
    
      <div class="form-group">
        {!!Form::label('nome_medico','Nome Médico:')!!}
        {!!Form::input('text','nome_medico', null, ['class' => 'form-control', 'placeholder' => 'Nome Doutor / Médico'])!!}
      </div>

      <div class="form-group">
        {!!Form::label('crm_cro', 'Número Convênio:')!!}
        {!!Form::input('text', 'crm_cro', null, ['class' => 'form-control', 'placeholder' => 'Número do convênio'])!!}
      </div>
      <div class="form-group">
        {!!Form::label('status', 'Status:')!!}
        {!!Form::input('text', 'status', null, ['class' => 'form-control', 'placeholder' => 'Escolher ( 1 = agendar  ou  2 = finalizar)'])!!}
      </div>

      <!-- para teste -->
      {!!Form::input( 'hidden', 'tipo_medico', '1', ['class' => 'form-control'])!!}

      @if(Request::is('*/alterar/*') )
          {!! Form::submit( 'Alterar', ['id' => 'btnFormulario', 'value' => 'Alterar', 'class' => 'btn btn-primary col-sm-4']) !!}
        @else
          {!!Form::submit('Agendar', [ 'class' => 'btn btn-primary col-sm-4', 'id' => 'btnFormulario' ]) !!}
      @endif
    
    {!! Form::close() !!}
  </div>

@endsection