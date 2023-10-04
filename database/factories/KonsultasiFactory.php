<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KonsultasiFactory extends Factory
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
            'domisili' => $this->faker->address(),
            'tgl' => $this->faker->dateTime(),
            'no_telepon' => $this->faker->phoneNumber(),
            'keluhan' => $this->faker->sentence(mt_rand(10,20)),
            'lama_keluhan' => $this->faker->sentence(mt_rand(1,2))
        ];
    }
}
