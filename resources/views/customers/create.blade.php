@extends('layouts.app')

@section('content')
    <div style="margin: 20px auto; max-width: 400px;">
        <h1 style="text-align: center;">Crear Cliente</h1>

        <form method="POST" action="{{ route('customers.store') }}" style="margin-top: 20px;">
            @csrf
            <div style="margin-bottom: 10px;">
                <label for="id" style="display: block;">ID:</label>
                <input type="text" name="id" id="id" style="width: 100%; padding: 5px;" required>
            </div>

            <div style="margin-bottom: 10px;">
                <label for="Nombre" style="display: block;">Nombre:</label>
                <input type="text" name="Nombre" id="Nombre" style="width: 100%; padding: 5px;" required>
            </div>

            <div style="margin-bottom: 10px;">
                <label for="Telefono" style="display: block;">Teléfono:</label>
                <input type="text" name="Telefono" id="Telefono" style="width: 100%; padding: 5px;" required>
            </div>

            <div style="margin-bottom: 10px;">
                <label for="Email" style="display: block;">Email:</label>
                <input type="email" name="Email" id="Email" style="width: 100%; padding: 5px;" required>
            </div>

            <div style="margin-bottom: 10px;">
                <label for="FechaRegistro" style="display: block;">Fecha de Registro:</label>
                <input type="date" name="FechaRegistro" id="FechaRegistro" style="width: 100%; padding: 5px;" required>
            </div>

            <button type="submit" style="background-color: #007bff; color: #fff; border: none; padding: 10px; cursor: pointer;">Guardar Cliente</button>
        </form>

        <a href="{{ route('customers.index') }}" style="display: block; margin-top: 10px; text-align: center; text-decoration: none; color: #007bff;">Volver a la Lista de Clientes</a>
    </div>
@endsection