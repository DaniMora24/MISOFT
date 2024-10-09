<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('dashboard.css') }}">
    <title>Movimientos de Inventario</title>
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
                <h2>Movimientos de Inventario</h2>
                
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tipo</th>
                            <th>Tipo de Insumo</th>
                            <th>Cantidad</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movimientos as $movimiento)
                            <tr>
                                <td>{{ $movimiento->Id_movimiento }}</td>
                                <td>{{ $movimiento->tipo }}</td>
                                <td>{{ $movimiento->tipoinsumo }}</td>
                                <td>{{ $movimiento->cantidad }}</td>
                                <td>{{ $movimiento->fecha }}</td>
                                <td>
                                    <a href="{{ route('movimientos.create') }}" class="btn">Crear</a>
                                    <a href="{{ route('movimientos.edit', $movimiento->Id_movimiento) }}" class="btn">Editar</a>
                                    <form action="{{ route('movimientos.destroy', $movimiento->Id_movimiento) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn" onclick="return confirm('¿Estás seguro de eliminar este movimiento?');">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </main>
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

        window.onclick = function(event) {
            const sidebar = document.querySelector('.sidebar');
            if (!sidebar.contains(event.target) && !document.querySelector('.menu-toggle').contains(event.target)) {
                sidebar.classList.remove('show');
            }
        }
    </script>
</body>
</html>
