<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'id',
        'nombre',
        'tipo',
    ];

    public function officesLabels()
    {
        return $this->hasMany(OfficesLabel::class);
    }
}