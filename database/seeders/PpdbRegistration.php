<?php

namespace Database\Seeders;

use App\Models\Registration;
use Illuminate\Database\Seeder;

class PpdbRegistration extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<=12; $i++) {
            Registration::insert([
                'school_year' => $i,
                'description' => 'Penerimaan Peserta Didik Baru Tahun Pelajaran',
                'date_start' => '2021-07-01',
                'date_end' => '2021-07-31',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
