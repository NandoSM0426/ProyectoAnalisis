<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = [
        'id',
        'nombre',
        'precio',
        'ubicacion',
        'disponibilidad',
        'descripcion',
        'imagen',
    ];

    public function reservations()
    {
        return $this->belongsToMany(Reservation::class, 'details_offices');
    }
}