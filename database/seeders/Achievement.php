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
        \App\Models\Achievement::insert([
            [
                'id' => 1,
                'title' => 'Juara 1 Lomba Membaca',
                'description' => 'Juara 1 Lomba Membaca Tingkat Provinsi',
                'photo' => 'https://picsum.photos/200/300',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'title' => 'Juara 2 Lomba Membaca',
                'description' => 'Juara 2 Lomba Membaca Tingkat Provinsi',
                'photo' => 'https://picsum.photos/200/300',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'title' => 'Juara 3 Lomba Membaca',
                'description' => 'Juara 3 Lomba Membaca Tingkat Provinsi',
                'photo' => 'https://picsum.photos/200/300',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
