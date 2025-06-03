@extends('layouts.app')

@section('title', 'Listado de Mesas')

@section('content')
    <style>
        .tables-container {
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
        
        .tables-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 0.8rem;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .tables-table th {
            background-color: #8B0000;
            color: white;
            padding: 1rem;
            text-align: left;
            font-weight: 600;
        }
        
        .tables-table td {
            padding: 1rem;
            border-bottom: 1px solid #f0f0f0;
            background-color: white;
        }
        
        .tables-table tr:last-child td {
            border-bottom: none;
        }
        
        .tables-table tr:hover td {
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
        
        .no-tables {
            text-align: center;
            padding: 2rem;
            color: #6c757d;
            font-size: 1.1rem;
        }
        
        .status-badge {
            display: inline-block;
            padding: 0.35rem 0.65rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        
        .status-available {
            background-color: #d4edda;
            color: #155724;
        }
        
        .status-occupied {
            background-color: #f8d7da;
            color: #721c24;
        }
        
        @media (max-width: 768px) {
            .tables-table {
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

    <div class="tables-container">
        <header class="page-header">
            <h1 class="page-title">
                <i class="fas fa-chair"></i> Listado de Mesas
            </h1>
        </header>

        <div class="content-box">
            <a href="{{ route('mesa.create') }}" class="create-btn">
                <i class="fas fa-plus-circle"></i> Agregar Mesa
            </a>

            @if($mesas->count() > 0)
                <table class="tables-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Capacidad</th>
                            <th>Ubicación</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mesas as $mesa)
                            <tr>
                                <td>{{ $mesa->id }}</td>
                                <td>{{ $mesa->capacidad }} personas</td>
                                <td>{{ $mesa->ubicacion }}</td>
                                <td>
                                    <span class="status-badge status-{{ $mesa->estado ? 'occupied' : 'available' }}">
                                        {{ $mesa->estado ? 'Ocupada' : 'Disponible' }}
                                    </span>
                                </td>
                                <td>
                                    <div class="action-btns">
                                        <a href="{{ route('mesa.show', $mesa->id) }}" class="action-btn view-btn">
                                            <i class="fas fa-eye"></i> Ver
                                        </a>
                                        <a href="{{ route('mesa.edit', $mesa->id) }}" class="action-btn edit-btn">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form method="POST" action="{{ route('mesa.destroy', $mesa->id) }}" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="action-btn delete-btn" onclick="return confirm('¿Estás seguro de eliminar esta mesa?')">
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
                <div class="no-tables">
                    <i class="fas fa-chair fa-2x" style="margin-bottom: 1rem;"></i>
                    <p>No hay mesas registradas</p>
                </div>
            @endif
        </div>
    </div>
@endsection
