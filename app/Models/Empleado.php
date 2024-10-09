<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    public $timestamps = false;


    protected $table = 'empleado';

    protected $primaryKey = 'IdEmpleado'; 


    protected $keyType = 'int';

    protected $fillable = [
        'Id_usuario',
        'nombre',
        'apellido',
        'salario',
        'fecha_contratacion',
        'rol_usuario',
    ];

    public function usuario()
    {
        return $this->belongsTo(Registro::class, 'Id_usuario');
    }
}
