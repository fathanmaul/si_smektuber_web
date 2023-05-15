<?php

namespace Database\Seeders;

use App\Models\Article as ModelsArticle;
use App\Models\Posts as ModelsPosts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class Article extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $judul = "Upacara Peringatan Hari Pendidikan Nasional 2023 dan Halal Bihalal";
        for ($i=0; $i < 20; $i++) { 
            ModelsArticle::insert([
                'title' => $judul.' '.$i,
                'slug' => Str::slug($judul).$i,
                'description' => 'Lorem ipsum dolor sit amet consectetur',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
