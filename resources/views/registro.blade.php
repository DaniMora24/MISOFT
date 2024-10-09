<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('Registro.css') }}">


</head>

<body>
    <div class="Register">
        <h1>Registro</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('registro.store') }}" method="POST">
            @csrf
            <div class="Nombres">
                <input id="Nombres" name="Nombres" type="text" minlength="3" maxlength="64" required>
                <label><i class="fa-solid fa-paw"></i>Nombre</label>
            </div>

            <div class="Apellidos">
                <input id="Apellidos" name="Apellidos" type="text" minlength="3" maxlength="64" required>
                <label><i class="fa-solid fa-paw"></i>Apellidos</label>
            </div>

            <div class="Tipo_documento">
                <select name="Tipo_documento" required>
                    <option value="">Selecciona tu tipo de documento</option>
                    <option value="Cédula ciudadanía">Cédula de Ciudadanía</option>
                    <option value="Cédula extranjería">Cédula de Extranjería</option>
                    <option value="Tarjeta Identidad">Tarjeta de Identidad</option>
                    <option value="Pasaporte">Pasaporte</option>
                </select>
            </div>

            <div class="Numero_documento">
                <input name="Numero_documento" type="text" maxlength="11" required>
                <label><i class="fa-solid fa-paw"></i>Número de documento</label>
            </div>

            <div class="Edad">
                <p>Fecha de nacimiento
                    <input  name="Edad" type="date" required>
                </p>
            </div>

            <div class="Telefono">
                <input name="Telefono" type="number" required>
                <label><i class="fa-solid fa-paw"></i>Ingresa tu número de celular</label>
            </div>

            <div class="Email">
                <input name="Email" type="email" required>
                <label><i class='bx bx-user'></i>Correo electrónico</label>
            </div>

            <div class="Password">
                <input name="Password" type="password" required minlength="8">
                <label><i class='bx bxs-key'></i>Contraseña</label>
            </div>

            <div class="Remember">
                <input type="checkbox" class="checkbox" required> Estoy de acuerdo con los <a href="#">Términos y condiciones.</a>
            </div>

            <div class="Account">¿Ya tienes cuenta?
                <a href="{{ route('login') }}">Inicia sesión</a>
            </div>

            <button type="submit"  class="btn">Registrarse</button>
        </form>

        @if ($errors->has('Edad'))
    <div class="alert alert-danger">
        {{ $errors->first('Edad') }}
    </div>
@endif

    </div>
</body>

<footer>
    <ul class="botones">
        <li><a href="#"><i class='bx bx-help-circle'></i></a></li>
        <li><a href="#"><i class='bx bxl-whatsapp'></i></a></li>
    </ul>
</footer>

</html>

<footer>
    <ul class="botones">
        <li><a href="#"><i class='bx bx-help-circle'></i></a></li>
        <li><a href="#"><i class='bx bxl-whatsapp'></i></a></li>
    </ul>
</footer>

</html>