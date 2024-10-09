<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla asociada a este modelo
    protected $table = 'producto';
    protected $primaryKey = 'IdProducto';
    public $timestamps = false;
    
    protected $fillable = [
        'Nombre_producto',
        'estadoProducto',
        'disponibilidadProducto',
        'Precio_Producto',
        'Categoria',
       
    ];

   
}
