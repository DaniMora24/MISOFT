<?php

namespace App\Http\Controllers;

use App\Models\Pqrs;
use Illuminate\Http\Request;

class PQRSController extends Controller
{
    // Mostrar todos los PQRS
    public function index()
    {
        $pqrs = Pqrs::all();
        return view('pqrs.index', compact('pqrs'));
    }

    // Mostrar el formulario para crear un nuevo PQRS
    public function create()
    {
        return view('pqrs.create');
    }

    // Guardar un nuevo PQRS
    public function store(Request $request)
    {
        $request->validate([
            'Id_usuario' => 'required|integer',
            'Descripcion' => 'required|string|max:255',
            'Fecha' => 'required|date',
            'TipoPQRS' => 'required|string|in:Petición,Queja,Reclamo,Sugerencia'
        ]);

        Pqrs::create($request->all());

        return redirect()->route('pqrs.index')
                         ->with('success', 'PQRS creado correctamente');
    }

    // Mostrar un PQRS específico
    public function show($id)
    {
        $pqrs = Pqrs::findOrFail($id);
        return view('pqrs.show', compact('pqrs'));
    }

    // Mostrar el formulario para editar un PQRS
    public function edit($id)
    {
        $pqrs = Pqrs::findOrFail($id);
        return view('pqrs.edit', compact('pqrs'));
    }

    // Actualizar un PQRS existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'Id_usuario' => 'required|integer',
            'Descripcion' => 'required|string|max:255',
            'Fecha' => 'required|date',
            'TipoPQRS' => 'required|string|in:Petición,Queja,Reclamo,Sugerencia'
        ]);

        $pqrs = Pqrs::findOrFail($id);
        $pqrs->update($request->all());

        return redirect()->route('pqrs.index')
                         ->with('success', 'PQRS actualizado correctamente');
    }

    // Eliminar un PQRS
    public function destroy($id)
    {
        $pqrs = Pqrs::findOrFail($id);
        $pqrs->delete();

        return redirect()->route('pqrs.index')
                         ->with('success', 'PQRS eliminado correctamente');
    }
}
