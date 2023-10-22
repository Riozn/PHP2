<!DOCTYPE html>
<html>
<head>
    <title>Editar Plato</title>
</head>
<body>
    <h1>Editar Plato</h1>

    <form method="POST" action="{{ route('dish.update', $dish->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="Nombre">Nombre:</label>
            <input type="text" name="Nombre" id="Nombre" value="{{ $dish->Nombre }}" required>
        </div>

        <div>
            <label for="Descripcion">Descripción:</label>
            <textarea name="Descripcion" id="Descripcion" required>{{ $dish->Descripcion }}</textarea>
        </div>

        <div>
            <label for="Precio">Precio:</label>
            <input type="number" name="Precio" id="Precio" step="0.01" value="{{ $dish->Precio }}" required>
        </div>

        <div>
            <label for="Activo">Estado activo:</label>
            <select name="Activo" id="Activo">
                <option value="1" {{ $dish->Activo ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ $dish->Activo ? '' : 'selected' }}>Inactivo</option>
            </select>
        </div>

        <div>
            <label for="Imagen">Imagen:</label>
            <input type="file" name="Imagen" accept="image/*">
        </div>

        <button type="submit">Actualizar Plato</button>
    </form>

    <a href="{{ route('dish.index') }}">Volver a la Lista de Platos</a>
</body>
</html>
