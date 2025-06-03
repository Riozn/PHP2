@extends('layouts.app')

@section('title', 'Lista de Clientes')

@section('content')
    <style>
        .customers-container {
            padding: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .page-header {
            background: linear-gradient(135deg, #8B0000, #630000);
            color: white;
            padding: 1.5rem 0;
            text-align: center;
            margin-bottom: 2rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            border-radius: 0 0 10px 10px;
        }
        
        .page-title {
            font-size: 2rem;
            font-weight: 700;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .page-title i {
            margin-right: 15px;
            font-size: 1.8rem;
        }
        
        .content-box {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            padding: 2rem;
            margin-bottom: 2rem;
        }
        
        .create-btn {
            display: inline-flex;
            align-items: center;
            background-color: #8B0000;
            color: white;
            padding: 0.8rem 1.8rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 1.5rem;
            transition: all 0.3s;
            box-shadow: 0 3px 8px rgba(139, 0, 0, 0.3);
        }
        
        .create-btn:hover {
            background-color: #6B0000;
            transform: translateY(-2px);
            box-shadow: 0 5px 12px rgba(139, 0, 0, 0.4);
        }
        
        .create-btn i {
            margin-right: 8px;
        }
        
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 0.5rem;
            padding: 1rem;
            margin-bottom: 1.5rem;
            font-weight: 500;
        }
        
        .customers-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 0.8rem;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .customers-table th {
            background-color: #8B0000;
            color: white;
            padding: 1rem;
            text-align: left;
            font-weight: 600;
        }
        
        .customers-table td {
            padding: 1rem;
            border-bottom: 1px solid #f0f0f0;
            background-color: white;
        }
        
        .customers-table tr:last-child td {
            border-bottom: none;
        }
        
        .customers-table tr:hover td {
            background-color: #f9f9f9;
        }
        
        .action-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            border-radius: 0.4rem;
            text-decoration: none;
            font-weight: 500;
            margin-right: 0.5rem;
            transition: all 0.2s;
            font-size: 0.9rem;
            border: none;
            cursor: pointer;
        }
        
        .view-btn {
            background-color: #28a745;
            color: white;
        }
        
        .edit-btn {
            background-color: #17a2b8;
            color: white;
        }
        
        .delete-btn {
            background-color: #dc3545;
            color: white;
        }
        
        .action-btn i {
            margin-right: 0.4rem;
        }
        
        .action-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .no-customers {
            text-align: center;
            padding: 2rem;
            color: #6c757d;
            font-size: 1.1rem;
        }
        
        .date-cell {
            white-space: nowrap;
        }
        
        @media (max-width: 768px) {
            .customers-table {
                display: block;
                overflow-x: auto;
            }
            
            .action-btns {
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .action-btn {
                margin-right: 0;
                width: 100%;
            }
        }
    </style>

    <div class="customers-container">
        <header class="page-header">
            <h1 class="page-title">
                <i class="fas fa-users"></i> Lista de Clientes
            </h1>
        </header>

        <div class="content-box">
            @if(session('success'))
                <div class="alert-success">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                </div>
            @endif

            <a href="{{ route('customers.create') }}" class="create-btn">
                <i class="fas fa-user-plus"></i> Crear Nuevo Cliente
            </a>

            @if($customers->count() > 0)
                <table class="customers-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                            <th>Fecha Registro</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->Nombre }}</td>
                                <td>{{ $customer->Telefono }}</td>
                                <td>{{ $customer->Email }}</td>
                                <td class="date-cell">{{ \Carbon\Carbon::parse($customer->FechaRegistro)->format('d/m/Y') }}</td>
                                <td>
                                    <div class="action-btns">
                                        <a href="{{ route('customers.show', $customer->id) }}" class="action-btn view-btn">
                                            <i class="fas fa-eye"></i> Ver
                                        </a>
                                        <a href="{{ route('customers.edit', $customer->id) }}" class="action-btn edit-btn">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form method="POST" action="{{ route('customers.destroy', $customer->id) }}" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="action-btn delete-btn" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">
                                                <i class="fas fa-trash-alt"></i> Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="no-customers">
                    <i class="fas fa-user-slash fa-2x" style="margin-bottom: 1rem;"></i>
                    <p>No hay clientes registrados</p>
                </div>
            @endif
        </div>
    </div>
@endsection
