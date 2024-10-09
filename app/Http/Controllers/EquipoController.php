<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = Equipo::all();
        return view('equipo.index', compact('equipos'));
    }

    public function create()
    {
        return view('equipo.crear');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'referenciaEquipo' => 'required',
            'cantidadEquipo' => 'required|integer|min:1',
            'IdEmpleado' => 'nullable|integer'
        ]);

        Equipo::create($validatedData);
        return redirect()->route('equipo.index')->with('success', 'Equipo registrado correctamente');
    }

    public function edit($id)
    {
        $equipo = Equipo::findOrFail($id);
        return view('equipo.editar', compact('equipo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'referenciaEquipo' => 'required|string|max:255',
            'cantidadEquipo' => 'required|integer|min:1',
            'IdEmpleado' => 'nullable|integer',
            'estadoEquipo' => 'required|in:Bun Estado,Mal estado,En mantenimiento', 
        ]);

        $equipo = Equipo::findOrFail($id);
        $equipo->update($request->all());

        return redirect()->route('equipo.index')->with('success', 'Equipo actualizado correctamente.');
    }

    public function confirmDelete($id)
    {
        $equipo = Equipo::findOrFail($id);
        return view('equipo.eliminar', compact('equipo'));
    }

    public function destroy($id)
    {
        $equipo = Equipo::findOrFail($id);
        $equipo->delete();

        return redirect()->route('equipo.index')->with('success', 'Equipo eliminado correctamente');
    }
}
