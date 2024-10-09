<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    public function create()
    {
        return view('registro');  // Asegúrate de que la vista esté correctamente conectada.
    }

    public function dashboard()
    {
        return view ('dashboard');
    }

    public function login()
    {
        return view('login');  // Asegúrate de que la vista esté correctamente conectada.
    }

    public function catalogodomi()
    {
    return view('catalogodomi');
    }

    public function catalogoadmi()
    {
    return view('catalogoadmi');
    }

    public function domiciliario()
    {
    return view('usuarios.domiciliario');
    }


    public function store(Request $request)
    {
        // Validación de los campos del formulario
        $request->validate([
            'Nombres' => 'required|string|max:64',
            'Apellidos' => 'required|string|max:64',
            'Tipo_documento' => 'required|string',
            'Numero_documento' => 'required|numeric|unique:usuario,Numero_documento',
            'Edad' => 'required|date',
            'Telefono' => 'required|numeric',
            'Email' => 'required|email|unique:usuario,Email',
            'Password' => 'required|string|min:8',
        ]);

        // Calcular la edad
    $fechaNacimiento = \Carbon\Carbon::parse($request->Edad);
    $edad = \Carbon\Carbon::now()->diffInYears($fechaNacimiento);

    // Validar que la edad sea mayor o igual a 14
    if ($edad < 14) {
        return back()->withErrors(['Edad' => 'Debes tener al menos 14 años para registrarte.'])->withInput();
    }

        // Creación del usuario en la tabla `usuario`
        Registro::create([
            'Numero_documento' => $request->Numero_documento,
            'Tipo_documento' => $request->Tipo_documento,
            'Nombres' => $request->Nombres,
            'Apellidos' => $request->Apellidos,
            'Telefono' => $request->Telefono,
            'Edad' => $request->Edad,
            'Email' => $request->Email,
            'Password' => bcrypt($request->Password),  // Hashear la contraseña
        ]);

        // Redirigir a la página de éxito o de registro
        return redirect()->route('login')->with('success', 'Registro completado con éxito.');
    }

    
    public function inicio(Request $request)
{
    // Validar los datos de inicio de sesión
    $credentials = $request->only('Email', 'Password'); // Solo capturar email y password del formulario

    // Intentar autenticar al usuario con las credenciales
    if (Auth::attempt(['Email' => $request->Email, 'password' => $request->Password])) {
        // Obtener el usuario autenticado
        $user = Auth::user();
        
        // Verificar si el usuario tiene un rol asignado
        if ($user->empleado) {
            if ($user->empleado->rol_usuario === 'Empleado') {
                return redirect()->route('catalogoadmi');
            } elseif ($user->empleado->rol_usuario === 'Domiciliario') {
                return redirect()->route('catalogodomi');
            }
        }

        // Si es un cliente (sin rol en empleado), redirigir a la vista de cliente
        return redirect()->route('catalogo');
    }

   
    // Devolver error si las credenciales no coinciden
    return back()->withErrors([
        'email' => 'Las credenciales no coinciden con nuestros registros.',
    ]);
}



public function logout(Request $request)
{
    Auth::logout(); // Cierra la sesión del usuario
    return redirect()->route('index'); // Redirige a la página de inicio o a donde desees
}



    
    public function index()
    {
    $usuarios = Registro::all(); // Obtener todos los usuarios
    return view('usuarios.index', compact('usuarios')); // Pasar los usuarios a la vista
    }



    public function destroy($id)
    {
    // Encuentra el usuario por ID y elimínalo
    $usuario = Registro::find($id);

    if ($usuario) {
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado correctamente.');
    }

    return redirect()->route('usuarios.index')->with('error', 'Usuario no encontrado.');
}




}


    


