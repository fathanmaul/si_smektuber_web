<?php

namespace Database\Seeders;

use App\Models\Major as ModelsMajor;
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
        $major = [
            'Teknik Komputer dan Jaringan',
            'Desain Komunikasi Visual',
            'Kecantikan Kulit dan Rambut',
            'Otomotif'
        ];
        $lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';

        foreach ($major as $key => $value) {
            ModelsMajor::insert([
                'major_name' => $value,
                'major_description' => $lorem,
                // 'major_logo' => 'https://via.placeholder.com/150',
                // 'picture_1' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
