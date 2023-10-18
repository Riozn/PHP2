@extends('layouts.app')

@section('content')
    <h1>Detalles del Plato</h1>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>Nombre</th>
                <td>{{ $dish->Nombre }}</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>{{ $dish->Descripcion }}</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>{{ $dish->Precio }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('dish.index') }}" class="btn btn-secondary">Volver a la Lista de Platos</a>
@endsection
