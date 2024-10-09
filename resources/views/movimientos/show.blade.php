<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Movimiento</title>
    <style>
        body {
            background-image: url('/images/patitas.gato.jpg');
            background-size: cover;
            color: #333;
            font-family: Arial, sans-serif;
        }
        .details {
            background-color: white;
            padding: 20px;
            margin: 20px;
            border-radius: 5px;
        }
        h2 {
            text-align: left;
            margin-top: 0;
        }
        .btn {
            background-color: #FFC0CB;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 1em;
            border-radius: 5px;
            transition: background-color 0.3s;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #FF69B4;
        }
    </style>
</head>
<body>

<div class="details">
    <h2>Detalles del Movimiento</h2>
    <p><strong>Tipo:</strong> {{ $movimiento->tipo }}</p>
    <p><strong>Tipo de Insumo:</strong> {{ $movimiento->tipoinsumo }}</p>
    <p><strong>Color del Insumo:</strong> {{ $movimiento->colorInsumo }}</p>
    <p><strong>Cantidad:</strong> {{ $movimiento->cantidad }}</p>
    <p><strong>Fecha:</strong> {{ $movimiento->fecha }}</p>
    <p><strong>Insumos Existentes:</strong> {{ $movimiento->insumos_existentes }}</p>
    <p><strong>Proveedor:</strong> {{ $movimiento->IdProveedor }}</p>
    <p><strong>Empleado:</strong> {{ $movimiento->IdEmpleado }}</p>
    <p><strong>Descripción:</strong> {{ $movimiento->descripcion }}</p>
    <a href="{{ route('movimientos.index') }}" class="btn">Volver al listado</a>
    <a href="{{ route('movimientos.edit', $movimiento->Id_movimiento) }}" class="btn">Editar</a>
    <form action="{{ route('movimientos.destroy', $movimiento->Id_movimiento) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn">Eliminar</button>
    </form>
</div>

</body>
</html>
