<!DOCTYPE html>
<html>
<head>
    <title>Crear Nueva Mesa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f5f5f5;
        }

        h1 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="number"],
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            display: inline-block;
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #007BFF;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Crear Nueva Mesa</h1>

    <form method="POST" action="{{ route('mesa.store') }}">
        @csrf
        <label for="capacidad">Capacidad:</label>
        <input type="number" name="capacidad" required>

        <label for="ubicacion">Ubicación:</label>
        <input type="text" name="ubicacion" required>

        <button type="submit">Guardar Mesa</button>
    </form>

    <a href="{{ route('mesa.index') }}">Volver al Listado</a>
</body>
</html>
