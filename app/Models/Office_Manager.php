<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OfficeManager extends Model
{
    protected $fillable = [
        'id',
        'nombre',
        'correo',
        'nombredeusuario',
        'contrasena',
    ];
}