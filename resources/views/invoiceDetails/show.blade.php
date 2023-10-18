@extends('layouts.app')

@section('content')
    <h1>Detalle de Factura</h1>
    <p><strong>ID:</strong> {{ $invoiceDetail->id }}</p>
    <p><strong>Order ID:</strong> {{ $invoiceDetail->OrdenID }}</p>
    <p><strong>Dish ID:</strong> {{ $invoiceDetail->PlatoID }}</p>
    <p><strong>Cantidad:</strong> {{ $invoiceDetail->Cantidad }}</p>
    <p><strong>Precio Unitario:</strong> {{ $invoiceDetail->PrecioUnitario }}</p>
    <a href="{{ route('invoiceDetails.index') }}" class="btn btn-secondary">Volver</a>
@endsection
