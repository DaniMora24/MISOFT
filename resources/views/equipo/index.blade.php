<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('dashboard.css') }}">
    <title>Lista de Equipos</title>
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
                        <li><a href="{{ route('envio.index') }}">Envio</a></li>
                        <li><a href="{{ route('equipo.index') }}">Equipo</a></li>
                        <li><a href="{{ route('pqrs.index') }}">PQRS</a></li>
                        <li><a href="#">Compras</a></li>
                    </ul>
                </li>
                <li><a href="#">Configuración</a></li>
                <li><a href="#">Estadisticas</a></li>
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
                <h2>Lista de Equipos</h2>
                
                <table>
                    <thead>
                        <tr>
                            <th>Id Equipo</th>
                            <th>Referencia</th>
                            <th>Cantidad</th>
                            <th>Empleado ID</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($equipos as $equipo)
                            <tr>
                                <td>{{ $equipo->IdEquipo }}</td>
                                <td>{{ $equipo->referenciaEquipo }}</td>
                                <td>{{ $equipo->cantidadEquipo }}</td>
                                <td>{{ $equipo->IdEmpleado }}</td>
                                <td>{{ $equipo->estadoEquipo }}</td>
                                <td>
                                <a class="btn btn-primary" href="{{ route('equipo.create') }}">Agregar Nuevo Equipo</a>
                                    <a class="btn btn-danger" href="{{ route('equipo.edit', $equipo->IdEquipo) }}">Editar</a>
                                    <form action="{{ route('equipo.destroy', $equipo->IdEquipo) }}" method="POST"  onclick="return confirm('¿Estás seguro de eliminar este producto?');" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
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
