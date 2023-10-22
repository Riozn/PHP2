<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Información del Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        p {
            margin: 10px 0;
        }
        .btn {
            display: block;
            text-align: center;
            margin-top: 20px;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Información del Cliente</h1>

        <p>Nombre: {{ $customer->Nombre }}</p>
        <p>Teléfono: {{ $customer->Telefono }}</p>
        <p>Email: {{ $customer->Email }}</p>
        <p>Fecha de Registro: {{ $customer->FechaRegistro }}</p>
        
        <a href="{{ route('customers.index') }}" class="btn btn-primary">Volver a la Lista de Clientes</a>
    </div>
</body>
</html>
