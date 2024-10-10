<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Masjid;

class JamaahFactory extends Factory
{
    protected $model = \App\Models\Jamaah::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'alamat_kota' => $this->faker->city,
            'jumlah_donasi' => $this->faker->randomFloat(2, 100, 10000), // donasi antara 100 - 10.000
            'tanggal_lahir' => $this->faker->date('Y-m-d', '2005-12-31'), // tanggal lahir maksimal tahun 2005
            'masjid_id' => Masjid::inRandomOrder()->first()->id, // relasi ke masjid
        ];
    }
}
