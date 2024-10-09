<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Crear PQRS</title>
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
        <h2>Crear PQRS</h2>

        <form action="{{ route('pqrs.store') }}" method="POST">
            @csrf
            <label for="Id_usuario">ID Usuario:</label>
            <input type="number" name="Id_usuario" id="Id_usuario" required>

            <label for="Descripcion">Descripción:</label>
            <input type="text" name="Descripcion" id="Descripcion" required>

            <label for="Fecha">Fecha:</label>
            <input type="datetime-local" name="Fecha" id="Fecha" required>

            <label for="TipoPQRS">Tipo de PQRS:</label>
            <select name="TipoPQRS" id="TipoPQRS" required>
                <option value="">Seleccione</option>
                <option value="Petición">Petición</option>
                <option value="Queja">Queja</option>
                <option value="Reclamo">Reclamo</option>
                <option value="Sugerencia">Sugerencia</option>
            </select>

            <button type="submit">Guardar</button>
            <a href="{{ route('pqrs.index') }}" class="button">Volver al listado</a>
        </form>
    </div>
</body>
</html>
