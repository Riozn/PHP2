@extends('layouts.app')

@section('content')
    <h1>Lista de Platos</h1>
    <a href="{{ route('dish.create') }}" class="btn btn-primary mb-3">Crear Plato</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dish as $dish)
                <tr>
                    <td>{{ $dish->Nombre }}</td>
                    <td>{{ $dish->Descripcion }}</td>
                    <td>{{ $dish->Precio }}</td>
                    <td>
                        <a href="{{ route('dish.show', $dish->id) }}" class="btn btn-info">Ver Detalles</a>
                        <a href="{{ route('dish.edit', $dish->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('dish.destroy', $dish->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este plato?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
