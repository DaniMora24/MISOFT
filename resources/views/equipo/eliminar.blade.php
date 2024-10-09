<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Eliminar Equipo</title>
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
        .button-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 15px;
        }
        .action-btn {
            padding: 10px 15px;
            background-color: #fc6998;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .action-btn:hover {
            background-color: #e04877;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Eliminar Equipo</h2>
        <p>¿Está seguro de que desea eliminar el equipo con ID {{ $equipo->IdEquipo }}?</p>
        <div class="button-container">
            <form action="{{ route('equipo.destroy', $equipo->IdEquipo) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="action-btn">Eliminar</button>
            </form>
            <a class="action-btn" href="{{ route('equipo.index') }}">Cancelar</a>
        </div>
    </div>
</body>
</html>

