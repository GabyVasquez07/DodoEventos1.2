<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    tr:hover {
        background-color: #f1f1f1;
    }
</style>
<body>
    <h1>Bienvenido a DodoEventos</h1>
    <h2>Administrar y crear Evento</h2>
    <form action="{{ route('guardar') }}" method="POST">
        @csrf
        <label for="org">Organizador:</label>
        <select name="fk_usuario">
            @foreach(($organizadores) as $organizador)
                <option value="{{ $organizador->id }}">{{ $organizador->nombre }}</option>
            @endforeach
        </select>  <br><br>

        <label for="nombre">Nombre del evento:</label>
        <input type="text"  name="nombre_evento" required><br><br>

        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" required><br><br>

        <label for="fecha">Fecha:</label>
        <input type="date"  name="fecha_evento" required><br><br>

        <label for="hora">Hora:</label>
        <input type="time"  name="hora_evento" required><br><br>

        <label for="ubicacion">Ubicación:</label>
        <input type="text"  name="ubicacion" required><br><br>

        <label for="estado">Estado:</label>
        <select name="estado" required>
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
        </select><br><br>
        <label for="asistentes">Asistentes:</label>
        <input type="number" name="asistentes" required><br><br>
        <a href="{{route ('index')}}"><button type="submit">Crear Evento</button></a>
    </form>
    
</body>
</html>