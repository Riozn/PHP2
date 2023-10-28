<!DOCTYPE html>
<html>
<head>
    <title>Detalles de la Mesa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f5f5f5;
        }

        h1 {
            color: #333;
        }

        p {
            margin: 10px 0;
        }

        a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <h1>Detalles de la Mesa</h1>

    <p><strong>ID:</strong> {{ $mesa->id }}</p>
    <p><strong>Capacidad:</strong> {{ $mesa->capacidad }}</p>
    <p><strong>Ubicación:</strong> {{ $mesa->ubicacion }}</p>

    <a href="{{ route('mesa.index') }}">Volver al Listado</a>
</body>
</html>
