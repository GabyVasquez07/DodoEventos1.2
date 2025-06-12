<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar contraseña</title>
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
</head>
<body>

    <div class="contenedor">
        <form method="POST" action="{{ route('password.confirm') }}" class="formulario">
            @csrf

            <h2 class="titulo">Confirmar contraseña</h2>

            <p class="descripcion">
                Esta es una zona segura de la aplicación. Por favor, confirma tu contraseña antes de continuar.
            </p>

            <!-- Contraseña -->
            <div class="campo">
                <label for="password">Contraseña</label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="acciones">
                <button type="submit" class="boton">Confirmar</button>
            </div>
        </form>
    </div>

</body>
</html>
