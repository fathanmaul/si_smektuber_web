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
        ModelsExtracurricular::insert([
            'name' => 'Pramuka',
            'description' => Str::random(100),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
