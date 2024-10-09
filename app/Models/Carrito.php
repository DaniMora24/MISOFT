<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $table = 'Pago'; // Nombre de la tabla
    protected $primaryKey = 'Id_pago'; // Clave primaria

    public $timestamps = false; // Si no estás utilizando marcas de tiempo

    protected $fillable = [
        'FechaPago',
        'MetodoPago',
        'CostoEnvio',
        'subtotal',
        'IVA',
        'valor_pago',
        'IdVenta',
        'numero_Envio',
    ];
}
