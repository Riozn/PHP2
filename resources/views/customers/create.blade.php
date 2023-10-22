<!DOCTYPE html>
<html>
<head>
    <title>Crear Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        form {
            background-color: #fff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>
<body>
    

    
    <form method="POST" action="{{ route('customers.store') }}">
        @csrf

        <div>
            <label for="Nombre">Nombre:</label>
            <input type="text" name="Nombre" id="Nombre" required>
        </div>

        <div>
            <label for="Telefono">Teléfono:</label>
            <input type="text" name="Telefono" id="Telefono" required>
        </div>

        <div>
            <label for="Email">Email:</label>
            <input type="email" name="Email" id="Email" required>
        </div>

        <div>
            <label for="FechaRegistro">Fecha de Registro:</label>
            <input type="date" name="FechaRegistro" id="FechaRegistro" required>
        </div>

        <button type="submit">Guardar Cliente</button>
    </form>

    <a href="{{ route('customers.index') }}">Volver a la Lista de Clientes</a>
</body>
</html>
