<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Masjid;

class MasjidSeeder extends Seeder
{
    public function run()
    {
        // Buat 10 masjid
        Masjid::factory()->count(50)->create();
    }
}

