<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurante UDI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        :root {
            --primary-color: #8B0000;
            --secondary-color: #FFD700;
            --dark-color: #272222;
            --light-color: #f8f9fa;
            --accent-color: #A52A2A;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-color);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px 0;
            text-align: center;
            position: relative;
        }
        
        header h1 {
            font-size: 2.2rem;
            margin: 0;
            font-weight: 700;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }
        
        nav {
            background-color: var(--dark-color);
            padding: 12px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        nav ul li {
            margin: 0 15px;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 500;
            padding: 8px 12px;
            border-radius: 4px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
        }
        
        nav ul li a:hover {
            color: var(--secondary-color);
            background-color: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }
        
        nav ul li a i {
            margin-right: 8px;
        }
        
        .main-container {
            flex: 1;
            padding: 30px 0;
        }
        
        .content-box {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            padding: 30px;
            margin-bottom: 30px;
        }
        
        .welcome-image {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 25px;
            transition: transform 0.3s;
        }
        
        .welcome-image:hover {
            transform: scale(1.02);
        }
        
        .btn-logout {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s;
            box-shadow: 0 2px 10px rgba(139, 0, 0, 0.3);
            position: absolute;
            right: 30px;
            top: 20px;
            display: flex;
            align-items: center;
        }
        
        .btn-logout:hover {
            background-color: #6B0000;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(139, 0, 0, 0.4);
        }
        
        .btn-logout i {
            margin-right: 8px;
        }
        
        footer {
            background-color: var(--dark-color);
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: auto;
            border-top: 3px solid var(--secondary-color);
        }
        
        footer p {
            margin: 0;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            nav ul li {
                margin: 5px 10px;
            }
            
            header h1 {
                font-size: 1.8rem;
            }
            
            .btn-logout {
                position: relative;
                right: auto;
                top: auto;
                margin: 15px auto;
                display: inline-flex;
            }
        }
    </style>
</head>
<body>
    <div class="main-container">
        <header>
            <h1>Restaurante UDI</h1>
            <form method="POST" action="{{ route('signOut')}}">
                @csrf
                <button type="submit" class="btn-logout">
                    <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                </button>
            </form>
        </header>

        <nav>
            <ul>
                <li><a href="{{ route('dish.index') }}"><i class="fas fa-utensils"></i> Platos</a></li>
                <li><a href="{{ route('customers.react') }}"><i class="fab fa-react"></i> React</a></li>
                <li><a href="{{ route('customers.index') }}"><i class="fas fa-users"></i> Clientes</a></li>
                <li><a href="{{ route('invoiceDetails.index') }}"><i class="fas fa-file-invoice"></i> Facturas</a></li>
                <li><a href="{{ route('orders.index') }}"><i class="fas fa-clipboard-list"></i> Órdenes</a></li>
                <li><a href="{{ route('reservation.index') }}"><i class="fas fa-calendar-check"></i> Reservas</a></li>
                <li><a href="{{ route('mesa.index') }}"><i class="fas fa-chair"></i> Mesas</a></li>
            </ul>
        </nav>

        <div class="container">
            <div class="content-box text-center">
                <img src="{{ asset('images/admin.jpg') }}" alt="Restaurante UDI" class="welcome-image">
                <h2 class="mb-4">Bienvenido al Sistema de Gestión</h2>
                <p class="lead">Utilice el menú superior para navegar por las diferentes secciones del sistema.</p>
            </div>
        </div>

        <footer>
            <p>&copy; {{ date("Y") }} Restaurante UDI - Todos los derechos reservados</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Efecto suave al hacer clic en los enlaces del menú
        document.querySelectorAll('nav a').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                setTimeout(() => {
                    window.location.href = link.href;
                }, 300);
            });
        });
    </script>
</body>
</html>
