<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Detalle de Factura</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #258cd1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Editar Detalle de Factura</h1>
        <form method="POST" action="{{ route('invoiceDetails.update', $invoiceDetail->id) }}" class="my-4">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="OrdenID">Order ID:</label>
                <input type="number" name="OrdenID" value="{{ $invoiceDetail->OrdenID }}" required>
            </div>
            <div class="form-group">
                <label for="PlatoID">PlatoID :</label>
                <input type="number" name="PlatoID" value="{{ $invoiceDetail->PlatoID }}" required>
            </div>
            <div class="form-group">
                <label for="Cantidad">Cantidad:</label>
                <input type="number" name="Cantidad" value="{{ $invoiceDetail->Cantidad }}" required>
            </div>
            <div class="form-group">
                <label for="PrecioUnitario">Precio Unitario:</label>
                <input type="number" name="PrecioUnitario" step="0.01" value="{{ $invoiceDetail->PrecioUnitario }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>
</html>
