@extends('layouts.app', ['title' => 'Profil Sekolah'])

@section('content')
    <div id="content" onclick="closeSidebar()">
        <div class="container mx-auto flex flex-col w-full pt-4 px-8 min-h-screen">
            <div class="pb-2 text-slate-100">
                Profil Sekolah
            </div>
            <div class="flex flex-col">
                <div class="">
                    <h1 class="text-2xl laptop:text-4xl text-white font-bold">Profil & Sejarah Sekolah</h1>
                </div>
                {{-- <div class="mt-3">
                    <h5 class=" text-md laptop:text-lg text-white">Selayang Pandang sekolah</h5>
                </div> --}}
            </div>

            <div class="my-8 card bg-white w-full h-auto p-6 drop-shadow-lg">
                <form action="#" class="">
                    <h5 class="text-lg mb-4 font-bold">Profil Umum</h5>
                    <div class="grid grid-cols-1 gap-8 tablet:grid-cols-2 laptop:grid-cols-3 mb-8">
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text">Nama Sekolah</span>
                            </label>
                            <input type="text" placeholder="Nama" class="input input-bordered w-full" />
                        </div>
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text">Email Sekolah</span>
                            </label>
                            <input type="text" placeholder="email@email.com" class="input input-bordered w-full" />
                        </div>
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text">Telepon Sekolah</span>
                            </label>
                            <input type="text" placeholder="ex. 021xxxx" class="input input-bordered w-full" />
                        </div>
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text">Alamat Sekolah</span>
                            </label>
                            <input type="text" placeholder="ex. Jl. Gadjah Mada" class="input input-bordered w-full" />
                        </div>
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text">Akreditasi</span>
                            </label>
                            <input type="text" placeholder="A / B / C" class="input input-bordered w-full" />
                        </div>
                    </div>

                    <h5 class="text-lg mb-4 font-bold">Sosial Media</h5>

                    <div class="grid grid-cols-1 gap-8 tablet:grid-cols-2 laptop:grid-cols-3 mb-8">
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text flex-row flex gap-2 items-center">
                                    <i class="fa-brands fa-square-facebook"></i>
                                    Facebook
                                </span>
                            </label>
                            <input type="text" placeholder="https://www.facebook.com/"
                                class="input input-bordered w-full" />
                        </div>
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text flex-row flex gap-2 items-center">
                                    <i class="fa-brands fa-instagram"></i>
                                    Instagram
                                </span>
                            </label>
                            <input type="text" placeholder="https://www.instagram.com/"
                                class="input input-bordered w-full" />
                        </div>
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text flex-row flex gap-2 items-center">
                                    <i class="fa-brands fa-twitter"></i>
                                    Twitter
                                </span>
                            </label>
                            <input type="text" placeholder="https://www.twitter.com/"
                                class="input input-bordered w-full" />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-8 tablet:grid-cols-2 laptop:grid-cols-2 mb-8">
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text flex-row flex gap-2 items-center">
                                    <i class="fa-brands fa-youtube"></i>
                                    Youtube
                                </span>
                            </label>
                            <input type="text" placeholder="https://www.youtube.com/"
                                class="input input-bordered w-full" />
                        </div>
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text flex-row flex gap-2 items-center">
                                    <i class="fa-brands fa-linkedin"></i>
                                    Linkedin
                                </span>
                            </label>
                            <input type="text" placeholder="https://www.linkedin.com/"
                                class="input input-bordered w-full" />
                        </div>
                    </div>

                    <h5 class="text-lg mb-4 font-bold">Logo Sekolah</h5>
                    <div class="h-[150px] w-[150px] tablet:h-[200px] tablet:w-[200px] my-4">
                        <img src="https://i.pinimg.com/564x/c1/45/d1/c145d1b786d6bbb335cc36ba111cd20c.jpg" alt=""
                            class="w-full h-full object-cover object-center rounded-xl">
                    </div>
                    <input type="file" class="file-input file-input-bordered w-full laptop:w-1/3"
                        accept="image/png, image/jpg, image/jpeg" />
                    <p class="ml-1">File yang didukung : png/jpg/jpeg | Maksimal ukuran : 5MB</p>

                    <h5 class="text-lg mb-4 font-bold mt-8">Sejarah Sekolah</h5>
                    <div class="form-control">
                        <div name="sejarah-sekolah" id="sejarah-sekolah"></div>
                        <textarea name="sejarah" class="border-sky-900 border"></textarea>
                    </div>
                    <div class="form-control w-full my-8 flex flex-row">
                        <button type="button" onclick="replace()" id="btn-submit"
                            class="btn btn-success text-white w-full laptop:w-[100px]">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        // Quill Editor
        var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],
            [{
                'list': 'ordered'
            }, {
                'list': 'bullet'
            }]
        ];
        var quill = new Quill('#sejarah-sekolah', {
            theme: 'snow',
            modules: {
                toolbar: toolbarOptions
            }
        });


        // Form Submit  
        function replace(){
            
        }
    </script>
@endsection
