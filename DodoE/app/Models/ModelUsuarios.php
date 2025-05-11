<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelUsuarios extends Model
{
    protected $table = 'tblusuarios';
    protected $fillable = [
        'nombre',
        'email',
        'contraseña',
        'rol',
    ];

    public function Eventos()
    {
        return $this->hasMany(ModelEventos::class);
    }
   
}