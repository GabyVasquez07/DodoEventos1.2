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
        <form method="POST" action="{{ route('password.store') }}" class="formulario">
            @csrf

            <h2 class="titulo">Restablecer contraseña</h2>

            <!-- Token oculto -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Correo -->
            <div class="campo">
                <label for="email">Correo</label>
                <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Nueva contraseña -->
            <div class="campo">
                <label for="password">Nueva contraseña</label>
                <input id="password" type="password" name="password" required autocomplete="new-password">
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirmar contraseña -->
            <div class="campo">
                <label for="password_confirmation">Confirmar contraseña</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                @error('password_confirmation')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="acciones">
                <a href="{{ route('login') }}" class="enlace">Volver al inicio de sesión</a>
                <button type="submit" class="boton">Restablecer</button>
            </div>
        </form>
    </div>

</body>
</html>
