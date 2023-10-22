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
        nav ul {
            list-style-type: none;
            padding: 0;
            background-color: #333;
            text-align: center;
        }
        nav ul li {
            display: inline;
            margin: 0 10px;
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
          
            <li><a href="{{ route('dish.index') }}">Ver Platos</a></li>
            <li><a href="{{ route('customers.index') }}">Ver Clientes</a></li>
            <li><a href="{{ route('invoiceDetails.index') }}">Ver Facturas</a></li>
            <li><a href="{{ route('orders.index') }}">Ver Órdenes</a></li>
            <li><a href="{{ route('reservation.index') }}">Ver Reservaciones</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <h2>Sección Principal</h2>
            <p>Esta es la página de inicio de la aplicación. Puedes agregar contenido adicional aquí.</p>
        </section>
    </main>

    <footer>
        <p>&copy; {{ date("Y") }} Mi Aplicación</p>
    </footer>
</body>
</html>
