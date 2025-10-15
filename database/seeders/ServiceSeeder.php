<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Services;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Services::factory()->count(5)->create();
        //     [
        //     'title' => 'web development',
        // 'description' => 'web development adalah sebuah profesi eh bukan profesi si tapi skill seseorang dalam mengembangkan sebuah website',
        // 'price' => 2500000,
        // 'status' => '',
           
        // ]);
    }
}
