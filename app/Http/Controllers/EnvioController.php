<?php
namespace App\Http\Controllers;

use App\Models\Envio;
use Illuminate\Http\Request;

class EnvioController extends Controller
{
    public function index()
    {
        $envios = Envio::all();
        return view('envio.index', compact('envios'));
    }

    public function create()
    {
        return view('envio.crear');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Numero_envio' => 'required|string|max:255|unique:envios',
            'costoEnvio' => 'required|numeric',
            'direccionDestino' => 'required|string|max:255',
            'tiempoEntrega' => 'required|string|max:255',
            'estadoEnvio' => 'required',
            'IdVenta' => 'required|numeric',
            'IdDomiciliario' => 'required|numeric',
            'IdEmpleado' => 'required|numeric',
        ]);

        Envio::create($request->all());

        return redirect()->route('envio.index')->with('success', 'Envío creado correctamente.');
    }

    public function edit($Numero_envio)
    {
        $envio = Envio::where('Numero_envio', $Numero_envio)->firstOrFail();
        return view('envio.editar', compact('envio'));
    }

    public function update(Request $request, $Numero_envio)
    {
        $envio = Envio::where('Numero_envio', $Numero_envio)->firstOrFail();

        $request->validate([
            'costoEnvio' => 'required|numeric',
            'direccionDestino' => 'required|string|max:255',
            'tiempoEntrega' => 'required|string|max:255',
            'estadoEnvio' => 'required',
            'IdVenta' => 'required|numeric',
            'IdDomiciliario' => 'required|numeric',
            'IdEmpleado' => 'required|numeric',
        ]);

        $envio->update($request->all());

        return redirect()->route('envio.index')->with('success', 'Envío actualizado correctamente.');
    }

    

    // Método para eliminar un movimiento
    public function destroy($Numero_envio)
    {
        $envio = Envio::findOrFail($Numero_envio);
        $envio->delete();

        return redirect()->route('envio.index')->with('success', 'Envio eliminado exitosamente.');
    }
}
