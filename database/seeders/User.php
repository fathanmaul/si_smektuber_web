<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::insert([
            // admin
            [
                'name' => 'admin',
                'username' => 'admin',
                'email' => 'admin@nekoid.com',
                'password' => bcrypt('Nekoid123'),
                'role_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // kepala sekolah
            [
                'name' => 'kepala sekolah',
                'username' => 'ks',
                'email' => 'ks@nekoid.com',
                'password' => bcrypt('Nekoid123'),
                'role_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // tata usaha
            [
                'name' => 'tata usaha',
                'username' => 'tu',
                'email' => 'tu@nekoid.com',
                'password' => bcrypt('Nekoid123'),
                'role_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // siswa
            [
                'name' => 'siswa',
                'username' => '1234567890',
                'email' => 'siswa@nekoid.com',
                'password' => bcrypt('Nekoid123'),
                'role_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // member
            [
                'name' => 'member',
                'username' => '1234567891',
                'email' => 'member@nekoid.com',
                'password' => bcrypt('Nekoid123'),
                'role_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
