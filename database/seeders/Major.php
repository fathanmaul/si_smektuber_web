<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Major extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Major::insert([
            [
                'id' => 1,
                'name' => 'Teknik Kendaraan Ringan',
                'description' => 'Teknik Kendaraan Ringan',
                'photo' => 'https://picsum.photos/200/300',
                'facility' => 'Laboratorium',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Teknik Sepeda Motor',
                'description' => 'Teknik Sepeda Motor',
                'photo' => 'https://picsum.photos/200/300',
                'facility' => 'Laboratorium',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Teknik Komputer dan Jaringan',
                'description' => 'Teknik Komputer dan Jaringan',
                'photo' => 'https://picsum.photos/200/300',
                'facility' => 'Laboratorium',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'name' => 'Multimedia',
                'description' => 'Multimedia',
                'photo' => 'https://picsum.photos/200/300',
                'facility' => 'Laboratorium',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'name' => 'Tata Kecantikan Kulit dan Rambut',
                'description' => 'Tata Kecantikan Kulit dan Rambut',
                'photo' => 'https://picsum.photos/200/300',
                'facility' => 'Laboratorium',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
