<?php

namespace Database\Seeders;

use App\Models\Extracurricular as ModelsExtracurricular;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Extracurricular extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $extra = [
            [
                'name' => 'Pramuka',
                'desc' => 'Organisasi pendidikan nonformal yang menyelenggarakan pendidikan kepanduan yang dilaksanakan di Indonesia. Kata Pramuka merupakan singkatan dari Praja Muda Karana, yang memiliki arti Orang Muda yang Suka Berkarya.'
            ],
            [
                'name' => 'Futsal',
                'desc' => 'Olah raga yang banyak penggemarnya dan paling merakyat adalah sepak bola. Untuk itu SMK Negeri 7 Jember membantu mengembangkan bakat minat sepak bola khususnya sepakbola dalam lapangan kecil atau lebih dikenal dengan Futsal.'
            ],
            [
                'name' => 'Volly',
                'desc' => 'Permainan olahraga yang dimainkan oleh dua grup berlawanan. Masing-masing grup memiliki enam orang pemain. Terdapat pula variasi permainan bola voli pantai yang masing-masing timnya hanya memiliki dua orang pemain. Olahraga ini dinaungi FIVB sebagai induk organisasi internasional'
            ],
            [
                'name' => 'Karate',
                'desc' => 'Karate merupakan seni bela diri yang lahir di Jepang dengan sedikit pengaruh seni bela diri Cina, di mana hanya bermodalkan tangan kosong tanpa membawa alat atau senjata.
                Dalam perkembangannya, karate lebih dulu berkembang di dunia kemudian masuk ke Indonesia, untuk sejarahnya sebagai berikut. 
                Sejarah Karate Dunia dimulai dari masyarakat umum mengetahui bahwa olahraga karate merupakan seni bela diri yang berasal dari Negeri Sakura, Jepang. Namun, sebenarnya Jepang hanya mengembangkan bela diri tinju dari Negara Cina. Pada abad ke 16 M, olahraga beladiri karate sudah masuk ke Negara Jepang yang saat melalui Pulau Okinawa yang kala itu masih dijajah.'
                
            ],
            [
                'name' => 'Taekwondo',
                'desc' => 'Taekwondo (juga dieja Tae Kwon Do, Taekwon-Do) adalah olah raga bela diri Korea yang paling popular dan juga merupakan olah raga nasional Korea. Senibela diri ini yang paling banyak dimainkan di Olimpiade bahkan tingkat dunia.
                Dalam bahasa Korea, hanja untuk Tae berarti "menendang atau menghancurkan dengan kaki"; Kwon berarti "tinju"; dan Do berarti "jalan" atau "seni". Jadi, Taekwondo dapat diterjemahkan dengan bebas sebagai "senitangan dan kaki" atau "jalan" atau "cara kaki dan kepalan". Seni bela diri dari negeri Ginseng ini memiliki keistimewaan pada jurus-jurus tendangan mematikan.'
            ]
        ];

        // $extra = json_encode($extra);

        
        foreach($extra as $key => $value){
            # code...
                ModelsExtracurricular::insert([
                    'extracurricular_name' => $value['name'],
                    'extracurricular_description' => $value['desc'],
                    // 'extracurricular_logo' => 'https://via.placeholder.com/150',
                    // 'extracurricular_photo_1' => 'https://via.placeholder.com/150',
                    // 'extracurricular_photo_2' => 'https://via.placeholder.com/150',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
        }
    }
}
