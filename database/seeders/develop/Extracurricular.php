<?php

namespace Database\Seeders\Develop;

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
        $extra = ['Pramuka', 'Paduan Suara', 'Paskibra', 'PMR', 'Futsal', 'Basket', 'Voli', 'Bulu Tangkis', 'Karate', 'Taekwondo', 'Pencak Silat', 'Tari', 'Teater'];

        // $extra = json_encode($extra);

        $lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
        
        foreach($extra as $key => $value){
            # code...
                ModelsExtracurricular::insert([
                    'extracurricular_name' => $value,
                    'extracurricular_description' => $lorem,
                    // 'extracurricular_logo' => 'https://via.placeholder.com/150',
                    // 'extracurricular_photo_1' => 'https://via.placeholder.com/150',
                    // 'extracurricular_photo_2' => 'https://via.placeholder.com/150',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
        }
    }
}
