<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Alquimia</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        
        header {
            background-color: #000;
            color: #fff; /* Texto en blanco */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
        }
        
        .navbar-light .navbar-toggler-icon {
            background-color: #fff;
        }
        
        .navbar-nav {
            margin-left: auto;
            display: flex;
            align-items: center;
        }
        
        .navbar-nav .nav-item {
            margin-right: 20px;
        }
        
        .navbar-nav .nav-link {
            font-size: 18px;
            color: #fff;
            transition: color 0.3s;
        }
        
        .navbar-nav .nav-link:hover {
            color: #007bff;
        }
        
        .container {
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }
        
        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Restaurante Alquimia</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('customers.index') }}">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dish.index') }}">Platos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('invoiceDetails.index') }}">Factura</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('orders.index') }}">Orden</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reservation.index') }}">Reservación</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        @yield('content')
    </main>

    <footer class="text-center py-3 footer">
        <p>Mi Aplicación &copy; {{ date('Y') }}</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

