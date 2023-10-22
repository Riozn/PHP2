<!DOCTYPE html>
<html>
<head>
    <title>Crear Plato</title>
</head>
<body>
    <h1>Crear Plato</h1>

    <form method="POST" action="{{ route('dish.store') }}" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="Nombre">Nombre:</label>
            <input type="text" name="Nombre" id="Nombre" required>
        </div>

        <div>
            <label for="Descripcion">Descripción:</label>
            <textarea name="Descripcion" id="Descripcion" required></textarea>
        </div>

        <div>
            <label for="Precio">Precio:</label>
            <input type="number" name="Precio" id="Precio" step="0.01" required>
        </div>

        <div>
            <label for="Activo">Estado activo:</label>
            <select name="Activo" id="Activo">
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>

        <div>
            <label for="Imagen">Imagen:</label>
            <input type="file" name="Imagen" accept="image/*">
        </div>

        <button type="submit">Guardar Plato</button>
    </form>

    <a href="{{ route('dish.index') }}">Volver a la Lista de Platos</a>
</body>
</html>
