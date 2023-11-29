<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Details_Office extends Model
{
    protected $fillable = [
        'id',
        'office_id',
        'imagenes',
        'reseñas',
    ];

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}