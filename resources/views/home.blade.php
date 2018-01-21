@extends('layouts.app')
{{--  @extends('layout.master')  --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bem Vindo</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Sucesso, cadastro realizado!

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ ('/consultas') }}" title="Click aqui para agendamentos">Clik aqui para vizualizar ou agendar consultas...</a></li>
                    </ul>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
