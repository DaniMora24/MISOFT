<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de PQRS</title>
    <style>
        body {
            background-image: url('/images/patitas.gato.jpg');
            background-size: cover;
            color: #333;
            font-family: Arial, sans-serif;
        }
        h2 {
            text-align: center; /* Centra el título */
            margin-top: 20px;
            font-size: 2.5em; /* Aumenta el tamaño del título */
        }
        .details-container {
            background-color: white;
            padding: 30px; /* Aumenta el padding del contenedor de detalles */
            margin: 20px auto; /* Centra el contenedor */
            border-radius: 5px;
            width: 80%; /* Ajusta el ancho del contenedor */
            max-width: 700px; /* Máximo ancho para pantallas grandes */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Añade sombra para mayor profundidad */
        }
        label {
            font-size: 1.3em; /* Aumenta el tamaño de la fuente de las etiquetas */
            display: block;
            margin-bottom: 5px; /* Espacio entre etiqueta y campo */
        }
        .detail {
            font-size: 1.2em; /* Tamaño de fuente para los detalles */
            margin-bottom: 15px; /* Espacio entre detalles */
            padding: 10px;
            background-color: #f9f9f9; /* Color de fondo suave para los detalles */
            border-radius: 5px; /* Bordes redondeados */
        }
        .btn-container {
            text-align: center; /* Centra los botones */
            margin-top: 20px; /* Espacio superior para los botones */
        }
        .btn {
            background-color: #FFC0CB; /* Color de fondo del botón */
            color: white; /* Color del texto del botón */
            border: none;
            padding: 15px 20px; /* Aumenta el padding del botón */
            cursor: pointer;
            font-size: 1.2em; /* Aumenta el tamaño de la fuente del botón */
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #FF69B4; /* Color al pasar el ratón */
        }
    </style>
</head>
<body>
    <h2>Detalles de PQRS</h2>

    <div class="details-container">
        <label>ID Usuario:</label>
        <div class="detail">{{ $pqrs->Id_usuario }}</div>

        <label>Descripción:</label>
        <div class="detail">{{ $pqrs->Descripcion }}</div>

        <label>Fecha:</label>
        <div class="detail">{{ $pqrs->Fecha }}</div>

        <label>Tipo de PQRS:</label>
        <div class="detail">{{ $pqrs->TipoPQRS }}</div>
    </div>

    <div class="btn-container">
        <a href="{{ route('pqrs.index') }}" class="btn">Volver al listado</a>
    </div>
</body>
</html>
