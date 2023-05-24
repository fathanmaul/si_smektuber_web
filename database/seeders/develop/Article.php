<?php

namespace Database\Seeders\Develop;

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
        for ($i = 1; $i <= 50; $i++) {
            ModelsArticle::insert([
                'title' => $judul . ' ' . $i,
                'slug' => Str::slug($judul) . $i,
                'description' => 'Lorem ipsum dolor sit amet consectetur',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $judul2 = "Upacara Peringatan Hari Nyepi Tahun Saka 1945";
        for ($i = 1; $i <= 50; $i++) {
            ModelsArticle::insert([
                'title' => $judul2 . ' ' . $i,
                'slug' => Str::slug($judul2) . $i,
                'description' => 'Lorem ipsum dolor sit amet consectetur',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
