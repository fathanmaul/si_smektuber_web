<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Article extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Article::insert([
        //     [
        //         'id' => 1,
        //         'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        //         'slug' => 'lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit',
        //         'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas obcaecati earum delectus adipisci consequatur odit quisquam voluptatibus impedit reprehenderit suscipit, dolorum laboriosam ullam enim quo nihil est tempore error saepe.',
        //         'thumbnail' => 'https://picsum.photos/200/300',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]
        // ]);
        \App\Models\Article::factory(10)->create();
    }
}
