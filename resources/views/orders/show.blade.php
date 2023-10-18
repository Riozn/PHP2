<!-- resources/views/orders/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detalles de la Orden #{{ $order->id }}</h1>

    <p><strong>Cliente:</strong> {{ $order->customer->nombre }}</p>
    <p><strong>Número de Personas:</strong> {{ $order->NumeroPersonas }}</p>
    <p><strong>Fecha de Orden:</strong> {{ $order->FechaOrden }}</p>

    <a href="{{ route('orders.index') }}" class="btn btn-primary">Volver al Listado</a>
@endsection
