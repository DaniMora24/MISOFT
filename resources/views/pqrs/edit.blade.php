<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar PQRS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('/images/patitas.gato.jpg') no-repeat center center fixed;
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
            font-size: 2.5em; 
            margin-top: 10px;
        }

        label {
            display: block;
            margin-top: 10px;
            color: #fc6998;
            font-size: 1.3em;
        }

        input, select {
            width: 100%;
            padding: 15px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 20px;
            font-size: 1.2em;
        }

        .button, button {
            margin-top: 20px;
            padding: 15px 20px;
            background-color: #fc6998;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            text-decoration: none;
            transition: background-color 0.3s;
            font-size: 1.2em;
        }

        button:hover, .button:hover {
            background-color: #e04877;
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Editar PQRS</h2>

        <form action="{{ route('pqrs.update', $pqrs->IdPQRS) }}" method="POST">
            @csrf
            @method('PUT')
            
            <label for="Id_usuario">ID Usuario:</label>
            <input type="number" name="Id_usuario" id="Id_usuario" value="{{ $pqrs->Id_usuario }}" required>

            <label for="Descripcion">Descripción:</label>
            <input type="text" name="Descripcion" id="Descripcion" value="{{ $pqrs->Descripcion }}" required>

            <label for="Fecha">Fecha:</label>
            <input type="datetime-local" name="Fecha" id="Fecha" value="{{ $pqrs->Fecha }}" required>

            <label for="TipoPQRS">Tipo de PQRS:</label>
            <select name="TipoPQRS" id="TipoPQRS" required>
                <option value="Petición" {{ $pqrs->TipoPQRS == 'Petición' ? 'selected' : '' }}>Petición</option>
                <option value="Queja" {{ $pqrs->TipoPQRS == 'Queja' ? 'selected' : '' }}>Queja</option>
                <option value="Reclamo" {{ $pqrs->TipoPQRS == 'Reclamo' ? 'selected' : '' }}>Reclamo</option>
                <option value="Sugerencia" {{ $pqrs->TipoPQRS == 'Sugerencia' ? 'selected' : '' }}>Sugerencia</option>
            </select>

            <div class="btn-container">
                <button type="submit">Actualizar</button>
                <a href="{{ route('pqrs.index') }}" class="button">Volver al listado</a>
            </div>
        </form>
    </div>
</body>
</html>
