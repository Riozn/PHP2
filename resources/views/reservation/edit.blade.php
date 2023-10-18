@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Reservación</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('reservation.update', $reservation->id) }}">
        @csrf
        @method('PUT') <!-- Usamos el método PUT para actualizar la reserva -->

        <div class="form-group">
            <label for="customer_id">Cliente:</label>
            <select name="customer_id" id="customer_id" class="form-control" required>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}" {{ $customer->id == $reservation->customer_id ? 'selected' : '' }}>{{ $customer->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="FechaReserva">Fecha de Reserva:</label>
            <input type="date" name="FechaReserva" id="FechaReserva" class="form-control" value="{{ $reservation->FechaReserva }}" required>
        </div>

        <div class="form-group">
            <label for="NumeroPersonas">Número de Personas:</label>
            <input type="number" name="NumeroPersonas" id="NumeroPersonas" class="form-control" value="{{ $reservation->NumeroPersonas }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Reservación</button>
    </form>
</div>
@endsection
