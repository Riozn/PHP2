<!DOCTYPE html>
<html>
<head>
    <title>Detalles de Factura</title>
</head>
<body>
    <h1>Detalles de Factura</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID de Orden</th>
                <th>ID de Plato</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoiceDetails as $invoiceDetail)
                <tr>
                    <td>{{ $invoiceDetail->OrdenID }}</td>
                    <td>{{ $invoiceDetail->PlatoID }}</td>
                    <td>{{ $invoiceDetail->Cantidad }}</td>
                    <td>{{ $invoiceDetail->PrecioUnitario }}</td>
                    <td>
                        <a href="{{ route('invoiceDetails.show', $invoiceDetail) }}">Ver</a>
                        <a href="{{ route('invoiceDetails.edit', $invoiceDetail) }}">Editar</a>
                        <form method="POST" action="{{ route('invoiceDetails.destroy', $invoiceDetail) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('invoiceDetails.create') }}">Crear Nuevo Detalle de Factura</a>
</body>
</html>
