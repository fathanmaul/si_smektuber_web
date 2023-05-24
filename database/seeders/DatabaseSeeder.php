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
        /**
         * Production Seeder
         */
        // $this->call([
        //     Role::class,
        //     User::class,
        //     About::class,
        //     Major::class,
        //     Extracurricular::class,
        //     Article::class,
        //     SchoolYear::class,
        //     PpdbRegistration::class,
        //     Loker::class,
        //     DetailRegistration::class,
        // ]);

        /**
         * Development Seeder
         */
        $this->call([
            Role::class,
            User::class,
            About::class,
            \Database\Seeders\Develop\Major::class,
            \Database\Seeders\Develop\Extracurricular::class,
            \Database\Seeders\Develop\Article::class,
            \Database\Seeders\Develop\SchoolYear::class,
            PpdbRegistration::class,
            \Database\Seeders\Develop\Loker::class,
            DetailRegistration::class,
        ]);
    }
}
