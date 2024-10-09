<?php
namespace App\Http\Controllers;
use App\Models\Envio;
use Illuminate\Http\Request;

class DomiciliarioController extends Controller
{
    public function index()
    {
        $domiciliarios = Envio::all();
        return view('usuarios.domiciliario', compact('domiciliarios'));
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

        return redirect()->route('usuarios.domiciliario')->with('success', 'Envío creado correctamente.');
    }



    public function edit($Numero_envio)
    {
        $domiciliarios = Envio::where('Numero_envio', $Numero_envio)->firstOrFail();
        return view('usuarios.editarenv', compact('domiciliarios'));
    }


    public function update(Request $request, $Numero_envio)
    {
        $domiciliarios = Envio::where('Numero_envio', $Numero_envio)->firstOrFail();

        $request->validate([
            'costoEnvio' => 'required|numeric',
            'direccionDestino' => 'required|string|max:255',
            'tiempoEntrega' => 'required|string|max:255',
            'estadoEnvio' => 'required',
            'IdVenta' => 'required|numeric',
            'IdDomiciliario' => 'required|numeric',
            'IdEmpleado' => 'required|numeric',
        ]);

        $domiciliarios->update($request->all());

        return redirect()->route('usuarios.domiciliario')->with('success', 'Envío actualizado correctamente.');
    }

}