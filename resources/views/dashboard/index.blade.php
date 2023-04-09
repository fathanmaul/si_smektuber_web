<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('assets/favicon/smk-logo.png') }}" type="image/x-icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-[#E9F0E6]">
    {{-- <div class="min-h-screen flex flex-row bg-[#F0F4F9]">
    <nav
      class="bg-white flex flex-col w-[287px] min-h-screen -ml-[287px] sm:ml-0 md:-ml-[200px] transition-all ease-in-out duration-300">
      <div class="flex flex-col items-center justify-center mt-4">
        <div class="flex flex-row items-center justify-center gap-2">
          <img src="{{ asset('assets/favicon/smk-logo.png') }}" class="w-12" alt="">
          <h1 class="font-bold text-md mt-2">SMKN 7 Jember</h1>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="flex flex-row justify-between items-center mx-8 mt-10">
        <div>
          <h1 class="font-extrabold font-nunito text-2xl">Daftar User</h1>
        </div>
        <div>
          <button
            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            type="button">
            Tambah
          </button>
        </div>
      </div>
      <div class="card py-8 px-4 mt-8 mx-8">
        <div class="overflow-x-auto">
          <table class="w-full overflow-x-scroll">
            <thead>
              <tr>
                <th class="px-4 py-2 md:w-[20px]">No</th>
                <th class="px-4 py-2 text-left">Nama</th>
                <th class="px-4 py-2 text-left">Email</th>
                <th class="px-4 py-2 text-left md:w-[190px]">Region</th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div> --}}
    <div class="min-h-screen flex flex-row">
        {{-- Sidebar Start Here --}}
        <div
            class="sidebar min-h-screen bg-white w-[300px] transition-all ease-in-out duration-300 fixed laptop:static -ml-[300px]">
            <div class="flex flex-col w-full">
                <div class="flex flex-row justify-center py-8 items-center gap-4">
                    <div>
                        <img src="{{ asset('assets/favicon/smk-logo.png') }}" alt="logo" class="w-14">
                    </div>
                    <div class="pt-2">
                        <h1 class="font-bold text-md">SMK Negeri 7</h1>
                        <h1 class="font-bold text-md">Jember</h1>
                    </div>
                </div>
                <div class="">
                    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                        <ul class="space-y-2 font-medium">
                            <li class="mt-[0.2rem]">
                                <a href="#"
                                    class="flex items-center py-4 px-5 text-[1rem] rounded-lg text-white bg-slate-700 duration-200 ease-in-out transition-all hover:bg-slate-700 hover:text-white">
                                    <i class="fa fa-solid fa-gauge"></i>
                                    <span class="ml-4">Dashboard</span>
                                </a>
                            </li>
                            <li class="mt-[0.2rem]">
                                <a href="#"
                                    class="flex items-center py-4 px-5 text-[1rem] rounded-lg text-slate-700 duration-200 ease-in-out transition-all hover:bg-slate-700 hover:text-white">
                                    <i class="fa fa-solid fa-school-flag"></i>
                                    <span class="ml-4">Profil Sekolah</span>
                                </a>
                            </li>
                            <li class="mt-[0.2rem]">
                                <a href="#"
                                    class="flex items-center py-4 px-5 text-[1rem] rounded-lg text-slate-700 duration-200 ease-in-out transition-all hover:bg-slate-700 hover:text-white">
                                    <i class="fa fa-solid fa-book"></i>
                                    <span class="ml-4">Jurusan</span>
                                </a>
                            </li>
                            <li class="mt-[0.2rem]">
                                <a href="#"
                                    class="flex items-center py-4 px-5 text-[1rem] rounded-lg text-slate-700 duration-200 ease-in-out transition-all hover:bg-slate-700 hover:text-white">
                                    <i class="fa fa-solid fa-futbol"></i>
                                    <span class="ml-4">Ekstrakurikuler</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    {{-- <ul class="flex flex-col mx-4 mt-2">
                        <li class="mt-[0.2rem]">
                            <a href="#"
                                class="flex items-center py-4 px-6 gap-4 bg-slate-700 rounded-xl text-white mt-[0.2rem]">
                                <i class="fa-solid fa-gauge text-lg"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="mt-[0.2rem]">
                            <a href="#"
                                class="flex items-center py-4 px-6 gap-4 rounded-xl text-slate-700 mt-[0.2rem] hover:bg-slate-700 hover:text-white duration-300 ease-in-out transition-all">
                                <i class="fa-solid fa-school text-md"></i>
                                <span>Profil Sekolah</span>
                            </a>
                        </li>
                        <li class="mt-[0.2rem]">
                            <a href="#"
                                class="flex items-center py-4 px-6 gap-4 rounded-xl text-slate-700 mt-[0.2rem] hover:bg-slate-700 hover:text-white duration-300 ease-in-out transition-all">
                                <i class="fa-solid fa-box-archive text-lg"></i>
                                <span>Data Master</span>
                            </a>

                        </li>
                    </ul> --}}
                </div>


            </div>
        </div>
        {{-- Main Content Start Here --}}
        <div class="bg-[#007AC7] w-full absolute h-[19rem] -z-10">

        </div>
        <div class="min-h-full w-full flex flex-col overflow-y-auto px-8">
            <header class="flex flex-row items-center justify-between w-full h-20">
                <div class="text-white" id="btnOpen">
                    <span>
                        <i class="fa fa-solid fa-bars text-lg"></i>
                    </span>
                </div>
                <div class="flex flex-row items-center">
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                        class="text-white hover:text-slate-100 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center"
                        type="button">{{ 'user' }} <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profil
                                    Saya</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-red-200 text-red-600 dark:hover:bg-gray-600 dark:hover:text-white">Keluar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
            <div class="mt-4 container">
                <div class="flex flex-row justify-between items-center">
                    <div class="flex flex-col">
                        <h1 class="text-4xl font-bold text-white">Halo, Fathan!</h1>
                        <h4 class="mt-2 text-white">Selamat Datang di Sistem Informasi SMK Negeri 7 Jember</h4>
                    </div>
                    <div class="flex flex-col justify-end">
                        <h1 class="text-xl font-bold text-end text-white">Tahun Ajaran</h1>
                        <h4 class="mt-2 text-white text-end">2023/2024</h4>
                    </div>
                </div>
                <div class="grid laptop:grid-cols-3 mt-8">
                    <div class="w-full py-4 px-0 tablet:px-4 laptop:px-0 laptop:py-0 laptop:w-[380px]">
                        <div class="p-8 bg-white rounded shadow-md">
                            <h2 class="text-2xl font-bold text-gray-800">Tahun Ajaran</h2>
                            <p class="text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur
                                deserunt
                                quas repellat facere dolor blanditiis tenetur quibusdam corporis quaerat. Impedit,
                                repellendus!
                                Delectus et illum eum ipsa magni? Facilis, molestiae est!</p>
                        </div>
                    </div>
                    <div class="w-full py-4 px-0 tablet:px-4 laptop:px-0 laptop:py-0 laptop:w-[380px]">
                        <div class="p-8 bg-white rounded shadow-md">
                            <h2 class="text-2xl font-bold text-gray-800">Jurusan</h2>
                            <p class="text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur
                                deserunt
                                quas repellat facere dolor blanditiis tenetur quibusdam corporis quaerat. Impedit,
                                repellendus!
                                Delectus et illum eum ipsa magni? Facilis, molestiae est!</p>
                        </div>
                    </div>
                    <div class="w-full py-4 px-0 tablet:px-4 laptop:px-0 laptop:py-0 laptop:w-[380px]">
                        <div class="p-8 bg-white rounded shadow-md">
                            <h2 class="text-2xl font-bold text-gray-800">Card Title</h2>
                            <p class="text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur
                                deserunt
                                quas repellat facere dolor blanditiis tenetur quibusdam corporis quaerat. Impedit,
                                repellendus!
                                Delectus et illum eum ipsa magni? Facilis, molestiae est!</p>
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                  <h1 class="text-3xl font-bold text-slate-800">Informasi Sekolah</h1>
                  <h1 class="text-xl mt-6 font-bold text-slate-800">Tentang</h1>
                </div>
                <div class="mt-8">
                  <div class="">
                    <img src="https://i.pinimg.com/564x/91/8b/6f/918b6f221929a56b00bbaa7632668a0d.jpg" alt="" class="laptop:float-left laptop:w-40 float-none w-full mr-4 mb-4">
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem necessitatibus quibusdam, blanditiis accusantium iusto fugit dolor porro consequuntur culpa alias ipsam maxime quos vel quidem sapiente ipsa qui nemo illo impedit praesentium excepturi. Ut autem inventore facere consequatur quasi, facilis sunt tempora consequuntur. Dolores cum hic amet culpa. Aut iusto saepe laudantium, voluptatem, id in sunt voluptatum excepturi nobis nesciunt minima voluptates. Harum illo animi dolorem ut voluptates veniam necessitatibus totam itaque minus aspernatur non, natus consectetur magnam provident rerum nemo cum voluptatum qui? Iste in laudantium quibusdam, accusamus voluptatum voluptatibus, suscipit tenetur aut, corporis delectus officiis eligendi corrupti explicabo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi atque iusto adipisci quos sed? Libero doloribus odio deleniti, corrupti dolorem nam cumque ipsa aliquid ipsum reiciendis illum nisi harum distinctio nulla, in commodi dolores impedit magnam repudiandae ipsam iste? Aspernatur quis quasi magnam, quo nisi dolor perferendis harum veniam modi ex aliquid rem, iusto ea. Esse unde blanditiis dolorum quas, temporibus tempora deleniti quae sequi quis deserunt voluptas. Quidem, et laboriosam nobis quos fugiat in saepe vero iure, cupiditate ipsam ratione distinctio magni perferendis perspiciatis doloribus natus asperiores sunt aut nisi fugit. Magni nulla veritatis fugit facilis. Voluptates natus modi non repellat, sequi fuga et est ipsam libero minus eligendi numquam sapiente ducimus quasi provident, error accusantium assumenda ratione rerum quisquam vel architecto laborum? Officia nesciunt aperiam quo! Dolore, repellat aspernatur ut enim optio voluptatem cum quibusdam dicta quidem quasi labore voluptate, aperiam in adipisci! Quis quae aperiam, itaque velit molestiae saepe! Necessitatibus, rerum totam aut quis facilis quibusdam, accusamus officia perspiciatis vel odit pariatur earum repellendus esse sequi qui! Quibusdam corrupti, repellendus amet rem suscipit perspiciatis, quas natus porro quam necessitatibus culpa, officia aperiam reprehenderit? Minima aut non nisi neque numquam adipisci asperiores praesentium est magni mollitia, animi nihil eos corrupti, nostrum laudantium ad eaque illo fugit voluptates esse quas eius sunt quis sequi. Dignissimos, assumenda at? Numquam beatae modi commodi quis reprehenderit sint ipsa porro officia eos nulla pariatur facere quos perspiciatis, voluptatibus aut praesentium nesciunt nihil sit possimus error animi cumque assumenda veritatis. Eaque dignissimos facilis temporibus voluptatem iusto molestiae asperiores magnam cupiditate dicta minima optio impedit omnis aperiam natus, maiores quos eum tempora ratione magni praesentium voluptatibus alias modi ab. Atque quisquam sint repellat sed distinctio esse id quidem excepturi iste maiores perferendis, quod saepe doloremque nam molestias inventore nisi dolorum iure suscipit minus sequi possimus accusamus harum! Repudiandae, laudantium? Maxime ipsa mollitia velit hic optio facere ex magnam similique dolore est! Soluta magni delectus unde ullam molestiae voluptatum animi accusamus pariatur incidunt hic praesentium, illum inventore qui sed aliquam necessitatibus debitis deleniti tempore optio totam possimus! Rem temporibus corrupti pariatur neque minima reprehenderit perferendis? Dolorum ex voluptas commodi explicabo voluptatem aliquam nesciunt laudantium earum omnis atque, culpa libero labore distinctio corrupti maxime. Velit voluptate a repellat numquam, optio accusamus eaque, incidunt nihil veniam nemo, ipsum nulla vel voluptatibus impedit sequi neque praesentium deleniti facere ea. Impedit nisi aliquid voluptatem quia odio deleniti facere? Libero unde architecto esse ipsum atque incidunt hic ipsa sint ea minus sequi soluta eveniet molestiae assumenda officia sed dolore harum, odio deserunt! Maxime qui, quos, voluptate ratione, distinctio voluptatibus repellendus explicabo enim nesciunt est rerum neque repellat! Quisquam quas animi dolorum sit culpa deleniti eum provident, quia dolor, tenetur, laborum facilis praesentium dolore facere iste nesciunt beatae aspernatur perspiciatis! Quos labore eius voluptatibus dolore, eaque nesciunt tenetur repellat maxime totam repellendus saepe impedit beatae. Quidem omnis earum et, veniam illo laudantium quis quo natus autem, aliquid blanditiis excepturi eius laborum sed deleniti! Dolore consequatur dignissimos quibusdam doloremque reprehenderit totam itaque obcaecati laboriosam culpa asperiores? Dolorem repellat enim nulla sequi, consequatur maiores quisquam officiis natus in provident ex nesciunt facilis at voluptatibus molestias adipisci atque! Placeat, enim debitis? Fugit eius rerum at vel, consequuntur accusantium eveniet minima recusandae quae quos autem delectus iure asperiores enim ipsam doloremque labore quisquam quas officia id incidunt laudantium dolor. Magni fuga expedita ratione asperiores numquam, tenetur beatae animi officia aliquid ea quibusdam quasi cupiditate explicabo enim a recusandae esse suscipit! Doloribus ipsum illum et delectus nisi quae aspernatur nesciunt perspiciatis. Velit illo debitis ipsam dolor optio enim exercitationem fugiat, id fugit totam, iste reiciendis ut minima quis, libero possimus qui sapiente sed? Nam labore sit quod praesentium, nisi asperiores hic quos fugit, saepe doloremque, ipsa fuga. Eos quia in quis atque modi ducimus consequatur eum voluptatibus repellendus recusandae repellat odio sit, eius ullam maxime animi architecto cumque id ipsum expedita omnis doloremque. Nihil accusamus aliquid explicabo hic, ipsum est id? Facere at sunt esse excepturi magni. Eius, modi aliquid minus, amet facere alias dolorum quibusdam, at deleniti fuga architecto consequatur omnis voluptatem eveniet! Sit aperiam aliquam accusantium ab consequatur quis mollitia! Atque tenetur, minima quo cum autem itaque dolor magnam quas voluptatem ipsa facere amet provident iste tempore perferendis fuga adipisci quam optio dolorem ullam vero dicta. Quia quibusdam illo possimus harum facere hic totam explicabo atque eius molestias, quaerat ex reiciendis expedita, alias nihil consequuntur debitis sunt, quas nobis? Officiis facilis autem, voluptatum itaque voluptatem provident est quaerat vel dignissimos, voluptate quibusdam et molestiae dolorum aperiam veniam commodi fugit consequuntur sint rem culpa animi illo, a labore repellat. Illo, ipsa maxime, consequuntur odit quae doloribus nostrum nesciunt delectus iusto, fugiat porro aliquam. Atque hic soluta ipsum repudiandae sint quaerat, quod ea voluptatum aperiam ipsam mollitia voluptates molestiae nisi, perspiciatis expedita quos omnis repellat maxime nihil eligendi cumque explicabo voluptate tenetur. Illum doloremque nesciunt quo. Esse magnam dolorum ex rerum temporibus recusandae aliquid voluptates quod. Odit eos, blanditiis incidunt laboriosam nobis alias doloribus, totam, atque tenetur accusamus suscipit ullam dolor. Sit ullam a accusantium sunt voluptates inventore quidem necessitatibus praesentium. Laboriosam nisi dignissimos ratione qui suscipit sapiente. Quisquam omnis, officia deleniti nulla obcaecati iusto natus totam error doloremque sit nemo recusandae ex. Illo deleniti, reiciendis libero cum sint atque quo minima hic quidem ullam, cumque, exercitationem earum minus in magnam eveniet maxime nesciunt distinctio sunt ipsa nisi! At mollitia obcaecati ea corporis, ex nam reprehenderit commodi magnam totam placeat nesciunt aspernatur dolorem recusandae odio excepturi expedita ipsam quisquam doloribus. Aut, dolores, vero dicta repellendus quis debitis quae accusamus molestiae ab omnis perferendis quaerat? Qui cumque, saepe facilis placeat quaerat aliquam blanditiis libero temporibus sit, ratione debitis eos cum natus deleniti vel praesentium consectetur repellendus officiis obcaecati est veniam! Distinctio ut recusandae sequi eos. Eius excepturi ipsum in, doloremque dicta quos recusandae architecto ducimus minima accusantium hic beatae neque dolorum nobis atque quaerat qui pariatur, obcaecati sapiente iure fuga consectetur. Recusandae, eveniet! Ut alias officia esse nesciunt sapiente illum non voluptas, ex odio dignissimos dolores ipsam pariatur!</p>
                  </div>


                  <div class="flex float-left mt-8">
                    <div class="w-1/2">
                      <div class="flex flex-col">
                        <h1 class="text-6xl font-bold text-slate-800">Visi</h1>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                          voluptate
                          quae
                          quod
                          quibusdam, voluptates, quidem, voluptatibus quos voluptatum quia quas quas. Quisquam
                          voluptate
                          quae
                          quod
                          quibusdam, voluptates, quidem, voluptatibus quos voluptatum quia quas quas.</p>
                      </div>
                    </div>
                    <div class="w-1/2">
                      <div class="flex flex-col">
                        <h1 class="text-6xl font-bold text-slate-800">Misi</h1>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                          voluptate
                          quae
                          quod
                          quibusdam, voluptates, quidem, voluptatibus quos voluptatum quia quas quas. Quisquam
                          voluptate
                          quae
                          quod
                          quibusdam, voluptates, quidem, voluptatibus quos voluptatum quia quas quas.</p>
                      </div>
                    </div>
                  </div>
                </div>

            </div>


        </div>
    </div>




</body>

<script src="https://kit.fontawesome.com/9aa9764949.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

</html>
