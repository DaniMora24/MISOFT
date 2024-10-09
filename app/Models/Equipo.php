<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';
    protected $primaryKey = 'IdEquipo';
    public $timestamps = false;

    protected $fillable = [
        'referenciaEquipo', 'cantidadEquipo', 'IdEmpleado', 'estadoEquipo'
    ];

    
    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'IdEmpleado');
    }
}
