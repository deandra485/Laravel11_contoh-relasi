<?php

namespace Database\Seeders;

use App\Models\Jamaah;
use App\Models\Kegiatan;
use App\Models\Masjid;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {


        Masjid::factory(50)->create();
        Jamaah::factory(500)->create();
        Kegiatan::factory(150)->create();
        $this->call([
            JamaahKegiatanSeeder::class
        ]);
        // $this->call([
        //     MasjidSeeder::class,
        //     JamaahSeeder::class,
        //     KegiatanSeeder::class,
        // ]);
    }
}
