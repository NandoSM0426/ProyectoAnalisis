<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'office_id',
        'fecha_inicio_reserva',
        'fecha_fin_reserva',
        'informacion_de_pago',
    ];

    public function offices()
    {
        return $this->belongsToMany(Office::class, 'details_offices');
    }
}