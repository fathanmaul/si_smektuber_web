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
        Registration::insert([
            'school_year' => 1,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'date_start' => '2021-07-01',
            'date_end' => '2021-07-31',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
