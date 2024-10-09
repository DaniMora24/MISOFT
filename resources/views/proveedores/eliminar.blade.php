<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Proveedores</title>
    <link rel="stylesheet" href="{{ asset('dashboard.css') }}">
</head>
<body>
<!DOCTYPE html>
<html lang="es">
</head>
<body>
    <h1>Confirmar Eliminación</h1>
    <div class="Central">
        <p>¿Estás seguro de que deseas eliminar el siguiente proveedor?</p>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Campo</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td>{{ $proveedor->IdProveedor }}</td>
                    </tr>
                    <tr>
                        <td>Nombre Empresa</td>
                        <td>{{ $proveedor->nombre_empresa }}</td>
                    </tr>
                    <tr>
                        <td>Email Empresa</td>
                        <td>{{ $proveedor->email_empresa }}</td>
                    </tr>
                    <tr>
                        <td>Nombre de Contacto</td>
                        <td>{{ $proveedor->nombre_contacto }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="button-group">
            <form action="{{ route('proveedores.destroy', $proveedor->IdProveedor) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="button">Eliminar</button>
            </form>
            <a href="{{ route('proveedores.index') }}" class="button">Cancelar</a>
        </div>
    </div>
</body>
</html>