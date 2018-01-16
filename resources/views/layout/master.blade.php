<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset ('css/customstyle.css') }}">
  <link rel="stylesheet" href="{{ asset( '/css/app.css' ) }}">
  <link rel="stylesheet" href="{{asset ('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <title>Agendamento Consultas</title>
</head>
<body>
  <div class="container-fluid">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">Agendamento de Consultas</a>
        </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/consultas">Listagem</a></li>
          </ul>
      </div>
    </nav>
    
    <div class="container">
      @yield('conteudo')
    </div>

    <footer class="footer">
      <p>&copy 2018 - Josuel A. Lopes</p>
    </footer>
  </div>
</body>
</html>