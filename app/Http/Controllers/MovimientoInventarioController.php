<?php


namespace App\Http\Controllers;

use App\Models\MovimientoInventario;
use Illuminate\Http\Request;

class MovimientoInventarioController extends Controller
{
    // Método para mostrar el listado de movimientos
    public function index()
    {
        $movimientos = MovimientoInventario::all();
        return view('movimientos.index', compact('movimientos'));
    }

    // Método para mostrar el formulario de creación
    public function create()
    {
        return view('movimientos.create');
    }

    // Método para almacenar un nuevo movimiento
    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required',
            'tipoinsumo' => 'required',
            'colorInsumo' => 'required',
            'cantidad' => 'required|integer',
            'fecha' => 'required|date',
            'insumos_existentes' => 'required',
            'IdProveedor' => 'required|integer',
            'IdEmpleado' => 'required|integer',
            'descripcion' => 'required|string|max:255',
        ]);

        MovimientoInventario::create($request->all());

        return redirect()->route('movimientos.index')->with('success', 'Movimiento creado exitosamente.');
    }

    // Método para mostrar los detalles de un movimiento
    public function show($id)
    {
        $movimiento = MovimientoInventario::findOrFail($id);
        return view('movimientos.show', compact('movimiento'));
    }

    // Método para mostrar el formulario de edición
    public function edit($id)
    {
        $movimiento = MovimientoInventario::findOrFail($id);
        return view('movimientos.edit', compact('movimiento'));
    }

    // Método para actualizar un movimiento
    public function update(Request $request, $id)
    {
        $request->validate([
            'tipo' => 'required',
            'tipoinsumo' => 'required',
            'colorInsumo' => 'required',
            'cantidad' => 'required|integer',
            'fecha' => 'required|date',
            'insumos_existentes' => 'required',
            'IdProveedor' => 'required|integer',
            'IdEmpleado' => 'required|integer',
            'descripcion' => 'required|string|max:255',
        ]);

        $movimiento = MovimientoInventario::findOrFail($id);
        $movimiento->update($request->all());

        return redirect()->route('movimientos.index')->with('success', 'Movimiento actualizado exitosamente.');
    }

    // Método para eliminar un movimiento
    public function destroy($id)
    {
        $movimiento = MovimientoInventario::findOrFail($id);
        $movimiento->delete();

        return redirect()->route('movimientos.index')->with('success', 'Movimiento eliminado exitosamente.');
    }
}
