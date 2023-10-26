<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barcode extends Model
{
    use HasFactory;

    protected $fillable = [
        'entity_id',
        'url', // ID dari entitas terkait
        'entity_type', // ID dari entitas terkait
    ];

    public function entity()
    {
        return $this->belongsTo(Entity::class);
    }
}
