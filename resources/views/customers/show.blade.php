@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Información del Cliente</h1>

        <p>Nombre: {{ $customer->Nombre }}</p>
        <p>Teléfono: {{ $customer->Telefono }}</p>
        <p>Email: {{ $customer->Email }}</p>
        <p>Fecha de Registro: {{ $customer->FechaRegistro }}</p>
        
        <a href="{{ route('customers.index') }}" class="btn btn-primary">Volver a la Lista de Clientes</a>
    </div>
@endsection
