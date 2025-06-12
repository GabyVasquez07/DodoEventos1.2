<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{ asset('estilos.css') }}">
    <title>Bienvenido</title>
</head>
<body>
    <h1 class="titulo">Bienvenido a DodoEventos</h1>
     @if (Route::has('login'))
       @auth
       <a class="link" href="{{ route('dashboard') }}">Dashboard</a> 
       @else
        <a class="link" href="{{ route('login') }}">Iniciar Sesión</a> |
        @if (Route::has('register'))
        <a class="link" href="{{ route('register') }}">Registrarse</a>
        @endif
       @endauth
      @endif
</body>
</html>
