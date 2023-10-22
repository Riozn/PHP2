<!DOCTYPE html>
<html>
<head>
    <title>Detalles de Factura</title>
</head>
<body>
    <h1>Detalle de Factura</h1>

    <table>
        <tr>
            <th>ID de Orden:</th>
            <td>{{ $invoiceDetail->OrdenID }}</td>
        </tr>
        <tr>
            <th>ID de Plato:</th>
            <td>{{ $invoiceDetail->PlatoID }}</td>
        </tr>
        <tr>
            <th>Cantidad:</th>
            <td>{{ $invoiceDetail->Cantidad }}</td>
        </tr>
        <tr>
            <th>Precio Unitario:</th>
            <td>{{ $invoiceDetail->PrecioUnitario }}</td>
        </tr>
    </table>

    <a href="{{ route('invoiceDetails.index') }}">Volver a la lista de detalles de factura</a>
</body>
</html>
