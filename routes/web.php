<?php

use App\Http\Controllers\PaginaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\MovimientoInventarioController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EnvioController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PQRSController;
use App\Http\Controllers\DomiciliarioController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/catalogo', function () {
    return view('catalogo'); // La vista para la página de inicio
})->name('catalogo');



Route::get('/carrito', [PaginaController::class, 'carrito'])->name('carrito');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/factura', [PaginaController::class, 'factura'])->name('factura');
Route::post('/factura/store', [CarritoController::class, 'store'])->name('factura.store');
Route::get('/registro', [RegistroController::class, 'create'])->name('registro');
Route::post('/registro', [RegistroController::class, 'store'])->name('registro.store');
Route::get('/login', [RegistroController::class, 'login'])->name('login');
Route::post('/login', [RegistroController::class, 'inicio'])->name('login');
Route::get('/index',[CarritoController::class, 'index']) ->name('index');

Route::post('/logout', [RegistroController::class, 'logout'])->name('logout');



// Ruta para mostrar la lista de usuarios
Route::get('/usuarios', [RegistroController::class, 'index'])->name('usuarios.index');
// Ruta para eliminar un usuario
Route::delete('/usuarios/{id}', [RegistroController::class, 'destroy'])->name('usuarios.destroy');



//Rutas Usuarios
Route::get('/usuarios', [RegistroController::class, 'index'])->name('usuarios.index');
Route::delete('/usuarios/{id}', [RegistroController::class, 'destroy'])->name('usuarios.destroy');
Route::get('/domiciliario/catalogodomi', [RegistroController::class, 'catalogodomi'])->name('catalogodomi');
Route::get('/domiciliario/catalogoadmi', [RegistroController::class, 'catalogoadmi'])->name('catalogoadmi');
Route::get('/domiciliario/domiciliario', [RegistroController::class, 'domiciliario'])->name('usuarios.domiciliario');


// Ruta Empleados
Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleados.index');
Route::get('/empleados/crear', [EmpleadoController::class, 'crear'])->name('empleados.crear');
Route::post('/empleados', [EmpleadoController::class, 'almacenar'])->name('empleados.almacenar');
Route::get('/empleados/editar/{id}', [EmpleadoController::class, 'editar'])->name('empleados.editar');
Route::post('/empleados/actualizar/{id}', [EmpleadoController::class, 'actualizar'])->name('empleados.actualizar');
Route::delete('/empleados/eliminar/{id}', [EmpleadoController::class, 'eliminar'])->name('empleados.eliminar');
Route::post('/empleados/eliminar/{id}', [EmpleadoController::class, 'eliminarAccion'])->name('empleados.eliminar.accion');
Route::delete('/empleados/eliminar/{id}', [EmpleadoController::class, 'eliminar'])->name('empleados.eliminar');
Route::get('/empleados/detalles/{id}', [EmpleadoController::class, 'detalles'])->name('empleados.detalles');



//Rutas Movimientos
Route::prefix('movimientos')->group(function () {
    Route::get('/', [MovimientoInventarioController::class, 'index'])->name('movimientos.index');
    Route::get('/create', [MovimientoInventarioController::class, 'create'])->name('movimientos.create');
    Route::post('/', [MovimientoInventarioController::class, 'store'])->name('movimientos.store');
    Route::get('/{id}', [MovimientoInventarioController::class, 'show'])->name('movimientos.show');
    Route::get('/{id}/edit', [MovimientoInventarioController::class, 'edit'])->name('movimientos.edit');
    Route::put('/{id}', [MovimientoInventarioController::class, 'update'])->name('movimientos.update');
    Route::delete('/{id}', [MovimientoInventarioController::class, 'destroy'])->name('movimientos.destroy');
});


// Rutas Proveedores
Route::get('/proveedores', [ProveedorController::class, 'index'])->name('proveedores.index');
Route::get('/proveedores/crear', [ProveedorController::class, 'create'])->name('proveedores.crear');
Route::post('/proveedores', [ProveedorController::class, 'store'])->name('proveedores.store');
Route::get('/proveedores/{id}/editar', [ProveedorController::class, 'edit'])->name('proveedores.editar');
Route::put('/proveedores/{id}', [ProveedorController::class, 'update'])->name('proveedores.update');
Route::get('/proveedores/{id}/eliminar', [ProveedorController::class, 'eliminar'])->name('proveedores.eliminar');
Route::delete('proveedores/{id}/eliminar', [ProveedorController::class, 'destroy'])->name('proveedores.destroy');



//Rutas Productos
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
Route::get('/productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
Route::put('/productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');
Route::delete('/productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');


//Rutas Envios
Route::get('/envios', [EnvioController::class, 'index'])->name('envio.index');
Route::get('/envios/crear', [EnvioController::class, 'create'])->name('envio.crear');
Route::post('/envios', [EnvioController::class, 'store'])->name('envio.store');
Route::get('/envios/{Numero_envio}/editar', [EnvioController::class, 'edit'])->name('envio.editar');
Route::put('/envios/{Numero_envio}', [EnvioController::class, 'update'])->name('envio.actualizar');
Route::delete('envios/{Numero_envio}', [EnvioController::class, 'destroy'])->name('envio.destroy');



// Rutas Equipos
Route::get('/equipo', [EnvioController::class, 'index'])->name('equipo.index');
Route::resource('equipo', EquipoController::class);
Route::get('equipo/{id}/confirm-delete', [EquipoController::class, 'confirmDelete'])->name('equipo.confirmDelete');

//Rutas PQRS

Route::get('/pqrs', [PQRSController::class, 'index'])->name('pqrs.index');
Route::get('/pqrs/create', [PQRSController::class, 'create'])->name('pqrs.create');
Route::post('/pqrs', [PQRSController::class, 'store'])->name('pqrs.store');
Route::get('/pqrs/{id}', [PQRSController::class, 'show'])->name('pqrs.show');
Route::get('/pqrs/{id}/edit', [PQRSController::class, 'edit'])->name('pqrs.edit');
Route::put('/pqrs/{id}', [PQRSController::class, 'update'])->name('pqrs.update');
Route::delete('/pqrs/{id}', [PQRSController::class, 'destroy'])->name('pqrs.destroy');

//Domiciliario
Route::get('/domiciliario', [DomiciliarioController::class, 'index'])->name('usuarios.domiciliario');
Route::post('/domiciliario/store', [DomiciliarioController::class, 'store'])->name('usuarios.domiciliario.store');
Route::put('/domiciliario/{Numero_envio}', [DomiciliarioController::class, 'update'])->name('usuarios.domiciliario.update');
Route::get('/domiciliario/{Numero_envio}/edit', [DomiciliarioController::class, 'edit'])->name('usuarios.editarenv');
