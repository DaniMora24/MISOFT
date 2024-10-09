<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function carrito()
    {
        return view ('carrito');
    }

    public function factura()
    {
        return view('factura');
    }

    public function store(Request $request)
{
    try {
        // Validar la solicitud
        $request->validate([
            'FechaPago' => 'required|date',
            'MetodoPago' => 'required|string|in:Tarjeta Debito,Tarjeta Credito,PSE,Efectivo',
            'CostoEnvio' => 'required|numeric',
            'subtotal' => 'numeric',
            'IVA' => 'numeric',
            'valor_pago' => 'numeric',
            'IdVenta' => 'required|numeric', // Validar IdVenta
            'numero_Envio' => 'required|numeric', // Validar numero_Envio
        ]);

        // Crear un nuevo registro de pago
        $pago = new Carrito();
        $pago->FechaPago = $request->FechaPago;
        $pago->MetodoPago = $request->MetodoPago;
        $pago->CostoEnvio = $request->CostoEnvio;
        $pago->subtotal = $request->subtotal;
        $pago->IVA = $request->IVA;
        $pago->valor_pago = $request->valor_pago;
        $pago->IdVenta = $request->IdVenta;
        $pago->numero_Envio = $request->numero_Envio;

        // Guardar el registro
        $pago->save();

        // Redirigir a la vista con un mensaje de éxito
        return redirect()->route('carrito')->with('success', 'Compra finalizada. ¡Gracias por tu compra!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error al guardar en la base de datos: ' . $e->getMessage());
    }
}



}