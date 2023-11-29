<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OfficesLabel extends Model
{
    protected $fillable = [
        'id',
        'tag_id',
        'oficina_id',
    ];

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    public function oficina()
    {
        return $this->belongsTo(Oficina::class);
    }
}
