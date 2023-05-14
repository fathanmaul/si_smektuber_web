<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Major;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use PhpParser\Node\Stmt\TryCatch;

class SekolahController extends Controller
{
    public function index()
    {
        $dataProfil = About::first(['school_name', 'school_address', 'school_accreditation', 'school_slogan', 'school_history']);
        // dd($dataProfil);
        // echo $dataProfil;
        // return view('admin.ProfilSekolah.umum.index', ['profil' => $dataProfil]);
        return view('admin.ProfilSekolah.new.umum-profil', ['profil' => $dataProfil]);
    }

    public function store(Request $request)
    {

        // return Response::json($request->all());

        // return 'Test';
        $request->validate([
            'school_name' => 'required|max:120',
            'school_address' => 'required|max:255',
            'school_accreditation' => 'required|max:1|alpha',
            'school_slogan' => 'required|max:255',
            'school_history' => 'required|max:1000',
        ], [
            'school_name.required' => 'Harap isi Nama Sekolah',
            'school_name.max' => 'Nama Sekolah terlalu panjang!',
            'school_address.required' => 'Harap isi Alamat Sekolah!',
            'school_address.max' => 'Alamat Sekolah terlalu panjang!',
            'school_accreditation.required' => 'Harap isi Akreditasi Sekolah!',
            'school_accreditation.max' => 'Harap isi Akreditasi Sekolah dengan benar!',
            'school_accreditation.alpha' => 'Harap isi Akreditasi Sekolah dengan benar!',
            'school_slogan.required' => 'Harap isi Slogan Sekolah!',
            'school_history.required' => 'Harap isi Sejarah Sekolah!',
            'school_history.max' => 'Sejarah Sekolah terlalu panjang!'
        ]);

        $arrayData = [
            'school_name' => $request->school_name,
            'school_address' => $request->school_address,
            'school_accreditation' => $request->school_accreditation,
            'school_slogan' => $request->school_slogan,
            'school_history' => $request->school_history,
        ];
        // return response()->json($arrayData);
        $id = 1;
        try {
            About::where('id', $id)->update([
                'school_name' => $arrayData['school_name'],
                'school_address' => $arrayData['school_address'],
                'school_accreditation' => $arrayData['school_accreditation'],
                'school_slogan' => $arrayData['school_slogan'],
                'school_history' => $arrayData['school_history'],
            ]);

            return redirect()->route('sekolah.umum')->with('flash', [
                'type' => 'success',
                'message' => 'Informasi Profil berhasil diubah!',
            ]);
        } catch (\Throwable $th) {
            return redirect()->route('sekolah.umum')->with('flash', [
                'type' => 'danger',
                'message' => 'Sepertinya ada kesalahan!',
            ]);
        }
    }

    public function kontak()
    {
        $dataKontak = About::first(['school_phone', 'school_email', 'school_whatsapp', 'school_facebook', 'school_instagram', 'school_twitter', 'school_youtube']);
        // return view('admin.ProfilSekolah.umum.kontak.index', ['kontak' => $dataKontak]);
        return view('admin.ProfilSekolah.new.umum-kontak', ['kontak' => $dataKontak]);
    }

    public function kontakPut(Request $request)
    {
        $request->validate([
            'school_email' => 'required|email',
            'school_phone' => 'required|max:18',
            'school_whatsapp' => 'max:18',
            'school_facebook' => [
                'url',
            ],
            'school_instagram' => [
                'url',
            ],
            'school_twitter' => [
                'url',
            ],
            'school_youtube' => [
                'url'
            ]
        ], [
            'school_email.required' => 'Harap isi Email Sekolah!',
            'school_email.email' => 'Harap isi Email Sekolah dengan benar!',
            'school_phone.required' => 'Harap isi Nomor Telepon Sekolah!',
            'school_phone.max' => 'Nomor Telepon Sekolah terlalu panjang!',
            'school_whatsapp.max' => 'Nomor Whatsapp Sekolah terlalu panjang!',
            'school_facebook.url' => 'Masukkan URL Facebook yang valid! ex. https://www.facebook.com/{nama_akun}',
            'school_instagram.url' => 'Masukkan URL Instagram yang valid! ex. https://www.instagram.com/{nama_akun}',
            'school_youtube.url' => 'Masukkan URL Youtube yang valid! ex. https://www.youtube.com/@VestiaZeta',
        ]);

        $data = [
            'school_email' => $request->school_email,
            'school_phone' => $request->school_phone,
            'school_whatsapp' => $request->school_whatsapp,
            'school_facebook' => $request->school_facebook,
            'school_instagram' => $request->school_instagram,
            'school_twitter' => $request->school_twitter,
            'school_youtube' => $request->school_youtube,
        ];

        try {
            About::where('id', 1)->update([
                'school_email' => $data['school_email'],
                'school_phone' => $data['school_phone'],
                'school_whatsapp' => $data['school_whatsapp'],
                'school_facebook' => $data['school_facebook'],
                'school_instagram' => $data['school_instagram'],
                'school_twitter' => $data['school_twitter'],
                'school_youtube' => $data['school_youtube'],
            ]);

            return redirect()->route('sekolah.kontak')->with('flash', [
                'type' => 'success',
                'message' => 'Informasi Kontak berhasil diubah!',
            ]);
        } catch (\Throwable $th) {
            return redirect()->route('sekolah.kontak')->with('flash', [
                'type' => 'danger',
                'message' => 'Sepertinya ada kesalahan!',
            ]);
        }
    }

    public function namaShow()
    {
        return view('admin.ProfilSekolah.NamaSekolah.index');
    }

    public function sejarah()
    {
        $dataProfil = About::first();
        return view('admin.ProfilSekolah.sejarah.index', ['profil' => $dataProfil]);
    }

    public function visiMisi()
    {
        $dataVisiMisi = About::first(['school_vision', 'school_mission']);
        return view('admin.ProfilSekolah.new.visi-misi', ['visiMisi' => $dataVisiMisi]);
    }

    public function visiMisiPut(Request $request)
    {
        $request->validate([
            'school_vision' => 'required|max:255',
            'school_mission' => 'required|max:1000'
        ], [
            'school_vision.required' => 'Harap isi Visi Sekolah!',
            'school_vision.max' => 'Visi Sekolah terlalu panjang!',
            'school_mission.required' => 'Harap isi Misi Sekolah!',
            'school_mission.max' => 'Misi Sekolah terlalu panjang!',
        ]);

        try {
            About::where('id', 1)->update([
                'school_vision' => $request->school_vision,
                'school_mission' => $request->school_mission,
            ]);

            return redirect()->route('sekolah.visi-misi')->with('flash', [
                'type' => 'success',
                'message' => 'Visi dan Misi Sekolah berhasil diubah!',
            ]);
        } catch (\Throwable $th) {
            return redirect()->route('sekolah.visi-misi')->with('flash', [
                'type' => 'danger',
                'message' => 'Sepertinya ada kesalahan!',
            ]);
        }
    }

    public function kepalaSekolah()
    {
        $kepala_sekolah = About::first(['school_headmaster_name', 'school_headmaster_quote', 'school_headmaster_picture']);
        return view('admin.ProfilSekolah.new.kepala-sekolah', compact('kepala_sekolah'));
    }

    public function kepalaSekolahPut(Request $request)
    {
        $data = About::first(['school_headmaster_picture']);


        if ($data->school_headmaster_picture == null) {
            $request->validate([
                'school_headmaster_name' => 'required|max:70',
                'school_headmaster_quote' => 'required|max:255',
                'school_headmaster_picture' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            ], [
                'school_headmaster_name.required' => 'Harap isi Nama Kepala Sekolah!',
                'school_headmaster_name.max' => 'Nama Kepala Sekolah terlalu panjang!',
                'school_headmaster_quote.max' => 'Kutipan Kepala Sekolah terlalu panjang!',
                'school_headmaster_quote.required' => 'Harap isi Kutipan Kepala Sekolah!',
                'school_headmaster_picture.image' => 'Harap isi Foto Kepala Sekolah dengan benar!',
                'school_headmaster_picture.mimes' => 'Format yang didukung hanya .jpeg, .png, .jpg!',
                'school_headmaster_picture.max' => 'Ukuran Foto Kepala Sekolah terlalu besar!',
                'school_headmaster_picture.required' => 'Harap isi Foto Kepala Sekolah!',
            ]);

            try {
                $file = $request->file('school_headmaster_picture');
                $path = public_path('storage\\');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '_school_headmaster_picture' . '.' . $extension;
                $file->storeAs('informasi-sekolah/kepala-sekolah/photo', $filename);

                About::where('id', 1)->update([
                    'school_headmaster_name' => $request->school_headmaster_name,
                    'school_headmaster_quote' => $request->school_headmaster_quote,
                    'school_headmaster_picture' => 'informasi-sekolah/kepala-sekolah/photo/' . $filename,
                ]);
                return redirect()->route('sekolah.kepala-sekolah')->with('flash', [
                    'type' => 'success',
                    'message' => 'Kepala Sekolah berhasil disimpan!',
                ]);
            } catch (\Throwable $th) {
                return redirect()->route('sekolah.kepala-sekolah')->with('flash', [
                    'type' => 'danger',
                    'message' => 'Sepertinya ada kesalahan!',
                ]);
            }
        } else {
            $request->validate([
                'school_headmaster_name' => 'required|max:70',
                'school_headmaster_quote' => 'required|max:255',
                'school_headmaster_picture' => 'image|mimes:jpeg,png,jpg|max:1024',
            ], [
                'school_headmaster_name.required' => 'Harap isi Nama Kepala Sekolah!',
                'school_headmaster_name.max' => 'Nama Kepala Sekolah terlalu panjang!',
                'school_headmaster_quote.max' => 'Kutipan Kepala Sekolah terlalu panjang!',
                'school_headmaster_quote.required' => 'Harap isi Kutipan Kepala Sekolah!',
                'school_headmaster_picture.image' => 'Harap isi Foto Kepala Sekolah dengan benar!',
                'school_headmaster_picture.mimes' => 'Format yang didukung hanya .jpeg, .png, .jpg!',
                'school_headmaster_picture.max' => 'Ukuran Foto Kepala Sekolah terlalu besar!',
            ]);

            if ($request->file('school_headmaster_picture')) {
                $file = $request->file('school_headmaster_picture');
                $path = public_path('storage\\');
                if (File::exists($path . $data->school_headmaster_picture)) {
                    File::delete($path . $data->school_headmaster_picture);
                }
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '_school_headmaster_picture' . '.' . $extension;
                $file->storeAs('informasi-sekolah/kepala-sekolah/photo', $filename);

                About::where('id', 1)->update([
                    'school_headmaster_name' => $request->school_headmaster_name,
                    'school_headmaster_quote' => $request->school_headmaster_quote,
                    'school_headmaster_picture' => 'informasi-sekolah/kepala-sekolah/photo/' . $filename,
                ]);
                return redirect()->route('sekolah.kepala-sekolah')->with('flash', [
                    'type' => 'success',
                    'message' => 'Kepala Sekolah berhasil diubah!',
                ]);
            }else{
                About::where('id', 1)->update([
                    'school_headmaster_name' => $request->school_headmaster_name,
                    'school_headmaster_quote' => $request->school_headmaster_quote,
                ]);
                return redirect()->route('sekolah.kepala-sekolah')->with('flash', [
                    'type' => 'success',
                    'message' => 'Kepala Sekolah berhasil diubah!',
                ]);
            }
        }
        // $fileSize = $request->file('school_headmaster_picture')->getSize();


    }


    public function prestasiSekolah()
    {
        return view('admin.ProfilSekolah.prestasi.index');
    }
}
