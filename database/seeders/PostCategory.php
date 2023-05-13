<?php

namespace Database\Seeders;

use App\Models\PostCategory as ModelsPostCategory;
use Illuminate\Database\Seeder;

class PostCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            'Artikel',
            'Berita',
            'Pengumuman',
        ];

        foreach ($category as $key => $value) {
            ModelsPostCategory::insert([
                'category_name' => $value,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
