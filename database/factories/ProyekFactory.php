<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proyek>
 */
class ProyekFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama'=>$this->faker->name(),
            'jenis'=>$this->faker->jobTitle(),
            'harga'=>$this->faker->numberBetween(100000,100000000),
            'proses'=>$this->faker->randomElement(['pending','progress','done']),
            'rating'=>$this->faker->randomElement(['tidak puas','puas','sangat puas']),

        ];
    }
}
