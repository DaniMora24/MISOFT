<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Proveedor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('Img/patitas gato.jpg') no-repeat center center fixed;
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
        button {
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
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #e04877;
        }
        .button {
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
        .button:hover {
            background-color: #e04877;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Editar Proveedor</h2>
        <form action="{{ route('proveedores.update', $proveedor->IdProveedor) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="nombre_empresa">Nombre Empresa:</label>
                <input type="text" name="nombre_empresa" value="{{ $proveedor->nombre_empresa }}" maxlength="25" required>
            </div>

            <div>
                <label for="nombre_contacto">Nombre de Contacto:</label>
                <input type="text" name="nombre_contacto" value="{{ $proveedor->nombre_contacto }}" maxlength="25" required>
            </div>

            <div>
                <label for="identificacion">Identificación:</label>
                <select name="identificacion" required>
                    <option value="Cédula ciudadanía" {{ $proveedor->identificacion == 'Cédula ciudadanía' ? 'selected' : '' }}>Cédula ciudadanía</option>
                    <option value="Cédula extranjería" {{ $proveedor->identificacion == 'Cédula extranjería' ? 'selected' : '' }}>Cédula extranjería</option>
                    <option value="Pasaporte" {{ $proveedor->identificacion == 'Pasaporte' ? 'selected' : '' }}>Pasaporte</option>
                    <option value="NIT" {{ $proveedor->identificacion == 'NIT' ? 'selected' : '' }}>NIT</option>
                </select>
            </div>

            <div>
                <label for="nro_identificacion">Número Identificación:</label>
                <input type="number" name="nro_identificacion" value="{{ $proveedor->nro_identificacion }}" required>
            </div>

            <div>
                <label for="telefono">Teléfono:</label>
                <input type="tel" name="telefono" value="{{ $proveedor->telefono }}" maxlength="10" required>
            </div>

            <div>
                <label for="email_contacto">Email Contacto:</label>
                <input type="email" name="email_contacto" value="{{ $proveedor->email_contacto }}" required>
            </div>

            <div>
                <label for="email_empresa">Email Empresa:</label>
                <input type="email" name="email_empresa" value="{{ $proveedor->email_empresa }}" required>
            </div>

            <div>
                <label for="pais">País:</label>
                <select name="pais" required>
                    <option value="colombia" {{ $proveedor->pais == 'colombia' ? 'selected' : '' }}>Colombia</option>
                    <option value="argentina" {{ $proveedor->pais == 'argentina' ? 'selected' : '' }}>Argentina</option>
                    <option value="brasil" {{ $proveedor->pais == 'brasil' ? 'selected' : '' }}>Brasil</option>
                    <option value="chile" {{ $proveedor->pais == 'chile' ? 'selected' : '' }}>Chile</option>
                    <option value="mexico" {{ $proveedor->pais == 'mexico' ? 'selected' : '' }}>México</option>
                    <option value="peru" {{ $proveedor->pais == 'peru' ? 'selected' : '' }}>Perú</option>
                    <option value="venezuela" {{ $proveedor->pais == 'venezuela' ? 'selected' : '' }}>Venezuela</option>
                    <option value="ecuador" {{ $proveedor->pais == 'ecuador' ? 'selected' : '' }}>Ecuador</option>
                    <option value="bolivia" {{ $proveedor->pais == 'bolivia' ? 'selected' : '' }}>Bolivia</option>
                    <option value="paraguay" {{ $proveedor->pais == 'paraguay' ? 'selected' : '' }}>Paraguay</option>
                    <option value="uruguay" {{ $proveedor->pais == 'uruguay' ? 'selected' : '' }}>Uruguay</option>
                    <option value="espana" {{ $proveedor->pais == 'espana' ? 'selected' : '' }}>España</option>
                    <option value="estados_unidos" {{ $proveedor->pais == 'estados_unidos' ? 'selected' : '' }}>Estados Unidos</option>
                    <option value="canada" {{ $proveedor->pais == 'canada' ? 'selected' : '' }}>Canadá</option>
                </select>
            </div>

            <div>
                <label for="ciudad">Ciudad:</label>
                <input type="text" name="ciudad" value="{{ $proveedor->ciudad }}" maxlength="25" required>
            </div>

            <div>
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" value="{{ $proveedor->direccion }}" maxlength="25" required>
            </div>

            <div>
                <label for="codigo_postal">Código Postal:</label>
                <input type="number" name="codigo_postal" value="{{ $proveedor->codigo_postal }}" required>
            </div>

            <button type="submit">Actualizar Proveedor</button>
            <a href="{{ route('proveedores.index') }}" class="button">Cancelar</a>
        </form>
    </div>
</body>
</html>
