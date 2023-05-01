<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Achievement extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            \App\Models\Achievement::insert([
                [
                    'title' => 'Juara 1 Lomba Membaca',
                    'description' => 'Juara 1 Lomba Membaca Tingkat Provinsi',
                    // 'photo' => 'https://picsum.photos/200/300',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
            ]);
        }
    }
}
