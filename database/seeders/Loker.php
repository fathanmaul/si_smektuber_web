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
        $loker = [
            [
                'title' => 'We are seeking for a preschool teacher to start in July 2023.',
                'desc' => 'A preschool teacher is responsible for providing a safe, nurturing, and stimulating environment that encourages children to develop socially, emotionally, intellectually, and physically'
            ],
            [
                'title' => 'Guru Agama (Religion Student Counselor)',
                'desc' => 'Create environments, activities, and programming for each age group of children that will facilitate learning and encourage spiritual growth, Ensuring Core Character Value Program is executed at each classroom in accordance with established curriculum, classroom procedures, and child safety policies'
            ],
            [
                'title' => 'Kandidat yang bisa untuk membersihkan / servis AC, mengecat, memperbaiki pipa, pemeliharaan umum',
                'desc' => 'Mengerjakan perawatan & pemeliharaan AC,
                Instalasi tata udara (Exhaust Fan) dan perawatannya,
                Pemeliharaan kompresor mesin pendingin (AC, Chiller, dll), dan utilitas Gedung lainnya,
                Melakukan kontrol & perawatan mesin sesuai dengan jadwal yang sudah ditentukan,
                Membuat laporan kerja perbaikan dan perawatan mesin.'
            ]
        ];

        foreach($loker as $key => $value){
            ModelsLoker::insert([
                'title' => $value['title'],
                'slug' => Str::slug($value['title']),
                'description' => $value['desc'],
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
        }
    }
}
