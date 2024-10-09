<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    use HasFactory;

    protected $table = 'envios';
    protected $primaryKey = 'Numero_envio';
    public $timestamps = false; 
    public $incrementing = false; 
    protected $keyType = 'string';
    protected $fillable = [
        'Numero_envio', 
        'costoEnvio',
        'direccionDestino',
        'tiempoEntrega',
        'estadoEnvio',
        'IdVenta',
        'IdDomiciliario',
        'IdEmpleado',
    ];

    

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'IdEmpleado');
    }
}
