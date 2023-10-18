@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Gestión de Clientes</h1>

    <div class="d-flex justify-content-between align-items-center">
        <a href="{{ route('customers.create') }}" class="btn btn-primary">Crear Cliente</a>

        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar cliente" aria-label="Buscar">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>

    <table class="table mt-4">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Correo Electrónico</th>
                <th scope="col">Fecha de Registro</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <th scope="row">{{ $customer->id }}</th>
                <td>{{ $customer->Nombre }}</td>
                <td>{{ $customer->Telefono }}</td>
                <td>{{ $customer->Email }}</td>
                <td>{{ $customer->FechaRegistro }}</td>
                <td class="text-center">
                    <div class="btn-group" role="group">
                        <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-info btn-sm">Detalles</a>
                        <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('customers.destroy', $customer->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


