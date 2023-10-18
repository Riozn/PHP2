@extends('layouts.app')

@section('content')
    <h1>Editar Plato</h1>

    <!-- Formulario para editar el plato -->
    <form method="POST" action="{{ route('dish.update', $dish->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="Nombre">Nombre:</label>
            <input type="text" name="Nombre" class="form-control" value="{{ $dish->Nombre }}" required>
        </div>

        <div class="form-group">
            <label for="Descripcion">Descripción:</label>
            <textarea name="Descripcion" class="form-control" required>{{ $dish->Descripcion }}</textarea>
        </div>

        <div class="form-group">
            <label for="Precio">Precio:</label>
            <input type="number" name="Precio" class="form-control" value="{{ $dish->Precio }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Plato</button>
    </form>

    <a href="{{ route('dish.index') }}" class="btn btn-secondary mt-2">Volver a la Lista de Platos</a>
@endsection
