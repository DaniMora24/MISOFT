<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
    }

    public function crear()
    {
        return view('empleados.crear');
    }

    public function almacenar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'salario' => 'required|numeric',
            'fecha_contratacion' => 'required|date',
            'rol_usuario' => 'required|string',
            'Id_usuario' => 'required|numeric',
        ]);

        $empleado = new Empleado();
        $empleado->nombre = $request->input('nombre');
        $empleado->apellido = $request->input('apellido');
        $empleado->salario = $request->input('salario');
        $empleado->fecha_contratacion = $request->input('fecha_contratacion');
        $empleado->rol_usuario = $request->input('rol_usuario');
        // Asegúrate de que estás proporcionando un valor para Id_usuario
        $empleado->Id_usuario = $request->input('Id_usuario'); // o el valor correspondiente
        $empleado->save();

        return redirect()->route('empleados.index')->with('success', 'Empleado registrado exitosamente.');
    }

    public function editar($id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('empleados.editar', compact('empleado'));
    }

    public function actualizar(Request $request, $id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->update($request->all());
        return redirect()->route('empleados.index')->with('success', 'Empleado actualizado exitosamente.');
    }

    public function eliminar($id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('empleados.eliminar', compact('empleado'));
    }

    public function eliminarAccion($id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();
        return redirect()->route('empleados.index')->with('success', 'Empleado eliminado exitosamente.');
    }

    public function detalles($id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('empleados.detalles', compact('empleado'));
    }
}
