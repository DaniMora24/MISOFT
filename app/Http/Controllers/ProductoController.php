<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Método para mostrar la lista de productos
    public function index()
    {
        // Obtiene todos los productos desde la base de datos
        $productos = Producto::all();
        
        // Pasa la variable 'productos' a la vista, no 'producto' (corrección)
        return view('productos.index', compact('productos'));
    }

    // Método para mostrar la vista de crear un nuevo producto
    public function create()
    {
        return view('productos.create');
    }

    // Método para almacenar un nuevo producto en la base de datos
    public function store(Request $request)
    {
        // Validación de los campos del formulario
        $request->validate([
            'Nombre_producto' => 'required|max:25',
            'estadoProducto' => 'required|in:Finalizado,en proceso,Pendiente',
            'disponibilidadProducto' => 'required|in:Disponible,Agotado',
            'Precio_Producto' => 'required|numeric|min:0',
            'Categoria' => 'required|in:Flores,Amigurumis,Accesorios,Arreglos',
            
        ]);

        // Crea el producto con los datos validados
        Producto::create($request->all());

        // Redirecciona a la lista de productos con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
    }

    // Método para mostrar el formulario de edición de un producto existente
    public function edit(Producto $producto)
    {
        // Pasa el producto a la vista de edición
        return view('productos.edit', compact('producto'));
    }

    // Método para actualizar un producto existente en la base de datos
    public function update(Request $request, Producto $producto)
    {
        // Validación de los campos actualizados
        $request->validate([
            'Nombre_producto' => 'required|max:25',
            'estadoProducto' => 'required|in:Finalizado,en proceso,Pendiente',
            'disponibilidadProducto' => 'required|in:Disponible,Agotado',
            'Precio_Producto' => 'required|numeric|min:0',
            'Categoria' => 'required|in:Flores,Amigurumis,Accesorios,Arreglos',
            
        ]);

        // Actualiza el producto con los datos validados
        $producto->update($request->all());

        // Redirecciona a la lista de productos con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }

    // Método para eliminar un producto
    public function destroy(Producto $producto)
    {
        // Elimina el producto de la base de datos
        $producto->delete();

        // Redirecciona a la lista de productos con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
    }
}
