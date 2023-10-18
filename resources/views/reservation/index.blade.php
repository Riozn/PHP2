@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Reservaciones</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Cliente</th>
                <th>Fecha de Reserva</th>
                <th>Número de Personas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->id }}</td>
                    <td>{{ $reservation->customer->nombre }}</td>
                    <td>{{ $reservation->FechaReserva }}</td>
                    <td>{{ $reservation->NumeroPersonas }}</td>
                    <td>
                        <a href="{{ route('reservation.show', $reservation->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('reservation.edit', $reservation->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('reservation.destroy', $reservation->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar esta reservación?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('reservation.create') }}" class="btn btn-success">Crear Reservación</a>
</div>
@endsection
