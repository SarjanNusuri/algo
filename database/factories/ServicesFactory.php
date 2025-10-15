<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Services>
 */
class ServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

                'title' =>$this->faker->sentence(3),
                'jenis' => $this->faker->randomElement(['webdev','desain ui/ux','desain prototype']),
                'description'=>$this->faker->paragraph(),
                'price'=>$this->faker->randomFloat(2,1000,5000),
                'diskon'=>$this->faker->numberBetween(5,50),
                'status'=>$this->faker->randomElement(['belum disetujui','setuju']),
                // 'user_id'=>\App\Models\User::factory(),
            
        ];
    }
}
