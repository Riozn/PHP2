<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        form {
            background-color: #fff;
            max-width: 400px;
            margin: 20px auto;
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
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Editar Cliente</h1>

    <form method="POST" action="{{ route('customers.update', $customer->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="Nombre">Nombre:</label>
            <input type="text" name="Nombre" id="Nombre" value="{{ $customer->Nombre }}" required>
        </div>

        <div>
            <label for="Telefono">Teléfono:</label>
            <input type="text" name="Telefono" id="Telefono" value="{{ $customer->Telefono }}" required>
        </div>

        <div>
            <label for="Email">Email:</label>
            <input type="email" name="Email" id="Email" value="{{ $customer->Email }}" required>
        </div>

        <div>
            <label for="FechaRegistro">Fecha de Registro:</label>
            <input type="date" name="FechaRegistro" id="FechaRegistro" value="{{ $customer->FechaRegistro }}" required>
        </div>

        <button type="submit">Actualizar Cliente</button>
    </form>

    <a href="{{ route('customers.index') }}">Volver a la Lista de Clientes</a>
</body>
</body>
</html>
