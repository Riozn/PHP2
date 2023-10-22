<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Detalles de la Reservación</title>
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
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #007bff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Detalles de la Reservación</h1>
    </header>

    <div class="container">
        <h1>Detalles de la Reservación</h1>

        <p>ID de Cliente: {{ $reservation->customer_id }}</p> <!-- Accede al ID del cliente relacionado -->
        <p>Nombre del Cliente: {{ $reservation->customer->nombre }}</p>
        <p>Fecha de Reserva: {{ $reservation->FechaReserva }}</p>
        <p>Número de Personas: {{ $reservation->NumeroPersonas }}</p>

        <a href="{{ route('reservation.index') }}" class="btn btn-primary">Volver a la lista de reservas</a>
    </div>
</body>
</html>
