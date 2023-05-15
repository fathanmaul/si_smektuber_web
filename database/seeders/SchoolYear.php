<?php

namespace Database\Seeders;

use App\Models\SchoolYear as ModelsSchoolYear;
use Illuminate\Database\Seeder;

class SchoolYear extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $year = ['2021/2022', '2022/2023', '2023/2024'];
        foreach ($year as $value) {
            ModelsSchoolYear::insert([
                'school_year' => $value,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        
    }
}
