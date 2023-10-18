@extends('layouts.app')

@section('content')
<div style="margin: 20px auto; max-width: 400px;">
    <h1 style="text-align: center;">Crear Nueva Reserva</h1>

    <form method="POST" action="{{ route('reservation.store') }}" style="margin-top: 20px;">
        @csrf

        <div style="margin-bottom: 10px;">
            <label for="customer_id" style="display: block;">Cliente:</label>
            <select name="customer_id" id="customer_id" style="width: 100%; padding: 5px;" required>
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="FechaReserva" style="display: block;">Fecha de Reserva:</label>
            <input type="date" name="FechaReserva" id="FechaReserva" style="width: 100%; padding: 5px;" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="NumeroPersonas" style="display: block;">Número de Personas:</label>
            <input type="number" name="NumeroPersonas" id="NumeroPersonas" style="width: 100%; padding: 5px;" required>
        </div>

        <button type="submit" style="background-color: #007bff; color: #fff; border: none; padding: 10px; cursor: pointer; width: 100%;">Crear Reserva</button>
    </form>
</div>
@endsection
