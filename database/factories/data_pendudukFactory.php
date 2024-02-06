<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class data_pendudukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_dusun'=>$this->faker->word(),
            'laki_laki'=>$this->faker->numberBetween(1, 500),
            'perempuan'=>$this->faker->numberBetween(1, 500),
            'jumlah_kk'=>$this->faker->numberBetween(1, 50)
        ];
    }
}
