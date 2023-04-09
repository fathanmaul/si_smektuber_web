<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class About extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\About::create([
            'name' => 'SMK Negeri 7 Jember',
            'vission' => 'Menjadi sekolah yang unggul dalam prestasi dan berwawasan global',
            'mission' => 'Mengembangkan potensi peserta didik secara optimal melalui pendidikan yang berkualitas, berwawasan global, dan berbasis kearifan lokal',
            'headmaster_name' => 'Nanda Wiratama Miftakhul Fauzi',
            'headmaster_photo' => 'https://picsum.photos/200/300',
            'headmaster_quote' => 'Saya berkomitmen untuk mengembangkan sekolah ini menjadi sekolah yang unggul dalam prestasi dan berwawasan global',
            'headmaster_description' => 'Saya berkomitmen untuk mengembangkan sekolah ini menjadi sekolah yang unggul dalam prestasi dan berwawasan global',
            'accreditation' => 'A',
            'phone' => '0331-333333',
            'address' => 'JL. PB. SUDIRMAN NO.16, Jatiroto, Kec. Sumberbaru, Kab. Jember Prov. Jawa Timur',
            'logo' => 'https://picsum.photos/200/300',
            'favicon' => 'https://picsum.photos/200/300',
            'school_description' => '',
            'school_photo' => 'https://picsum.photos/200/300',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
