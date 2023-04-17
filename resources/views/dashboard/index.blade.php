@extends('layouts/app', ['title' => 'Dashboard'])

@section('content')
    <div class="flex flex-row justify-between items-center">
        <div class="flex flex-col">
            <h1 class="text-3xl font-bold text-white">Halo, Fathan! <span><i
                        class="fa-regular fa-hand-peace"></i></span></h1>
            <h4 class="mt-2 text-white">Selamat Datang di Sistem Informasi SMK Negeri 7 Jember</h4>
        </div>
    </div>

    <div class="mt-12 grid grid-cols-1 gap-4 tablet:grid-cols-2 laptop:grid-cols-3">
        <div class="h-40 w-full bg-white rounded-xl shadow-lg"></div>
        <div class="h-40 w-full bg-white rounded-xl shadow-lg"></div>
        <div class="h-40 w-full bg-white rounded-xl shadow-lg"></div>
    </div>

    <div class="mt-12">
        <h1 class="text-3xl font-bold text-slate-800">Informasi Sekolah</h1>
        <h1 class="text-xl mt-6 font-bold text-slate-800">Tentang</h1>
    </div>
    <div class="mt-8">
        <div class="">
            <div class="w-[400px] h-[400px] float-left mr-5 mb-4">
                <div class="w-full h-full bg-cover bg-center rounded-xl"
                    style="background-image: url('https://i.pinimg.com/564x/19/1d/0b/191d0b904102f08057882bc508071f61.jpg')">
                </div>
            </div>
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem
                necessitatibus quibusdam, blanditiis accusantium iusto fugit dolor porro consequuntur culpa
                alias ipsam maxime quos vel quidem sapiente ipsa qui nemo illo impedit praesentium
                excepturi. Ut autem inventore facere consequatur quasi, facilis sunt tempora consequuntur.
                Dolores cum hic amet culpa. Aut iusto saepe laudantium, voluptatem, id in sunt voluptatum
                excepturi nobis nesciunt minima voluptates. Harum illo animi dolorem ut voluptates veniam
                necessitatibus totam itaque minus aspernatur non, natus consectetur magnam provident rerum
                nemo cum voluptatum qui? Iste in laudantium quibusdam, accusamus voluptatum voluptatibus,
                suscipit tenetur aut, corporis delectus officiis eligendi corrupti explicabo. Lorem ipsum
                dolor sit amet, consectetur adipisicing elit. Commodi atque iusto adipisci quos sed? Libero
                doloribus odio deleniti, corrupti dolorem nam cumque ipsa aliquid ipsum reiciendis illum
                nisi harum distinctio nulla, in commodi dolores impedit magnam repudiandae ipsam iste?
                Aspernatur quis quasi magnam, quo nisi dolor perferendis harum veniam modi ex aliquid rem,
                iusto ea. Esse unde blanditiis dolorum quas, temporibus tempora deleniti quae sequi quis
                deserunt voluptas. Quidem, et laboriosam nobis quos fugiat in saepe vero iure, cupiditate
                ipsam ratione distinctio magni perferendis perspiciatis doloribus natus asperiores sunt aut
                nisi fugit. Magni nulla veritatis fugit facilis. Voluptates natus modi non repellat, sequi
                fuga et est ipsam libero minus eligendi numquam sapiente ducimus quasi provident, error
                accusantium assumenda ratione rerum quisquam vel architecto laborum? Officia nesciunt
                aperiam quo! Dolore, repellat aspernatur ut enim optio voluptatem cum quibusdam dicta quidem
                quasi labore voluptate, aperiam in adipisci! Quis quae aperiam, itaque velit molestiae
                saepe! Necessitatibus, rerum totam aut quis facilis quibusdam, accusamus officia
                perspiciatis vel odit pariatur earum repellendus esse sequi qui! Quibusdam corrupti,
                repellendus amet rem suscipit perspiciatis, quas natus porro quam necessitatibus culpa,
                officia aperiam reprehenderit? Minima aut non nisi neque numquam adipisci asperiores
                praesentium est magni mollitia, animi nihil eos corrupti, nostrum laudantium ad eaque illo
                fugit voluptates esse quas eius sunt quis sequi. Dignissimos, assumenda at? Numquam beatae
                modi commodi quis reprehenderit sint ipsa porro officia eos nulla pariatur facere quos
                perspiciatis, voluptatibus aut praesentium nesciunt nihil sit possimus error animi
                commodi magnam totam placeat nesciunt aspernatur dolorem recusandae odio excepturi expedita
                ipsam quisquam doloribus. Aut, dolores, vero dicta repellendus quis debitis quae accusamus
                molestiae ab omnis perferendis quaerat? Qui cumque, saepe facilis placeat quaerat aliquam
                blanditiis libero temporibus sit, ratione debitis eos cum natus deleniti vel praesentium
                consectetur repellendus officiis obcaecati est veniam! Distinctio ut recusandae sequi eos.
                Eius excepturi ipsum in, doloremque dicta quos recusandae architecto ducimus minima
                accusantium hic beatae neque dolorum nobis atque quaerat qui pariatur, obcaecati sapiente
                iure fuga consectetur. Recusandae, eveniet! Ut alias officia esse nesciunt sapiente illum
                non voluptas, ex odio dignissimos dolores ipsam pariatur!</p>
        </div>




    </div>


    <div class="mt-8">
        <div class="grid grid-cols-1 laptop:grid-cols-2 gap-12">

            <div class=" w-full bg-white rounded-xl shadow-lg p-8">
                <h1 class="text-4xl font-black">Visi</h1>
                <div class="mt-12">
                    <h4 class="text-start">
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, quam. Lorem
                        ipsum dolor sit amet consectetur adipisicing elit. Ullam, modi? "
                    </h4>
                </div>
            </div>
            <div class="w-full bg-white rounded-xl shadow-lg p-8">
                <h1 class="text-4xl font-black">Misi</h1>
                <div class="mt-12">
                    <ul class="list-decimal ml-4">
                        <li class="mb-4">Membentuk sumber daya
                            manusia yang siap bekerja
                            yang didasari rasa Ikhlas,
                            Iman dan Taqwa.</li>
                        <li class="mb-4">Membentuk dan membangun
                            sumber daya manusia yang
                            bermoral dan berjiwa
                            wirausaha.</li>
                        <li class="mb-4">Menyiapkan tamatan yang
                            beretos kerja tinggi, ulet dan
                            siap bersaing di dunia kerja.</li>
                        <li class="mb-4">Menyiapakan tamatan yang
                            mampu mengembangkan
                            bakat/minatnya guna bekal
                            hidup di masyarkat.</li>
                        <li class="mb-4">Membangun insan yang ber-
                            perilaku hidup sehat dan
                            demokratis.</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="mt-8">
        <div class="flex flex-col w-full">
            <div class="mb-5">
                <h1 class="text-4xl font-black text-center">Visi</h1>
                <div class="mt-8">
                    <h4 class="text-center text-lg">
                        “Terwujudnya tamatan yang berwawasan iptek dan imtaq menuju manusia yang
                        berkepribadian bangsa indonesia. serta berjiwa wirausaha yang berazaskan pancasila.“
                    </h4>
                </div>
            </div>
            <div class="mb-5 mt-12 laptop:mx-24">
                <h1 class="text-4xl font-black text-center">Misi</h1>
                <div class="mt-8">
                    <ul class="list-decimal ml-4">
                        <li class="mb-4">Membentuk sumber daya
                            manusia yang siap bekerja
                            yang didasari rasa Ikhlas,
                            Iman dan Taqwa.</li>
                        <li class="mb-4">Membentuk dan membangun
                            sumber daya manusia yang
                            bermoral dan berjiwa
                            wirausaha.</li>
                        <li class="mb-4">Menyiapkan tamatan yang
                            beretos kerja tinggi, ulet dan
                            siap bersaing di dunia kerja.</li>
                        <li class="mb-4">Menyiapakan tamatan yang
                            mampu mengembangkan
                            bakat/minatnya guna bekal
                            hidup di masyarkat.</li>
                        <li class="mb-4">Membangun insan yang ber-
                            perilaku hidup sehat dan
                            demokratis.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection