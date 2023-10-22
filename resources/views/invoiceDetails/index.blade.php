@extends('layouts.app')

@section('content')
    <h1>Listado de Detalles de Factura</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>OrdenID</th>
                <th>PlatoID</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoiceDetails as $detail)
                <tr>
                    <td>{{ $detail->id }}</td>
                    <td>{{ $detail->OrdenID }}</td>
                    <td>{{ $detail->PlatoID }}</td>
                    <td>{{ $detail->Cantidad }}</td>
                    <td>{{ $detail->PrecioUnitario }}</td>
                    <td>
                        <a href="{{ route('invoiceDetails.show', $detail->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('invoiceDetails.edit', $detail->id) }}" class="btn btn-warning">Editar</a>
                        <!-- Agrega el formulario de eliminación aquí si lo deseas -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('invoiceDetails.create') }}" class="btn btn-success">Crear Detalle de Factura</a>
@endsection
