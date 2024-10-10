<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Masjid;

class KegiatanFactory extends Factory
{
    protected $model = \App\Models\Kegiatan::class;

    public function definition()
    {
        return [
            'nama' => 'Kegiatan ' . $this->faker->word,
            'tanggal' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'waktu_mulai' => $this->faker->time('H:i:s'),
            'waktu_selesai' => $this->faker->time('H:i:s'),
            'masjid_id' => Masjid::inRandomOrder()->first()->id // Pilih masjid yang sudah ada
        ];
    }
}
