<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Empleado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('Img/patitas gato.jpg');; 
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
        p {
            text-align: center;
            color: #555;
            margin: 20px 0;
        }
        button {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #fc6998;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }
        button:hover {
            background-color: #e04877;
        }
        a {
            display: block;
            margin-top: 20px;
            text-align: center;
            padding: 10px;
            background-color: #fc6998;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #e04877;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Eliminar Empleado</h2>
        <p>¿Está seguro de que desea eliminar a {{ $empleado->nombre }} {{ $empleado->apellido }}?</p>
        <form action="{{ route('empleados.eliminar.accion', $empleado->IdEmpleado) }}" method="POST">
            @csrf
            <button type="submit">Eliminar</button>
        </form>
        <a href="{{ route('empleados.index') }}">Cancelar</a>
    </div>
</body>
</html>
