@extends('layouts.app')

@section('content')
    <h1>Editar Detalle de Factura</h1>
    <form method="POST" action="{{ route('invoiceDetails.update', $invoiceDetail->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="OrdenID">Order ID:</label>
            <input type="number" name="OrdenID" class="form-control" value="{{ $invoiceDetail->OrdenID }}" required>
        </div>
        <div class="form-group">
            <label for="DishID">Dish ID:</label>
            <input type="number" name="PlatoID" class="form-control" value="{{ $invoiceDetail->PlatoID }}" required>
        </div>
        <div class="form-group">
            <label for="Cantidad">Cantidad:</label>
            <input type="number" name="Cantidad" class="form-control" value="{{ $invoiceDetail->Cantidad }}" required>
        </div>
        <div class="form-group">
            <label for="PrecioUnitario">Precio Unitario:</label>
            <input type="number" name="PrecioUnitario" step="0.01" class="form-control" value="{{ $invoiceDetail->PrecioUnitario }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
