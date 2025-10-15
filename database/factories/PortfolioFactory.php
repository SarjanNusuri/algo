<?php

namespace Database\Factories;
use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portfolio>
 */
class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_user' => User::factory(),
            'title' =>$this->faker->sentence(3),
            'kategori'=>$this->faker->paragraph(),
            'gambar'=>$this->faker->imageUrl(640,400,'bussiness',true),
            // 'user_id'=>\App\Models\User::factory(),
        ];
    }
}
