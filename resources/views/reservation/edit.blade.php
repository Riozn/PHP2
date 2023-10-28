<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Reservación</title>
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
        .form-group {
            margin-bottom: 10px;
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
        .form-control {
            width: 100%;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Editar Reservación</h1>
    </header>

    <div class="container">
        <h1>Editar Reservación</h1>

        <!-- Manejo de errores -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('reservation.update', $reservation->id) }}">
            @csrf
            @method('PUT') <!-- Usamos el método PUT para actualizar la reserva -->

            <div class="form-group">
                <label for="customer_id">Cliente:</label>
                <select name="customer_id" id="customer_id" class="form-control" required>
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}" {{ $customer->id == $reservation->customer_id ? 'selected' : '' }}>{{ $customer->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="FechaReserva">Fecha de Reserva:</label>
                <input type="date" name="FechaReserva" id="FechaReserva" class="form-control" value="{{ $reservation->FechaReserva }}" required>
            </div>

            <div class="form-group">
                <label for="NumeroPersonas">Número de Personas:</label>
                <input type="number" name="NumeroPersonas" id="NumeroPersonas" class="form-control" value="{{ $reservation->NumeroPersonas }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Reservación</button>
        </form>
    </div>
</body>
</html>
