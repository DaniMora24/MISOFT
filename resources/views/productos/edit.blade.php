<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('Img/patitas gato.jpg') no-repeat center center fixed;
            background-size: cover; 
            background-position: center; 
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9); 
            padding: 20px;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-top: 10px;
            color: #fc6998;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button, .button {
        margin-top: 20px;
        padding: 10px 15px;
        background-color: #fc6998;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        display: block;
        text-align: center; /* Para centrar el texto en el enlace */
        margin-left: auto;
        margin-right: auto;
        text-decoration: none; /* Quitar el subrayado del enlace */
        transition: background-color 0.3s;
        }

        button:hover, .button:hover {
        background-color: #e04877;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Editar Producto</h1>

        <!-- Muestra los errores de validación si existen -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulario para editar el producto -->
        <form action="{{ route('productos.update', $producto->IdProducto) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="Nombre_producto">Nombre del Producto:</label>
            <input type="text" name="Nombre_producto" id="Nombre_producto" value="{{ old('Nombre_producto', $producto->Nombre_producto) }}" required>

            <label for="estadoProducto">Estado del Producto:</label>
            <select name="estadoProducto" id="estadoProducto" required>
                <option value="Finalizado" {{ $producto->estadoProducto == 'Finalizado' ? 'selected' : '' }}>Finalizado</option>
                <option value="en proceso" {{ $producto->estadoProducto == 'en proceso' ? 'selected' : '' }}>En Proceso</option>
                <option value="Pendiente" {{ $producto->estadoProducto == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
            </select>

            <label for="disponibilidadProducto">Disponibilidad:</label>
            <select name="disponibilidadProducto" id="disponibilidadProducto" required>
                <option value="Disponible" {{ $producto->disponibilidadProducto == 'Disponible' ? 'selected' : '' }}>Disponible</option>
                <option value="Agotado" {{ $producto->disponibilidadProducto == 'Agotado' ? 'selected' : '' }}>Agotado</option>
            </select>

            <label for="Precio_Producto">Precio:</label>
            <input type="number" name="Precio_Producto" id="Precio_Producto" value="{{ old('Precio_Producto', $producto->Precio_Producto) }}" step="0.01" required>

            <label for="Categoria">Categoría:</label>
            <select name="Categoria" id="Categoria" required>
                <option value="Flores" {{ $producto->Categoria == 'Flores' ? 'selected' : '' }}>Flores</option>
                <option value="Amigurumis" {{ $producto->Categoria == 'Amigurumis' ? 'selected' : '' }}>Amigurumis</option>
                <option value="Accesorios" {{ $producto->Categoria == 'Accesorios' ? 'selected' : '' }}>Accesorios</option>
                <option value="Arreglos" {{ $producto->Categoria == 'Arreglos' ? 'selected' : '' }}>Arreglos</option>
            </select>

            <button type="submit">Actualizar Producto</button>
            <a href="{{ route('productos.index') }}" class="button">Cancelar</a>
        </form>
    </div>
</body>
</html>
