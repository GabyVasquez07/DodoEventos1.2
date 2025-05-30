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
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" autofocus>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
        </div>
        <div>
            <label for="contraseña">Contraseña</label>
            <input type="password" name="contraseña" id="contraseña">
        </div>
        <div>
            <label for="contraseña_confirmation">Confirmar Contraseña</label>
            <input type="password" name="contraseña_confirmation" id="contraseña_confirmation">
        </div>
        <div>
            <label for="rol">Rol</label>
            <select name="rol" id="rol">
                <option value="">Selecciona un rol</option>
                <option value="admin" {{ old('rol') == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="usuario" {{ old('rol') == 'usuario' ? 'selected' : '' }}>Usuario</option>
            </select>
        </div>
        <div>
            <button type="submit">Registrarse</button>
        </div>
    </form>
</body>
</html>