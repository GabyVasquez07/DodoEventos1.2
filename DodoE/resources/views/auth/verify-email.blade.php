<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar correo</title>
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
</head>
<body>

    <div class="contenedor">
        <div class="formulario">

            <h2 class="titulo">Verifica tu correo</h2>

            <p class="descripcion">
                ¡Gracias por registrarte! Antes de comenzar, por favor verifica tu dirección de correo electrónico haciendo clic en el enlace que te acabamos de enviar.
                <br>Si no recibiste el correo, podemos enviarte otro.
            </p>

            <!-- Mensaje de éxito si se ha reenviado el enlace -->
            @if (session('status') == 'verification-link-sent')
                <div class="mensaje-sesion exito">
                    Se ha enviado un nuevo enlace de verificación a tu dirección de correo.
                </div>
            @endif

            <div class="acciones doble">
                <!-- Reenviar verificación -->
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="boton">Reenviar correo</button>
                </form>

                <!-- Cerrar sesión -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="boton boton-secundario">Cerrar sesión</button>
                </form>
            </div>

        </div>
    </div>

</body>
</html>
