<?php

namespace Database\Seeders;

use App\Models\Jamaah;
use App\Models\Kegiatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JamaahKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Dapatkan semua Jamaah dan Activity
        $jamaahs = Jamaah::all();
        $kegiatans = Kegiatan::all();

        // Looping untuk menghubungkan Jamaah dengan beberapa kegiatan
        foreach ($jamaahs as $jamaah) {
            // Menambahkan 2 sampai 5 kegiatan secara acak untuk setiap jamaah
            $jamaah->kegiatans()->attach(
                $kegiatans->random(rand(2, 5))->pluck('id')->toArray()
            );
        }
    }
}
