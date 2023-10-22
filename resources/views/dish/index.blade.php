<!DOCTYPE html>
<html>
<head>
    <title>Lista de Platos</title>
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
    <h1>Lista de Platos</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('dish.create') }}">Crear Nuevo Plato</a>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Estado Activo</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dish as $dish)
                <tr>
                    <td>{{ $dish->Nombre }}</td>
                    <td>{{ $dish->Descripcion }}</td>
                    <td>{{ $dish->Precio }}</td>
                    <td>{{ $dish->Activo ? 'Activo' : 'Inactivo' }}</td>
                    <td>
                        <img src="{{ $dish->getImageUrl() }}" alt="Imagen del plato" width="100">
                    </td>
                    <td>
                        <a href="{{ route('dish.show', $dish->id) }}">Ver</a>
                        <a href="{{ route('dish.edit', $dish->id) }}">Editar</a>
                        <form method="POST" action="{{ route('dish.destroy', $dish->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
