<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Registrar Movimiento de Inventario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('Img/patitas gato.jpg'); 
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
        button, .button {
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
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        button:hover, .button:hover {
            background-color: #e04877; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registrar Movimiento de Inventario</h2>
        <form action="{{ route('movimientos.store') }}" method="POST">
            @csrf
            <label for="tipo">Tipo de Movimiento</label>
            <select id="tipo" name="tipo" required>
                <option value="">Seleccione</option>
                <option value="entrada">Entrada</option>
                <option value="salida">Salida</option>
            </select>

            <label for="tipoinsumo">Tipo de Insumo</label>
            <select id="tipoinsumo" name="tipoinsumo" required>
                <option value="">Seleccione</option>
                <option value="lana">Lana</option>
                <option value="relleno">Relleno</option>
                <option value="alambre floral">Alambre Floral</option>
                <option value="palos de madera">Palos de Madera</option>
            </select>

            <label for="colorInsumo">Color de Insumo</label>
            <select id="colorInsumo" name="colorInsumo" required>
                <option value="">Seleccione</option>
                <option value="rojo">Rojo</option>
                <option value="rosa">Rosa</option>
                <option value="fucsia">Fucsia</option>
                <option value="magenta">Magenta</option>
            </select>

            <label for="cantidad">Cantidad</label>
            <input type="number" id="cantidad" name="cantidad" required>

            <label for="fecha">Fecha</label>
            <input type="datetime-local" id="fecha" name="fecha" required>

            <label for="insumos_existentes">¿Insumos Existentes?</label>
            <select id="insumos_existentes" name="insumos_existentes" required>
                <option value="">Seleccione</option>
                <option value="si">Sí</option>
                <option value="no">No</option>
            </select>

            <label for="IdProveedor">ID del Proveedor</label>
            <input type="number" id="IdProveedor" name="IdProveedor" required>

            <label for="IdEmpleado">ID del Empleado</label>
            <input type="number" id="IdEmpleado" name="IdEmpleado" required>

            <label for="descripcion">Descripción</label>
            <input type="text" id="descripcion" name="descripcion" required>

            <button type="submit">Registrar Movimiento</button>
            <a href="{{ route('movimientos.index') }}" class="button">Cancelar</a>
        </form>
    </div>
</body>
</html>
