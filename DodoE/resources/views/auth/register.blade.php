<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
</head>
<body>

    <div class="contenedor">
        <form method="POST" action="{{ route('register') }}" class="formulario">
            @csrf

            <h2 class="titulo">Crear cuenta</h2>

            <!-- Nombre -->
            <div class="campo">
                <label for="name">Nombre</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                @error('name')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Correo -->
            <div class="campo">
                <label for="email">Correo</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required>
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

            <!-- Confirmar contraseña -->
            <div class="campo">
                <label for="password_confirmation">Confirmar contraseña</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required>
                @error('password_confirmation')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="acciones">
                <a href="{{ route('login') }}" class="enlace">¿Ya estás registrado?</a>
                <button type="submit" class="boton">Registrarse</button>
            </div>
        </form>
    </div>

</body>
</html>
