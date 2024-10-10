<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MasjidFactory extends Factory
{
    protected $model = \App\Models\Masjid::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->company . ' Masjid',
            'alamat' => $this->faker->address,
            'jumlah_rek_donasi' => $this->faker->randomFloat(2, 10000, 1000000), // donasi antara 10.000 - 1.000.000
            'kapasitas' => $this->faker->numberBetween(50, 500), // kapasitas antara 50 - 500 orang
        ];
    }
}



