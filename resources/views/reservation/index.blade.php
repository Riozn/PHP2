@extends('layouts.app')

@section('title', 'Lista de Reservas')

@section('content')
    <style>
        .reservations-container {
            padding: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .page-title {
            color: #8B0000;
            margin-bottom: 1.5rem;
            font-weight: 700;
            text-align: center;
            font-size: 2.2rem;
        }
        
        .alert {
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
            font-weight: 500;
        }
        
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .create-btn {
            display: inline-block;
            background-color: #8B0000;
            color: white;
            padding: 0.7rem 1.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 1.5rem;
            transition: all 0.3s;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .create-btn:hover {
            background-color: #6B0000;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        
        .reservations-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 0.8rem;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }
        
        .reservations-table th {
            background-color: #8B0000;
            color: white;
            padding: 1rem;
            text-align: left;
            font-weight: 600;
        }
        
        .reservations-table td {
            padding: 1rem;
            border-bottom: 1px solid #e0e0e0;
            background-color: white;
        }
        
        .reservations-table tr:last-child td {
            border-bottom: none;
        }
        
        .reservations-table tr:hover td {
            background-color: #f9f9f9;
        }
        
        .status-active {
            color: #28a745;
            font-weight: 600;
        }
        
        .status-inactive {
            color: #dc3545;
            font-weight: 600;
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
            border: none;
            cursor: pointer;
            font-family: inherit;
            font-size: 0.9rem;
            padding: 0.5rem 1rem;
            border-radius: 0.4rem;
        }
        
        .action-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .action-btn i {
            margin-right: 0.4rem;
        }
        
        .no-reservations {
            text-align: center;
            padding: 2rem;
            color: #6c757d;
            font-size: 1.1rem;
        }
        
        @media (max-width: 768px) {
            .reservations-table {
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

    <div class="reservations-container">
        <h1 class="page-title">
            <i class="fas fa-calendar-alt"></i> Lista de Reservas
        </h1>

        @if(session('success'))
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('reservation.create') }}" class="create-btn">
            <i class="fas fa-plus"></i> Nueva Reserva
        </a>

        @if($reservations->count() > 0)
            <table class="reservations-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Fecha Reserva</th>
                        <th>Personas</th>
                        <th>Estado</th>
                        <th>Mesa</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->id }}</td>
                            <td>{{ $reservation->customer ? $reservation->customer->Nombre : 'N/A' }}</td>
                            <td>{{ \Carbon\Carbon::parse($reservation->FechaReserva)->format('d/m/Y H:i') }}</td>
                            <td>{{ $reservation->NumeroPersonas }}</td>
                            <td class="{{ $reservation->Activo ? 'status-active' : 'status-inactive' }}">
                                {{ $reservation->Activo ? 'Activo' : 'Inactivo' }}
                            </td>
                            <td>{{ $reservation->mesa_id }}</td>
                            <td>
                                <div class="action-btns">
                                    <a href="{{ route('reservation.show', $reservation->id) }}" class="action-btn view-btn">
                                        <i class="fas fa-eye"></i> Ver
                                    </a>
                                    <a href="{{ route('reservation.edit', $reservation->id) }}" class="action-btn edit-btn">
                                        <i class="fas fa-edit"></i> Editar
                                    </a>
                                    <form method="POST" action="{{ route('reservation.destroy', $reservation->id) }}" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="action-btn delete-btn" onclick="return confirm('¿Estás seguro de eliminar esta reserva?')">
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
            <div class="no-reservations">
                <i class="fas fa-calendar-times fa-2x"></i>
                <p>No hay reservas registradas</p>
            </div>
        @endif
    </div>
@endsection
