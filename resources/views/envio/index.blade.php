<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('dashboard.css') }}">
    <title>Lista de Envíos</title>
</head>
<body>
    <div class="container">
        <header>
            <button class="menu-toggle" onclick="toggleMenu()">☰</button>
        </header>
        <div class="banner">
            <h1>Panel De Control</h1>
        </div>
        <div class="sidebar">
            <ul class="menu">
                <li><a href="{{ asset('catalogo') }}">Inicio</a></li>
                <li>
                    <a href="#" class="dropdown-toggle" onclick="toggleDropdown(event)">Registros</a>
                    <ul class="dropdown">
                        <li><a href="{{ route('usuarios.index') }}">Usuarios</a></li>
                        <li><a href="{{ route('empleados.index') }}">Empleados</a></li>
                        <li><a href="{{ route('movimientos.index') }}">Movimientos Inventario</a></li>
                        <li><a href="{{ route('proveedores.index') }}">Proveedores</a></li>
                        <li><a href="{{ route('productos.index') }}">Productos</a></li>
                        <li><a href="{{ route('envio.index') }}">Envío</a></li>
                        <li><a href="{{ route('equipo.index') }}">Equipo</a></li>
                        <li><a href="{{ route('pqrs.index') }}">PQRS</a></li>
                        <li><a href="#">Compras</a></li>
                    </ul>
                </li>
                <li><a href="#">Configuración</a></li>
                <li><a href="#">Estadísticas</a></li>
                <li><a href="#">Notificaciones</a></li>
                <li>
    <form action="{{ route('logout') }}" method="POST" >
        @csrf
        <button type="submit" class="btn btn-danger" >Cerrar sesión</button>
    </form>
</li>
            </ul>
        </div>
        <main>
            <section class="data-table">
                <h2>Lista de Envíos</h2>
                
                <table>
                    <thead>
                        <tr>
                            <th>Número de Envío</th>
                            <th>Costo de Envío</th>
                            <th>Dirección de Destino</th>
                            <th>Tiempo de Entrega</th>
                            <th>Estado Envio</th>
                            <th>Id Venta</th>
                            <th>Id Domiciliario</th>
                            <th>Id Empleado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($envios as $envio)
                        <tr>
                            <td>{{ $envio->Numero_envio }}</td>
                            <td>{{ number_format($envio->costoEnvio, 2) }}</td>
                            <td>{{ $envio->direccionDestino }}</td>
                            <td>{{ $envio->tiempoEntrega }}</td>
                            <td>{{ $envio->estadoEnvio }}</td>
                            <td>{{ $envio->IdVenta }}</td>
                            <td>{{ $envio->IdDomiciliario }}</td>
                            <td>{{ $envio->IdEmpleado }}</td>
                            <td class="button-group">
                                <a href="{{ route('envio.crear') }}" class="btn">Crear Envío</a>
                                <a href="{{ route('envio.editar', $envio->Numero_envio) }}" class="btn">Editar</a>
                            <form action="{{ route('envio.destroy', $envio->Numero_envio) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn" onclick="return confirm('¿Estás seguro de eliminar este envío?');">Eliminar</button>
                            </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </main>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <script>
        function toggleMenu() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('show');
        }

        function toggleDropdown(event) {
            event.preventDefault();
            const dropdown = event.target.nextElementSibling;
            dropdown.classList.toggle('show');
        }

        // Cerrar el menú al hacer clic fuera de él
        window.onclick = function(event) {
            const sidebar = document.querySelector('.sidebar');
            if (!sidebar.contains(event.target) && !document.querySelector('.menu-toggle').contains(event.target)) {
                sidebar.classList.remove('show');
            }
        }
    </script>
</body>
</html>
