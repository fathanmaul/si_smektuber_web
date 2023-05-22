<?php

namespace Database\Seeders;

use App\Models\DetailRegistration as ModelsDetailRegistration;
use Illuminate\Database\Seeder;

class DetailRegistration extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['Alessandro', 'Alwar', 'Andres', 'Baltasar', 'Baltasar', 'Benedicto', 'Benicio', 'Canda', 'Cariann', 'Carlitos', 'Casimiro', 'Chico', 'Cipriano', 'Dario', 'Daza'];
        foreach ($name as $key => $value) {
            ModelsDetailRegistration::create([
                'user_id' => '4',
                'registration_id' => '1',
                'nisn' => '35551118'.$key,
                'full_name' => $value,
                'place_birth' => 'Bandung',
                'date_birth' => '2007-05-13',
                'phone' => '08191829383'.$key,
                'address' => 'Jl. Cikutra No. 123, Bandung',
                'school_origin' => 'SMPN 1 Bandung',
                'father_name' => 'Budi',
                'mother_name' => 'Siti',
                'graduation_year' => '2021',
                'major_id_1' => '1',
                'major_id_2' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
