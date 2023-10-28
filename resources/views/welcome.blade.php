<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Restaurante UDI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('images/Presentacion.jpg') }}');
            background-size: 100% 950px;
        }
        header {
            background-color: #ff0000;
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
            padding: 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .welcome-text {
            font-size: 24px;
            color: #fff;
            position: absolute;
            white-space: nowrap;
            word-spacing: 3px;
            border-left: 1px solid #fff;
            padding-left: 10px;
            top: 70%;
            right: 30px;
            font-weight: bold;
        }
        .left {
            left: 0;
            top: 70%;
        }
        .center {
            left: 56%;
            top: 70%;
            transform: translateX(-50%);
        }
        .right {
            right: 100;
            top: 70%;
        }
        footer {
            background-color: #ff0000;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
            border-top: 1px solid #ff3333;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            border: none;
            text-align: center;
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            position: absolute;
            right: 50px;
            top: 15px;
        }
        .btn-primary {
            background-color: #007bff;
            right: 150px;
        }
        .btn-secondary {
            background-color: #6c757d;
            right: 10px;
        }

    </style>
</head>
<body>
    <header>
        <h1>Restaurante UDI</h1>
    </header>

    <nav>
        <ul>
<<<<<<< HEAD
            <li><a href="{{ route('dish.index') }}">Ver Platos</a></li>
            <li><a href="{{ route('customers.index') }}">Ver Clientes</a></li>
            <li><a href="{{ route('invoiceDetails.index') }}">Ver Facturas</a></li>
            <li><a href="{{ route('orders.index') }}">Ver Órdenes</a></li>
            <li><a href="{{ route('reservation.index') }}">Ver Reservaciones</a></li>
            <li><a href="{{ route('login')}}">login</a></li>
            <li><a href="{{ route('register')}}">register</a></li>
=======
            <li><a href="{{ route('dish.index') }}">Platos</a></li>
            <li><a href="{{ route('customers.index') }}">Clientes</a></li>
            <li><a href="{{ route('invoiceDetails.index') }}"> Facturas</a></li>
            <li><a href="{{ route('orders.index') }}"> Órdenes</a></li>
            <li><a href="{{ route('reservation.index') }}"> Reservaciones</a></li>
            <li><a href="{{ route('mesa.index') }}">Ir a la lista de mesas</a></li>
            <li><a href="{{route('login')}}">Login</a></li>
            <li><a href="{{route('register')}}">register</a></li>
           
>>>>>>> e29d24295fa588e7f396fa7cfd222e789cb96c20
        </ul>
    </nav>

    <main>
        <div class="welcome-text left">
            <strong>BIENVENIDO A NUESTRO RESTAURANTE</strong>
        </div>
        <div class="welcome-text center">
            <strong>TENDRAS UNA EXPERIENCIA CULINARIA UNICA</strong>
        </div>
        <div class="welcome-text right">
            <strong>CON LOS SABORES MAS DELICIOSOS</strong>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 Restaurante UDI</p>
    </footer>
</body>
</html>
