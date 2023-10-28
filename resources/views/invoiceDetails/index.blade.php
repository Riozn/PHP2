<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listado de Detalles de Factura</title>
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
       
</head>
<body>
    <div class="container">
        <h1>Listado de Detalles de Factura</h1>
        <a href="{{ route('invoiceDetails.create') }}" class="btn btn-success">Crear Detalle de Factura</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>OrdenID</th>
                    <th>PlatoID</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoiceDetails as $invoiceDetails)
                    <tr>
                        <td>{{ $invoiceDetails->id }}</td>
                        <td>{{ $invoiceDetails->OrderID }}</td>
                        <td>{{ $invoiceDetails->PlatoID }}</td>
                        <td>{{ $invoiceDetails->Cantidad }}</td>
                        <td>{{ $invoiceDetails->PrecioUnitario }}</td>
                        <td>
                            <a href="{{ route('invoiceDetails.show', $invoiceDetails->id) }}" class="btn btn-primary">Ver</a>
                            <a href="{{ route('invoiceDetails.edit', $invoiceDetails->id) }}" class="btn btn-warning">Editar</a>
                            <form method="POST" action="{{ route('invoiceDetails.destroy', $invoiceDetails->id) }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('invoiceDetails.create') }}" class="btn btn-success">Crear Detalle de Factura</a>
    </div>
</body>
</html>
