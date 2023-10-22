<!DOCTYPE html>
<html>
<head>
    <title>Crear Reserva</title>
</head>
<body>
    <h1>Crear Reserva</h1>
    <form method="POST" action="{{ route('reservation.store') }}">
        @csrf
        <label for="customer_id">Cliente:</label>
        <select name="customer_id" required>
            @foreach($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->nombre }}</option>
            @endforeach
        </select><br><br>
        <label for="FechaReserva">Fecha de Reserva:</label>
        <input type="date" name="FechaReserva" required><br><br>
        <label for="NumeroPersonas">Número de Personas:</label>
        <input type="number" name="NumeroPersonas" required><br><br>
        <input type="submit" value="Crear Reserva">
    </form>
</body>
</html>