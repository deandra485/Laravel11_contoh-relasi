<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kegiatan;
use App\Models\Masjid;

class KegiatanSeeder extends Seeder
{
    public function run()
    {
        // Ambil semua masjid dan buat 5 kegiatan untuk masing-masing masjid
        Masjid::all()->each(function ($masjid) {
            Kegiatan::factory()->count(50)->create(['masjid_id' => $masjid->id]);
        });
    }
}
