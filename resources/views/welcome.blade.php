<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Restaurante</title>
  
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
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
        }
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        section h2 {
            font-size: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        footer p {
            margin: 0;
        }
        
    </style>
</head>
<body>
    <header>
        <h1>Bienvenido a Mi Restaurante</h1>
    </header>

    <nav>
        <ul>
            <li><a href="{{ route('dish.index') }}">Platos</a></li>
            <li><a href="{{ route('customers.index') }}">Clientes</a></li>
            <li><a href="{{ route('invoiceDetails.index') }}"> Facturas</a></li>
            <li><a href="{{ route('orders.index') }}"> Órdenes</a></li>
            <li><a href="{{ route('reservation.index') }}"> Reservaciones</a></li>
            <li><a href="{{ route('mesa.index') }}">Ir a la lista de mesas</a></li>
           
        </ul>
    </nav>


    <footer>
        <p>&copy; {{ date("Y") }} Mi Aplicación</p>
    </footer>
</body>
</html>
