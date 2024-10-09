<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('dashboard.css') }}">
    <title>Lista de Empleados</title>
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
                <h2>Lista de Empleados</h2>
            
                <table>
                    <thead>
                        <tr>
                            <th>Id Empleado</th> 
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Salario</th>
                            <th>Fecha de Contratación</th>
                            <th>Rol de Usuario</th>
                            <th>Id Usuario</th> 
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($empleados as $empleado)
                            <tr>
                                <td>{{ $empleado->IdEmpleado }}</td> 
                                <td>{{ $empleado->nombre }}</td>
                                <td>{{ $empleado->apellido }}</td>
                                <td>{{ number_format($empleado->salario, 2) }}</td>
                                <td>{{ $empleado->fecha_contratacion }}</td>
                                <td>{{ $empleado->rol_usuario }}</td>
                                <td>{{ $empleado->Id_usuario }}</td> 
                                <td>
                                    <a class="btn btn-danger" href="{{ route('empleados.editar', $empleado->IdEmpleado) }}">Editar</a>
                                    <form action="{{ route('empleados.eliminar', $empleado->IdEmpleado) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                    <a class="btn btn-danger" href="{{ route('empleados.crear') }}">Registrar Nuevo Empleado</a>
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
