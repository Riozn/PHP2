<!-- resources/views/orders/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Listado de Órdenes</h1>

        <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Crear Nueva Orden</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Número de Personas</th>
                    <th>Fecha de Orden</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->customer->nombre }}</td>
                        <td>{{ $order->NumeroPersonas }}</td>
                        <td>{{ $order->FechaOrden }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info">Ver</a>
                                <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Editar</a>
                                <!-- Agrega un botón o enlace para eliminar la orden si es necesario -->
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
