<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registro extends Authenticatable
{
    use Notifiable, HasFactory;

    protected $table = 'usuario'; // Tabla 'usuario'
    protected $primaryKey = 'Id_usuario'; // Clave primaria

    public $timestamps = false;

    protected $fillable = [
        'Numero_documento',
        'Tipo_documento',
        'Nombres',
        'Apellidos',
        'Telefono',
        'Edad',
        'Email', // Este es el campo que se usa para la autenticación
        'Password',
    ];

   


    protected $hidden = [
        'Password',
    ];

    // Método para obtener la contraseña
    public function getAuthPassword()
    {
        return $this->Password;
    }


    public function empleado()
    {
        return $this->hasOne(Empleado::class, 'Id_usuario', 'Id_usuario');
    }
}

