<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Plato</title>
</head>
<body>
    <h1>Detalles del Plato</h1>

    <table>
        <tr>
            <th>Nombre:</th>
            <td>{{ $dish->Nombre }}</td>
        </tr>
        <tr>
            <th>Descripción:</th>
            <td>{{ $dish->Descripcion }}</td>
        </tr>
        <tr>
            <th>Precio:</th>
            <td>{{ $dish->Precio }}</td>
        </tr>
        <tr>
            <th>Estado Activo:</th>
            <td>{{ $dish->Activo ? 'Activo' : 'Inactivo' }}</td>
        </tr>
        <tr>
            <th>Imagen:</th>
            <td>
                @if ($dish->Imagen)
                <img src="{{ asset('storage/images/' . $dish->Imagen) }}" alt="Imagen del plato" width="200">
                @else
                    No hay imagen disponible
                @endif
            </td>
        </tr>
    </table>

    <a href="{{ route('dish.index') }}">Volver a la Lista de Platos</a>
</body>
</html>
