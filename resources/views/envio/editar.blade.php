<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empleado</title>
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
            padding: 15px;
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
            margin-bottom: 5px; /* Ajustado para mayor espacio entre el label y el input */
            color: #fc6998; /* Puedes quitar esto si prefieres no tener color en el label */
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px; /* Ajustado para igualar el espacio de los campos */
            border-radius: 5px;
            border: 1px solid #ddd;
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
        <h2>Editar Empleado</h2>
        <form action="{{ route('envio.actualizar', $envio->Numero_envio) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="costoEnvio">Costo de Envío</label>
    <input type="number" id="costoEnvio" name="costoEnvio" value="{{ $envio->costoEnvio }}" step="0.01" required>
    
    <label for="direccionDestino">Dirección de Destino</label>
    <input type="text" id="direccionDestino" name="direccionDestino" value="{{ $envio->direccionDestino }}" required>
    
    <label for="tiempoEntrega">Tiempo de Entrega</label>
    <input type="text" id="tiempoEntrega" name="tiempoEntrega" value="{{ $envio->tiempoEntrega }}" required>

    <label for="estadoEnvio">Estado Del Envio</label>
            <select id="estadoEnvio" name="estadoEnvio" required>
                    <option value="Pendiente">Pendiente</option>
                    <option value="En camino">En camino</option>
                    <option value="Entregado">Entregado</option>
                    <option value="Finalizado">Finalizado</option>
            </select>
    
    <label for="IdVenta">ID Venta</label>
    <input type="text" id="IdVenta" name="IdVenta" value="{{ $envio->IdVenta }}">
    
    <label for="IdDomiciliario">ID Domiciliario</label>
    <input type="text" id="IdDomiciliario" name="IdDomiciliario" value="{{ $envio->IdDomiciliario }}">
    
    <label for="IdEmpleado">ID Empleado</label>
    <input type="text" id="IdEmpleado" name="IdEmpleado" value="{{ $envio->IdEmpleado }}">

    <button type="submit" class="btn">Actualizar Envío</button>
    <a href="{{ route('empleados.index') }}" class="button">Cancelar</a>
</form>
    </div>
</body>
</html>
