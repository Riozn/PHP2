@extends('layouts.app')

@section('content')
    <div style="margin: 20px auto; max-width: 400px;">
        <h1 style="text-align: center;">Crear Plato</h1>

        <form method="POST" action="{{ route('dish.store') }}" style="margin-top: 20px;">
            @csrf
            <div style="margin-bottom: 10px;">
                <label for="Nombre" style="display: block;">Nombre:</label>
                <input type="text" name="Nombre" id="Nombre" style="width: 100%; padding: 5px;" required>
            </div>

            <div style="margin-bottom: 10px;">
                <label for="Descripcion" style="display: block;">Descripción:</label>
                <textarea name="Descripcion" id="Descripcion" style="width: 100%; padding: 5px;" required></textarea>
            </div>

            <div style="margin-bottom: 10px;">
                <label for="Precio" style="display: block;">Precio:</label>
                <input type="number" name="Precio" id="Precio" style="width: 100%; padding: 5px;" required>
            </div>

            <button type="submit" style="background-color: #007bff; color: #fff; border: none; padding: 10px; cursor: pointer;">Guardar Plato</button>
        </form>

        <a href="{{ route('dish.index') }}" style="display: block; margin-top: 10px; text-align: center; text-decoration: none; color: #007bff;">Volver a la Lista de Platos</a>
    </div>
@endsection
