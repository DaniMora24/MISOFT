<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedor'; // Nombre de la tabla
    protected $primaryKey = 'IdProveedor'; // Nombre de la clave primaria
    public $timestamps = false; // Desactivar marcas de tiempo

    protected $fillable = [
        'nombre_empresa',
        'nombre_contacto',
        'identificacion',
        'nro_identificacion',
        'telefono',
        'email_contacto',
        'email_empresa',
        'pais',
        'ciudad',
        'direccion',
        'codigo_postal',
    ];
}
