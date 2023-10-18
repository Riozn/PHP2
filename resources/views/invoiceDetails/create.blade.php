@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Crear Detalle de Factura</h1>
    <form method="POST" action="{{ route('invoiceDetails.store') }}" class="my-4">
        @csrf
        <div class="form-group">
            <label for="OrderID">Order ID:</label>
            <input type="number" name="order_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="DishID">Dish ID:</label>
            <input type="number" name="dish_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Cantidad">Cantidad:</label>
            <input type="number" name="cantidad" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="PrecioUnitario">Precio Unitario:</label>
            <input type="number" name="precio_unitario" step="0.01" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success" style="width: 100%;">Guardar</button>
    </form>
</div>
@endsection
