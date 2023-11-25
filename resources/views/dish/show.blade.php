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
                    <img src="{{ asset('images/' . $dish->Imagen) }}" alt="{{ $dish->Nombre }}" style="max-width: 300px">
                @else
                    <p>No hay imagen disponible.</p>
                @endif
    
            <a href="{{ route('dish.edit', $dish) }}" class="btn btn-primary">Editar Plato</a>
            </td>
        </tr>
    </table>

    <a href="{{ route('dish.index') }}">Volver a la Lista de Platos</a>
</body>
</html>
