<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    use HasFactory;
    protected $table = 'entities'; // Sesuaikan dengan nama tabel yang benar
    protected $fillable = ['type', 'common_name', 'local_name', 'latin_name', 'english_translation', 'biome', 'description', 'quantity', 'image_name', 'image_path'];

    // Definisi relasi
    public function barcodes()
    {
        return $this->hasMany(Barcode::class);
    }

    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        if ($this->image_name) {
            return asset('assets/img/' . $this->image_name);
        }
    }
}
