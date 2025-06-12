<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer contraseña</title>
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
</head>
<body>

    <div class="contenedor">
        <form method="POST" action="{{ route('password.email') }}" class="formulario">
            @csrf

            <h2 class="titulo">Restablecer contraseña</h2>

            <p class="descripcion">
                Ingresa tu dirección de correo electrónico y te enviaremos un enlace para restablecerla.
            </p>

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

            <div class="acciones">
                <a href="{{ route('login') }}" class="enlace">Volver al inicio de sesión</a>
                <button type="submit" class="boton">Enviar enlace</button>
            </div>

            
        </form>
    </div>

</body>
</html>
