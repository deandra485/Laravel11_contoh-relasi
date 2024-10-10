<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jamaah extends Model
{
    use HasFactory;

    public function masjid()
    {
        return $this->belongsTo(Masjid::class);
    }

    public function kegiatans()
    {
        return $this->belongsToMany(Kegiatan::class, 'jamaah_kegiatan');
    }
}
