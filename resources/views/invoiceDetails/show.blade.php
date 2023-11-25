<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Factura</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            border: 1px solid #3498db;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #3498db;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalle de Factura</h1>

        <table>
            <tr>
                <th>ID de Orden:</th>
                <td>{{ $invoiceDetails->OrdenID }}</td>
            </tr>
            <tr>
                <th>ID de Plato:</th>
                <td>{{ $invoiceDetails->PlatoID }}</td>
            </tr>
            <tr>
                <th>Cantidad:</th>
                <td>{{ $invoiceDetails->Cantidad }}</td>
            </tr>
            <tr>
                <th>Precio Unitario:</th>
                <td>{{ $invoiceDetails->PrecioUnitario }}</td>
            </tr>
        </table>

        <a href="{{ route('invoiceDetails.index') }}">Volver a la lista de detalles de factura</a>
    </div>
</body>
</html>
