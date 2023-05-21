<?php

namespace Database\Seeders;

use App\Models\Extracurricular as ModelsExtracurricular;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Extracurricular extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $extracurricular = ['Pramuka', 'Basket', 'Futsal', 'Volly', 'Paskibra', 'Pencak Silat', 'Karate', 'Taekwondo'];

        foreach($extracurricular as $key => $value){
            ModelsExtracurricular::insert([
                'extracurricular_name' => $value,
                'extracurricular_description' => Str::random(100),
                'extracurricular_logo' => 'https://via.placeholder.com/150',
                'extracurricular_photo_1' => 'https://via.placeholder.com/150',
                // 'extracurricular_photo_2' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
