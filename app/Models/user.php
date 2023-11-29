<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'id',
        'nombre',
        'apellido1',
        'apellido2',
        'correo',
        'edad',
        'nacionalidad',
        'tipo',
        'telefono',
        'contrasena',
    ];
}