<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Editar Equipo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
           
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 90%;
            max-width: 600px;
            text-align: center;
        }
        h2 {
            color: black;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            text-align: left;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
        <h2>Editar Equipo</h2>
        <form action="{{ route('equipo.update', $equipo->IdEquipo) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="referenciaEquipo">Referencia del Equipo</label>
            <input type="text" name="referenciaEquipo" id="referenciaEquipo" value="{{ $equipo->referenciaEquipo }}" required>

            <label for="cantidadEquipo">Cantidad del Equipo</label>
            <input type="number" name="cantidadEquipo" id="cantidadEquipo" value="{{ $equipo->cantidadEquipo }}" required>

            <label for="IdEmpleado">ID del Empleado</label>
            <input type="text" name="IdEmpleado" id="IdEmpleado" value="{{ $equipo->IdEmpleado }}">

            <label for="estadoEquipo">Estado del Equipo</label>
            <select name="estadoEquipo" id="estadoEquipo" required>
                <option value="Buen Estado" {{ $equipo->estadoEquipo == 'Buen Estado' ? 'selected' : '' }}>Buen Estado</option>
                <option value="Mal estado" {{ $equipo->estadoEquipo == 'Mal estado' ? 'selected' : '' }}>Mal estado</option>
                <option value="En mantenimiento" {{ $equipo->estadoEquipo == 'En mantenimiento' ? 'selected' : '' }}>En mantenimiento</option>
            </select>

            <button type="submit">Actualizar Equipo</button>
            <a href="{{ route('productos.index') }}" class="button">Cancelar</a>
        </form>
    </div>
</body>
</html>
