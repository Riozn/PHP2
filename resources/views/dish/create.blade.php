<!-- resources/views/create-dish.blade.php -->

@extends('layouts.app')

@section('title', 'Crear Plato')

@section('content')
    <div style="max-width: 800px; margin: 0 auto;">
        <h1 style="text-align: center; margin-bottom: 20px;">Crear Plato</h1>

        <form method="POST" action="{{ route('dish.store') }}" enctype="multipart/form-data" style="background-color: #f9f9f9; padding: 20px; border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

            @csrf

            <div style="margin-bottom: 15px;">
                <label for="Nombre" style="display: block; margin-bottom: 5px;">Nombre:</label>
                <input type="text" name="Nombre" id="Nombre" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="Descripcion" style="display: block; margin-bottom: 5px;">Descripción:</label>
                <textarea name="Descripcion" id="Descripcion" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></textarea>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="Precio" style="display: block; margin-bottom: 5px;">Precio:</label>
                <input type="number" name="Precio" id="Precio" step="0.01" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="Activo" style="display: block; margin-bottom: 5px;">Estado activo:</label>
                <select name="Activo" id="Activo" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="Imagen" style="display: block; margin-bottom: 5px;">Imagen:</label>
                <input type="file" name="Imagen" class="form-control" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <button type="submit" style="background-color: #3498db; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Guardar Plato</button>
        </form>

        <a href="{{ route('dish.index') }}" style="display: block; margin-top: 20px; text-decoration: none; color: #3498db;">Volver a la Lista de Platos</a>
    </div>
@endsection
