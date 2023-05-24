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
            'school_history' => 'SMK Negeri 7 Jember adalah Sekolah Kejuruan Unggulan di Jember yang berlokasi di Jl. Randu Agung Jatiroto, Jam Koong, Jatiroto, Kec. Sumberbaru, Kabupaten Jember, Jawa Timur 68156',
            'school_slogan' => 'Smektuber Beraksi',
            'school_vision' => 'Terwujudnya tamatan yang berwawasan iptek dan imtaq menuju manusia yang berkepribadian bangsa indonesia. serta berjiwa wirausaha yang berazaskan pancasila.',
            'school_mission' => '<ul><li>Membentuk sumber daya manusia yang siap bekerja yang didasari rasa Ikhlas, Iman dan Taqwa.</li><li>Membentuk dan membangun sumber daya manusia yang bermoral dan berjiwa wirausaha.</li><li>Menyiapkan tamatan yang beretos kerja tinggi, ulet dan siap bersaing di dunia kerja.</li><li>Menyiapkan tamatan yang mampu mengembangkan bakat/minatnya guna bekal hidup di masyarakat.</li></ul>',
            'school_address' => 'Jl. Randu Agung Jatiroto, Jam Koong, Jatiroto, Kec. Sumberbaru, Kabupaten Jember, Jawa Timur 68156',
            'school_phone' => '031-8292038',
            'school_twitter' => 'https://twitter.com',
            'school_email' => 'smkn7jember@sch.id',
            'school_whatsapp' => '081234567890',
            'school_facebook' => 'https://web.facebook.com/groups/197845240226998',
            'school_instagram' => 'https://www.instagram.com/smkn_7_jember_official/',
            'school_youtube' => 'https://youtube.com',
            'school_headmaster_name' => 'Nanda Wiratama M.F, S.Pd., M.Pd',
            'school_headmaster_quote' => 'Puji syukur kepada Allah S.W.T patutlah senantiasa kita panjatkan karena limpahan rahmat-Nya tidak berhenti sampai saat ini. Redaksi SMEKTUBERSMART patut merasa bangga karena masih bisa tetap eksis terbit untuk kedua kalinya. Banyak hal yang berubah tentunya, tapi kehadiran Web Profil SMEKTUSMART SMK Negeri 7 Jember bisa menjadi bukti dan gambaran bagi kami dan pembaca sekalian bahwa semangat dan optimisme masih “menyala” di tim redaksi SMEKTUBERSMART ini dan SMK Negeri 7 Jember dalam upaya senantiasa mencerdaskan kehidupan bangsa',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
