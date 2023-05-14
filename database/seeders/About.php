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
            'school_name' => 'SMK Negeri 7 Jember',
            'school_accreditation' => 'A',
            'school_history' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, dolore voluptatum, nobis qui necessitatibus inventore sapiente dignissimos itaque distinctio temporibus mollitia deserunt praesentium laboriosam corporis. Ab ducimus dignissimos repellat odio? deserunt praesentium laboriosam corporis. Ab ducimus dignissimos repellat odio? deserunt praesentium laboriosam corporis. Ab ducimus dignissimos repellat odio?',
            'school_slogan' => 'Bersama Membangun Negeri',
            'school_vision' => 'Menjadi sekolah yang unggul dalam prestasi dan berwawasan global',
            'school_mission' => 'Mengembangkan potensi peserta didik secara optimal melalui pendidikan yang berkualitas, berwawasan global, dan berbasis kearifan lokal',
            'school_address' => 'JL. PB. SUDIRMAN NO.16, Jatiroto, Kec. Sumberbaru, Kab. Jember Prov. Jawa Timur',
            'school_phone' => '0331-333333',
            'school_twitter' => 'https://twitter.com',
            'school_email' => 'smkn7jember@sch.id',
            'school_whatsapp' => '081234567890',
            'school_facebook' => 'https://facebook.com',
            'school_instagram' => 'https://instagram.com',
            'school_youtube' => 'https://youtube.com',
            'school_logo' => 'https://i.pinimg.com/564x/1c/2a/fd/1c2afd5df5bc136bfbae9ce51386cd5f.jpg',
            'school_picture_1' => 'https://i.pinimg.com/564x/28/9d/d3/289dd36a4c8863480c2294120eff1d6f.jpg',
            'school_picture_2' => 'https://i.pinimg.com/564x/20/15/62/20156229c3cdc0a377720af5ec74f39f.jpg',
            'school_headmaster_name' => 'Nanda Wiratama Miftakhul Fauzi',
            'school_headmaster_picture' => 'https://i.pinimg.com/564x/b3/4c/66/b34c669ed008ec748520c2ec699a152f.jpg',
            'school_headmaster_quote' => 'Saya berkomitmen untuk mengembangkan sekolah ini menjadi sekolah yang unggul dalam prestasi dan berwawasan global',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
