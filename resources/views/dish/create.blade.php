<!DOCTYPE html>
<html>
<head>
    <title>Crear Plato</title>
</head>
<style>
    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    label {
        display: block;
        margin-top: 10px;
    }
    
    input[type="text"],
    textarea,
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    
    button {
        background-color: #3498db;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    button:hover {
        background-color: #258cd1;
    }
    
    /* Estilos para el enlace de volver */
    a {
        display: block;
        margin-top: 10px;
        text-decoration: none;
        color: #3498db;
    }
    
    a:hover {
        text-decoration: underline;
    }
</style>
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
        <div class="form-group">
            <label for="Imagen">Imagen:</label>
            <input type="file" name="Imagen" class="form-control" required>
        </div>
        <button type="submit">Guardar Plato</button>
    </form>

    <a href="{{ route('dish.index') }}">Volver a la Lista de Platos</a>
</body>
</html>
