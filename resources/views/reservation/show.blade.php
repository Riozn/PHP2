@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Reservación</h1>

    <p>ID de Cliente: {{ $reservation->customer->id }}</p> <!-- Accede al ID del cliente relacionado -->
    <p>Nombre del Cliente: {{ $reservation->customer->nombre }}</p> <!-- Accede al nombre del cliente relacionado -->
    <p>Fecha de Reserva: {{ $reservation->FechaReserva }}</p>
    <p>Número de Personas: {{ $reservation->NumeroPersonas }}</p>

    <a href="{{ route('reservation.index') }}">Volver a la lista de reservas</a>
</div>
@endsection
