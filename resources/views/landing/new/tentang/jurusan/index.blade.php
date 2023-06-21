@extends('landing.new.layouts.app')

@section('content')
    {{-- <div class="max-h-[30rem] bg-slate-100 py-8 px-10">
        <div class="container mx-auto flex flex-col-reverse gap-8 md:gap-0 md:flex-row items-center justify-between">
            <div class="flex-1 h-full mt-4 md:mt-0">
                <h1 class="text-xl text-center md:text-left md:text-xl font-bold text-slate-800">Tentang</h1>
                <p class="text-sm mt-4 text-center md:text-left md:text-base text-slate-800">Profil Sekolah</p>
            </div>
            <div class="flex-1 flex items-center justify-center">
                <img src="../../dist/assets/img/logo/logo-smk7.png" alt=""
                    class="w-[150px]  h-[150px] md:w-[210px] md:h-[210px]">
            </div>
        </div>
    </div>
    <div class="px-10 pb-10 ">
        <div class="container mt-8">
            <div class="flex flex-col gap-4">
                <h1 class="font-semibold text-xl md:text-xl">Selayang Pandang</h1>
                <div class="card p-8 shadow-lg rounded bg-slate-50 border border-gray-200">
                    <p>SMKN 7 JEMBER adalah Sekolah Menengah Kejuruan yang terletak di jalan PB.Sudirman No 16 Jatiroto
                        Lor,.
                        Sekolah ini berdiri pada tahun 2007, memang sekolah ini terletak di paling ujung barat Kabupaten
                        Jember,
                        tetapi kelengkapan praktikum sekolah ini tidak kalah dengan SMK lainnya, mengingat umurnya yang
                        masih
                        seumur jagung, sekolah ini juga cukup berprestasi, pasalnya SMK ini pernah meraih juara 2 LKS
                        se-kabupaten
                        Jember di kejuruan Teknik Kendaraan Ringan (TKR) dan juara 3 di kejuruan Teknik Komputer dan
                        Jaringan
                        (TKJ). SMK ini juga mengeluarkan tim Paskibra dalam peringatan HUT RI setiap tahunnya.</p>
                </div>
                <div class="flex flex-col gap-4 pb-4">
                    <h1 class="font-semibold text-xl md:text-xl pt-4">Sambutan Kepala Sekolah</h1>
                    <div class="flex flex-col gap-4 md:flex-row">
                        <div
                            class="card p-8 shadow-lg rounded bg-slate-50 border border-gray-200 w-full flex flex-col-reverse md:flex-row gap-4">
                            <div class="flex-1">
                                <p>"Puji syukur kepada Allah S.W.T patutlah senantiasa kita panjatkan karena limpahan
                                    rahmat-Nya tidak berhenti sampai saat ini. Redaksi SMEKTUBERSMART patut merasa bangga
                                    karena masih bisa tetap eksis terbit untuk kedua kalinya. Banyak hal yang berubah
                                    tentunya, tapi kehadiran Web Profil SMEKTUSMART SMK Negeri 7 Jember bisa menjadi bukti
                                    dan gambaran bagi kami dan pembaca sekalian bahwa semangat dan optimisme masih “menyala”
                                    di tim redaksi SMEKTUBERSMART ini dan SMK Negeri 7 Jember dalam upaya senantiasa
                                    mencerdaskan kehidupan bangsa." Nanda Wiratama M.F, S.Pd., M.Pd (Kepala Sekolah SMKN 7
                                    Jember)"</p>
                            </div>
                            <div class="flex flex-row justify-center md:justify-end">
                                <img src="https://i.pinimg.com/564x/a1/7c/73/a17c73754dcad3486a323a2e8b693e18.jpg"
                                    alt="" class="w-[200px] h-fit">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="flex flex-col gap-4 pb-4">
                    <h1 class="font-semibold text-xl md:text-xl pt-4">Visi dan Misi</h1>
                    <div class="flex flex-col gap-4 md:flex-row">
                        <div
                            class="card p-8 shadow-lg rounded bg-slate-50 border border-gray-200 w-full flex flex-col gap-4">
                            <h1 class="font-bold text-xl">Visi</h1>
                            <p>Terwujudnya tamatan yang berwawasan iptek dan imtaq menuju manusia yang berkepribadian bangsa
                                Indonesia serta berjiwa wirausaha yang berazaskan Pancasila</p>
                        </div>
                        <div
                            class="card p-8 shadow-lg rounded bg-slate-50 border border-gray-200 w-full flex flex-col gap-4">
                            <h1 class="font-bold text-xl">Misi</h1>
                            <ul class="list-disc pl-4">
                                <li>Membentuk sumber daya manusia yang siap bekerja yang didasari rasa Ikhlas, Iman dan
                                    Taqwa.</li>
                                <li>Membentuk dan membangun sumber daya manusia yang bermoral dan berjiwa wirausaha.</li>
                                <li>Menyiapkan tamatan yang beretos kerja tinggi, ulet dan siap bersaing di dunia kerja.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
    <div class="max-h-[30rem] bg-slate-100 py-8 px-10">
      <div class="container mx-auto flex flex-col-reverse gap-8 md:gap-0 md:flex-row items-center justify-between">
        <div class="flex-1 h-full mt-4 md:mt-0">
          <h1 class="text-xl text-center md:text-left md:text-xl font-bold text-slate-800">Tentang</h1>
          <p class="text-sm mt-4 text-center md:text-left md:text-base text-slate-800">Daftar Jurusan</p>
        </div>
        <div class="flex-1 flex items-center justify-center">
          {{-- <img src="{{ getAsset('assets\images\logo\logo-smk7.png') }}" alt=""
            class="w-[150px]  h-[150px] md:w-[210px] md:h-[210px]"> --}}
        </div>
      </div>
    </div>
    <div class="px-10 pb-[20rem]">
      <div class="container mt-8">
        <div class="flex flex-col gap-4">
          <h1 class="font-semibold text-xl md:text-xl">Jurusan</h1>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            
            @foreach($jurusan as $item)
            <div class="card flex flex-row shadow-lg rounded bg-slate-50 border border-gray-200 overflow-hidden">
              <div class="h-full w-[7px] bg-[#007bbd]"></div>
              <div class="p-4">
                <button type="button" class="transition-all ease-in-out duration-200 hover:text-slate-600 bg-none">{{ $item->major_name }}</button>
              </div>
            </div>
            @endforeach

          </div>
          
        </div>
      </div>
    </div>
@endsection
