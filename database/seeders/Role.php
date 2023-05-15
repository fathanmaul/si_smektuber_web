<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Role::insert([
            [
                'role_name' => 'developer',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'role_name' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // [
            //     'name' => 'kepala sekolah',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            // [
            //     'name' => 'tata usaha',
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ],
            [
                'role_name' => 'siswa',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'role_name' => 'member',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
