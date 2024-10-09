<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Movimiento</title>
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
        h2 {
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
        button {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #fc6998;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block; 
            margin-left: auto; 
            margin-right: auto; 
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #e04877;
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
        <h2>Editar Movimiento</h2>
        <form action="{{ route('movimientos.update', $movimiento->Id_movimiento) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="tipo">Tipo:</label>
            <select name="tipo" id="tipo" required>
                <option value="entrada" {{ $movimiento->tipo == 'entrada' ? 'selected' : '' }}>Entrada</option>
                <option value="salida" {{ $movimiento->tipo == 'salida' ? 'selected' : '' }}>Salida</option>
            </select>

            <label for="tipoinsumo">Tipo de Insumo:</label>
            <select name="tipoinsumo" id="tipoinsumo" required>
                <option value="lana" {{ $movimiento->tipoinsumo == 'lana' ? 'selected' : '' }}>Lana</option>
                <!-- Agrega más opciones según sea necesario -->
            </select>

            <label for="colorInsumo">Color del Insumo:</label>
            <select name="colorInsumo" id="colorInsumo" required>
                <option value="rojo" {{ $movimiento->colorInsumo == 'rojo' ? 'selected' : '' }}>Rojo</option>
                <!-- Agrega más opciones -->
            </select>

            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" value="{{ $movimiento->cantidad }}" required>

            <label for="fecha">Fecha:</label>
            <input type="datetime-local" name="fecha" id="fecha" value="{{ $movimiento->fecha }}" required>

            <label for="insumos_existentes">Insumos Existentes:</label>
            <input type="text" name="insumos_existentes" id="insumos_existentes" value="{{ $movimiento->insumos_existentes }}" required>

            <label for="IdProveedor">ID Proveedor:</label>
            <input type="number" name="IdProveedor" id="IdProveedor" value="{{ $movimiento->IdProveedor }}" required>

            <label for="IdEmpleado">ID Empleado:</label>
            <input type="number" name="IdEmpleado" id="IdEmpleado" value="{{ $movimiento->IdEmpleado }}" required>

            <label for="descripcion">Descripción:</label>
            <input type="text" name="descripcion" id="descripcion" value="{{ $movimiento->descripcion }}" required>

            <button type="submit">Actualizar Movimiento</button>
            <a href="{{ route('movimientos.index') }}" class="button">Cancelar</a>
        </form>
    </div>
</body>
</html>
