<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pqrs extends Model
{
    use HasFactory;

    protected $table = 'pqrs';
    protected $primaryKey = 'IdPQRS';
    public $timestamps = false;

    protected $fillable = [
        'Id_usuario',
        'Descripcion',
        'Fecha',
        'TipoPQRS'
    ];
}
