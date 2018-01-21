@extends('layouts.app') @section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Cadastro</div>

        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Nome</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Seu nome" required autofocus> @if ($errors->has('name'))
                <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">Cadastro E-Mail</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="seunome@dominio.com.br" required> @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="tipouser" class="col-md-4 control-label">Tipo Registro</label>

              <div class="from-control col-md-8 form-group{{ $errors->has('tipouserop') ? ' has-error' : '0' }}">
                <select class="selectpicker show-tick btn-primary col-sm-9 col-xs-12" data-style="btn-primary" name="tipouser" id="tiposuserop"
                  style="height:35px; border-radius: .4rem;">
                  <option selected id="tipouserop" value="0">Selecione...</option>
                  <option value="Mécico">Médico</option>
                  <option value="Paciente">Paciente</option>
                  <option value="Administrador">Administrador</option>
                </select>
                <!-- Split button-->
                <!-- <div class="btn-group">
                                <button type="button" class="btn btn-primary">Selecione...</button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#"></a></li>
                                    <li><a href="#">Médico</a></li>
                                    <li><a href="#">Paciente</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Administrador</a></li>
                                </ul>
                                </div> -->

                @if ($errors->has('tipouserop'))
                <span class="help-block">
                  <strong>{{ $errors->first('Selecione um tipo') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">Password</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password"placeholder="Senha deve conter 6 ou mais caracteres" required> @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder=" Confirme sua senha" required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  Cadastrar
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection