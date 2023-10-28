<!DOCTYPE html>
<html>
<head>
    <title>Listado de Mesas</title>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    th {
        background-color: #4CAF50;
        color: white;
    }
</style>
<body>
    <h1>Listado de Mesas</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Capacidad</th>
            <th>Ubicacion</th>
            <th>Acciones</th>
        </tr>
        @foreach ($mesas as $mesas)
        <tr>
            <td>{{ $mesas->id }}</td>
            <td>{{ $mesas->capacidad }}</td>
            <td>{{ $mesas->ubicacion }}</td>
            <td>
                <a href="{{ route('mesa.show', $mesas->id) }}">Ver</a>
                <a href="{{ route('mesa.edit', $mesas->id) }}">Editar</a>
            </td>
        </tr>
        @endforeach
    </table>

    <a href="{{ route('mesa.create') }}">Agregar Mesa</a>
</body>
</html>
