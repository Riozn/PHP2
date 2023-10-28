<!DOCTYPE html>
<html>
<head>
    <title>Lista de Platos</title>
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
      
        .back-link {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            border: 1px solid #3498db;
            padding: 5px 10px;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        .back-link:hover {
            background-color: #3498db;
            color: #fff;
        }   
    </style>
</head>
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

    <a class="back-link" href="{{ route('dish.index') }}">Volver a la Creación de Platos</a>
    <a class="back-link" href="javascript:history.go(-1)">Volver Atrás</a>

    

</body>
</html>
