<?php

namespace Database\Seeders;

use App\Models\Loker as ModelsLoker;
use Illuminate\Database\Seeder;

class Loker extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsLoker::create([
            'slug' => 'loker-1',
            'title' => 'Loker 1',
            'description' => 'Loker 1',
            'thumbnail' => 'https://picsum.photos/200/300',
        ]);
    }
}
