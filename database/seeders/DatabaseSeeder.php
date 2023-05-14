<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Role::class,
            User::class,
            About::class,
            // Major::class,
            // PostCategory::class,
            // Extracurricular::class,
        ]);
    }
}
