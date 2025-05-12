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
    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        font-size: 16px;
    }
</style>
<body>
    <h1>Lista de Eventos</h1>
    <a href="{{route ('crear')}}"><button type="button">Insertar nuevo Evento</button></a>
    <table>
        <thead>
            <tr>
                <th>Organizador</th>
                <th>Evento</th>
                <th>Descripcion</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Ubicación</th>
                <th>Estado</th>
                <th>Asistentes</th>
                <!--<th>Acciones</th>-->
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->Eventos->nombre }}</td>
                    <td>{{ $event->nombre_evento }}</td>
                    <td>{{ $event->descripcion }}</td>
                    <td>{{ $event->fecha_evento }}</td>
                    <td>{{ $event->hora_evento }}</td>
                    <td>{{ $event->ubicacion }}</td>
                    <td>{{ $event->estado }}</td>
                    <td>{{ $event->asistentes }}</td>
                    <<td><a href="{{route('editar',$event->id)}}"><button type="button">Editar</button></a></td>
                    <td>
                        <form action="{{route('borrar', $event->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Borrar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>