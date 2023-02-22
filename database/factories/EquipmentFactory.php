<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EquipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
            return [
                'name' => $this->faker->name(),
                'purcashing_at' => $this->faker->date(),
                'building_id' => Str::random(6),
            ];
       
    }
}
