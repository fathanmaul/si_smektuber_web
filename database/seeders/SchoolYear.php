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
        $schoolYear = [];
        for ($i=18; $i <= 25; $i++) { 
            array_push($schoolYear, '20'.$i.'/20'.($i+1));
        }
        // $year = ['','2021/2022', '2022/2023', '2023/2024'];
        foreach ($schoolYear as $value) {
            ModelsSchoolYear::insert([
                'school_year' => $value,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        
    }
}
