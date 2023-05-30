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
                'name' => 'Superadmin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Admin',
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
                'name' => 'Siswa',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Member',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
