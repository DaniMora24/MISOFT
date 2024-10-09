<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimientoInventario extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla
    protected $table = 'movimientos_inventario';

    // Especifica la clave primaria
    protected $primaryKey = 'Id_movimiento';

    // Indica que no estamos usando timestamps
    public $timestamps = false;

    // Especifica los atributos que se pueden llenar
    protected $fillable = [
        'tipo',
        'tipoinsumo',
        'colorInsumo',
        'cantidad',
        'fecha',
        'insumos_existentes',
        'IdProveedor',
        'IdEmpleado',
        'descripcion'
    ];
}
