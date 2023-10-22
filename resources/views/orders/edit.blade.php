<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Orden</title>
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
        main {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 10px;
        }
        label {
            display: block;
        }
        select, input[type="number"], input[type="date"] {
            width: 100%;
            padding: 5px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Editar Orden #{{ $order->id }}</h1>
    </header>

    <main>
        <h1>Editar Orden #{{ $order->id }}</h1>

        <form method="POST" action="{{ route('orders.update', $order->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="customers_id">Cliente:</label>
                <select name="customers_id" id="customers_id">
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}" {{ $customer->id == $order->customers_id ? 'selected' : '' }}>
                            {{ $customer->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="NumeroPersonas">Número de Personas:</label>
                <input type="number" name="NumeroPersonas" id="NumeroPersonas" value="{{ $order->NumeroPersonas }}" required>
            </div>

            <div class="form-group">
                <label for="FechaOrden">Fecha de Orden:</label>
                <input type="date" name="FechaOrden" id="FechaOrden" value="{{ $order->FechaOrden }}" required>
            </div>

            <button type="submit">Actualizar Orden</button>
        </form>
    </main>
</body>
</html>
