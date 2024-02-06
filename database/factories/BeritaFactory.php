<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id'=> $this->faker->numberBetween(1,5),
            'judul'=> $this->faker->sentence(),
            'excerpt'=> $this->faker->paragraph(),
            'slug'=> $this->faker->slug(3, false),
            'gambar'=> $this->faker->imageUrl(640, 480, 'animals', true),
            'isi'=> $this->faker->paragraphs(3,true),
        ];
    }
}
