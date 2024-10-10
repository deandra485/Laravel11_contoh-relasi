<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jamaah;
use App\Models\Masjid;

class JamaahSeeder extends Seeder
{
    public function run()
    {
        // Ambil semua masjid dan buat 10 jamaah untuk masing-masing masjid
        Masjid::all()->each(function ($masjid) {
            Jamaah::factory()->count(100)->create(['masjid_id' => $masjid->id]);
        });
    }
}
