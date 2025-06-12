<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
</head>
<body>

    <div class="contenedor">
        <form method="POST" action="{{ route('login') }}" class="formulario">
            @csrf

            <h2 class="titulo">Iniciar sesión</h2>

            <!-- Mensaje de sesión -->
            @if (session('status'))
                <div class="mensaje-sesion">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Correo -->
            <div class="campo">
                <label for="email">Correo</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Contraseña -->
            <div class="campo">
                <label for="password">Contraseña</label>
                <input id="password" type="password" name="password" required>
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Recordarme -->
            <div class="campo-checkbox">
                <label>
                    <input type="checkbox" name="remember">
                    Recuérdame
                </label>
            </div>

            <div class="acciones">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="enlace">¿Olvidaste tu contraseña?</a>
                @endif
                <button type="submit" class="boton">Iniciar</button>
            </div>
        </form>
    </div>

</body>
</html>
