<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TestimoniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'slug' =>$this->faker->slug(),
            'disease' => $this->faker->sentence(mt_rand(1,3)),
            'testi' => $this->faker->sentence(mt_rand(50,100)),
        ];
    }
}
