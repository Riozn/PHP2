<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Detalles de la Orden</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #000;
            color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
            text-align: center;
        }
        header h1 {
            font-size: 24px;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
        }
        .btn-primary {
            background-color: #007bff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Detalles de la Orden</h1>
    </header>

    <div class="container">
        <h1>Detalles de la Orden #{{ $order->id }}</h1>

        <p><strong>Cliente:</strong> {{ $order->customer->nombre }}</p>
        <p><strong>Número de Personas:</strong> {{ $order->NumeroPersonas }}</p>
        <p><strong>Fecha de Orden:</strong> {{ $order->FechaOrden }}</p>

        <a href="{{ route('orders.index') }}" class="btn btn-primary">Volver al Listado</a>
    </div>
</body>
</html>
