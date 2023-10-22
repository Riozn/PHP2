<!DOCTYPE html>
<html>
<head>
    <title>Lista de Clientes</title>
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
    <h1>Lista de Clientes</h1>
   
    <a href="{{ route('customers.create') }}">Crear Nuevo Cliente</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
>

    <a href="{{ route('customers.create') }}"></a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Fecha de Registro</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->Nombre }}</td>
                    <td>{{ $customer->Telefono }}</td>
                    <td>{{ $customer->Email }}</td>
                    <td>{{ $customer->FechaRegistro }}</td>
                    <td>
                        <a href="{{ route('customers.show', $customer->id) }}">Ver</a>
                        <a href="{{ route('customers.edit', $customer->id) }}">Editar</a>
                        <form method="POST" action="{{ route('customers.destroy', $customer->id) }}">
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
