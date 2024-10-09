<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Proveedores</title>
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
        h2, h1 {
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
        button, .button, input[type="submit"] {
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
        button:hover, .button:hover, input[type="submit"]:hover {
            background-color: #e04877;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido al Registro de Proveedores</h1>
        <form action="{{ route('proveedores.store') }}" method="POST">
            @csrf
            <label for="nombre_empresa">Nombre Empresa:</label>
            <input type="text" name="nombre_empresa" placeholder="Nombre" maxlength="50" required>

            <label for="nombre_contacto">Persona de contacto:</label>
            <input type="text" name="nombre_contacto" placeholder="Nombre de Contacto" required>

            <label for="identificacion">Identificación:</label>
            <select name="identificacion" required>
                <option value="Cedula">Cédula</option>
                <option value="pasaporte">Pasaporte</option>
                <option value="NIT">NIT</option>
                <option value="Cédula extranjería">Cédula Extranjería</option>
            </select>

            <label for="nro_identificacion">Nro Identificación:</label>
            <input type="number" name="nro_identificacion" placeholder="Número Identificación" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" placeholder="Teléfono" maxlength="10" required>

            <label for="email_contacto">Correo electrónico Contacto:</label>
            <input type="email" name="email_contacto" placeholder="Correo" required>

            <label for="email_empresa">Correo electrónico Empresa:</label>
            <input type="email" name="email_empresa" placeholder="Correo Empresa" required>

            <label for="pais">País:</label>
            <select name="pais" required>
                <option value="colombia">Colombia</option>
                <option value="argentina">Argentina</option>
                <option value="brasil">Brasil</option>
                <option value="chile">Chile</option>
                <option value="mexico">México</option>
                <option value="peru">Perú</option>
                <option value="venezuela">Venezuela</option>
                <option value="ecuador">Ecuador</option>
                <option value="bolivia">Bolivia</option>
                <option value="paraguay">Paraguay</option>
                <option value="uruguay">Uruguay</option>
                <option value="espana">España</option>
                <option value="estados_unidos">Estados Unidos</option>
                <option value="canada">Canadá</option>
            </select>

            <label for="ciudad">Ciudad:</label>
            <input type="text" name="ciudad" placeholder="Ciudad" maxlength="20" required>

            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" placeholder="Dirección" maxlength="50" required>

            <label for="codigo_postal">Código Postal:</label>
            <input type="number" name="codigo_postal" maxlength="10" placeholder="Código Postal" required>

            <label for="terminos">Aceptar términos y condiciones</label>
            <input type="checkbox" id="terminos" required>

            <input type="submit" value="Guardar Proveedor">
            <a href="{{ route('movimientos.index') }}" class="button">Cancelar</a>
        </form>
    </div>
</body>
</html>

