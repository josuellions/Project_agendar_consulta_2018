<!-- <!DOCTYPE html> -->
{{--  <html lang="en">
<head>  --}}
@extends('layouts.app')

@section('conteudo_heder')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet/less" type="text/css" media="screen" href="{{ asset ('less/styles.less') }}" />
  <script type="text/javascript" src="{{ asset ('less/less.min.js') }}"></script>
  <link rel="stylesheet" href="{{ asset ('css/customstyle.css') }}">
  <link rel="stylesheet" href="{{ asset( '/css/app.css' ) }}">
  <link rel="stylesheet" href="{{asset ('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
          <link rel="shortcout icon" type="image/x-icon" href="{{ asset( 'img/medical_icon_1.png') }}">
        <link rel="icon" type="image/x-icon" href="{{ asset ( 'img/medical_icon_1.png') }}">
  <title>Agendamento Consultas</title>
{{--  </head>  --}}
@endsection

@section('conteudo_body')
{{--  <body>  --}}
  <div class="container-fluid">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" title="Agendamento de consultas">Agendamento de Consultas</a>
        </div>
          {{--  <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ ('/') }}">Home</a></li>
          </ul>  --}}
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ action ('ConsultaController@lista') }}">Listagem</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ action ('ConsultaController@novaconsulta') }}">Agendar</a></li>
          </ul>
      </div>
    </nav>
    
    <div class="container">
       <div class="row">
         <div class="col-sm-12">@yield('conteudo')</div>
       </div>
    </div>

    <footer class="footer">
      <p>&copy 2018 - Josuel A. Lopes</p>
    </footer>
  </div>
@endsection
{{--  </body>  --}}
{{--  </html>  --}}