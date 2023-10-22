
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    th {
        background-color: #4CAF50;
        color: white;
    }
</style>

    <h1>Lista de Reservas</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('reservation.create') }}">Crear Nueva Reserva</a>

    <table>
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Fecha de Reserva</th>
                <th>Número de Personas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->customer_id }}</td>
                    <td>{{ $reservation->FechaReserva }}</td>
                    <td>{{ $reservation->NumeroPersonas }}</td>
                    <td>
                        <a href="{{ route('reservation.show', $reservation->id) }}">Ver</a>
                        <a href="{{ route('reservation.edit', $reservation->id) }}">Editar</a>
                        <form method="POST" action="{{ route('reservation.destroy', $reservation->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
