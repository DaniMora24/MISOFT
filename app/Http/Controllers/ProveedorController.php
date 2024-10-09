<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function index() {
        $proveedores = Proveedor::all();
        return view('proveedores.index', compact('proveedores'));
    }

    public function create() {
        return view('proveedores.crear');
    }

    public function store(Request $request)
    {
        $proveedor = new Proveedor();
    
        // Asignar valores de los campos del formulario
        $proveedor->nombre_empresa = $request->nombre_empresa;
        $proveedor->nombre_contacto = $request->nombre_contacto;
        $proveedor->identificacion = $request->identificacion;
        $proveedor->nro_identificacion = $request->nro_identificacion;
        $proveedor->telefono = $request->telefono;
        $proveedor->email_contacto = $request->email_contacto;
        $proveedor->email_empresa = $request->email_empresa;
        $proveedor->pais = $request->pais;
        $proveedor->ciudad = $request->ciudad;
        $proveedor->direccion = $request->direccion;
        $proveedor->codigo_postal = $request->codigo_postal;
    
        $proveedor->save();
    
        return redirect()->route('proveedores.index')->with('success', 'Proveedor registrado exitosamente.');
    }
    

    public function edit($IdProveedor) {
        $proveedor = Proveedor::findOrFail($IdProveedor);
        return view('proveedores.editar', compact('proveedor'));
    }

    public function update(Request $request, $id) {
        $proveedor = Proveedor::findOrFail($id);
        // Actualiza los valores de los campos
        $proveedor->nombre_empresa = $request->nombre_empresa;
        $proveedor->nombre_contacto = $request->nombre_contacto;
        $proveedor->identificacion = $request->identificacion;
        $proveedor->nro_identificacion = $request->nro_identificacion;
        $proveedor->telefono = $request->telefono;
        $proveedor->email_contacto = $request->email_contacto;
        $proveedor->email_empresa = $request->email_empresa;
        $proveedor->pais = $request->pais;
        $proveedor->ciudad = $request->ciudad;
        $proveedor->direccion = $request->direccion;
        $proveedor->codigo_postal = $request->codigo_postal;
    

        $proveedor->save();

        return redirect()->route('proveedores.index')->with('success', 'Proveedor actualizado exitosamente.');
    }

    public function eliminar($IdProveedor)
    {
        // Obtener el proveedor por ID
        $proveedor = Proveedor::findOrFail($IdProveedor);
        
        // Retornar la vista de confirmación con el proveedor
        return view('proveedores.eliminar', compact('proveedor'));
    }
    
    // Función para eliminar el proveedor
    public function destroy($IdProveedor)
    {
        // Obtener el proveedor por ID
        $proveedor = Proveedor::findOrFail($IdProveedor);
        $proveedor->delete();
    
        // Redirigir con un mensaje de éxito
        return redirect()->route('proveedores.index')->with('success', 'Proveedor eliminado exitosamente.');
    }


}
