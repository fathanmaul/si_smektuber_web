<?php

namespace Database\Seeders;

use App\Models\Loker as ModelsLoker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class Loker extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = 'Dibuka lowongan kerja untuk posisi guru';
        ModelsLoker::insert([
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => 'Lorem ipsum dolor sit amet con',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
