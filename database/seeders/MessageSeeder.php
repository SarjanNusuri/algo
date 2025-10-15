<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Message;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Message::create([
            'nama' => 'adhit',
            'email' => 'adhit@gmail.com',
            'pesan' => 'saya sangat puas dengan layanan ini',
            'foto' => 'fotomera.jpg',
            'profesi' => 'pelajar',
        ]);
    }
}
