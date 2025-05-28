<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h2>Registro</h2>
    @if ($errors->any())
    <div>
        <div> Algo salió mal </div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
    @endif
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" autofocus>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" value="{{ old('password') }}">
        </div>
        <div>
        <label for="password_confirmation">Confirmar Contraseña</label>
        <input type="password_confirmation" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}">
        </div>
        <duv>
            <button>Registrarse</button>
        </duv>
    </form>
</body>
</html>