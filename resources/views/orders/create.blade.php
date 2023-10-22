<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear Nueva Orden</title>
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
        section h1 {
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
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
        <h1>Crear Nueva Orden</h1>
    </header>

    <main>
        <section>
            <h1 style="text-align: center;">Crear Nueva Orden</h1>

            <form method="POST" action="{{ route('orders.store') }}" style="margin-top: 20px;">
                @csrf

                <div>
                    <label for="customers_id" style="display: block;">Cliente:</label>
                    <select name="customers_id" id="customers_id" required>
                        @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="NumeroPersonas" style="display: block;">Número de Personas:</label>
                    <input type="number" name="NumeroPersonas" id="NumeroPersonas" required>
                </div>

                <div>
                    <label for="FechaOrden" style="display: block;">Fecha de Orden:</label>
                    <input type="date" name="FechaOrden" id="FechaOrden" required>
                </div>

                <button type="submit">Crear Orden</button>
            </form>
        </section>
    </main>
</body>
</html>
