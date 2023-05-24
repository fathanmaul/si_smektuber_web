<?php

namespace Database\Seeders;

use App\Models\Major as ModelsMajor;
use Illuminate\Database\Seeder;

class Major extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $majorr = [
            [
                'name' => 'Teknik Komputer dan Jaringan',
                'desc' => 'TKJ (Teknik Komputer dan Jaringan) adalah ilmu berbasis Teknologi Informasi dan Komunikasi terkait kemampuan algoritma, dan pemrograman komputer, perakitan komputer, perakitan jaringan komputer, dan pengoperasian perangkat lunak, dan internet. Teknik komputer, dan jaringan juga membutuhkan pemahaman di bidang teknik listrik, dan ilmu komputer sehingga mampu mengembangkan, dan mengintegrasikan perangkat lunak, dan perangkat keras.'
            ],
            [
                'name' => 'Desain Komunikasi Visual',
                'desc' => 'DKV adalah salah satu cabang ilmu desain yang mempelajari konsep komunikasi melalui berbagai media yang dapat berupa gambar, tatanan huruf, video, media interaktif, dan media visual lainnya agar gagasan yang disampaikan dapat diterima dengan baik, lebih menarik, atau sesuai dengan kebutuhan lainnya ketika diterima oleh penerima pesan.'
            ],
            [
                'name' => 'Kecantikan Kulit dan Rambut',
                'desc' => 'program pendidikan yang berfokus pada pengajaran tentang teknik, teori, dan praktik dalam bidang kecantikan, seperti perawatan kulit, pemakaian makeup, dan perawatan rambut'
            ],
            [
                'name' => 'Otomotif',
                'desc' => 'program pendidikan yang berfokus pada pengajaran tentang teknik, teori, dan praktik dalam bidang otomotif, seperti perawatan kendaraan, perbaikan kendaraan, dan perakitan kendaraan'
            ]
        ];
        

        foreach ($majorr as $key => $value) {
            ModelsMajor::insert([
                'major_name' => $value['name'],
                'major_description' => $value['desc'],
                // 'major_logo' => 'https://via.placeholder.com/150',
                // 'picture_1' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
