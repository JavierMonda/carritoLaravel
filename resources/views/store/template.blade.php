<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title', 'Imprenta Online')</title>

    <!-- Bootstrap -->
    <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- CDN Lumen -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-gv0oNvwnqzF6ULI9TVsSmnULNb3zasNysvWwfT/s4l8k5I+g6oFz9dye0wg3rQ2Q" crossorigin="anonymous">
    <!-- Font Aweson -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Estilos propios -->
    <link href="{{ url('assets/bootstrap/css/style.css') }}" rel="stylesheet">    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @include('store.partials.nav')
  </head>
  <body>
    
    
    <div class="container">
      @yield('content')
    </div>

    @include('store.partials.footer')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- jQuery for create Pinterest Grid -->
    <script src="{{ url('/assets/bootstrap/js/pinterest_grid.js') }}"></script>
    <!-- javaScript personalizado -->
    <script src="{{ url('/assets/bootstrap/js/main.js') }}"></script>
  </body>
</html>