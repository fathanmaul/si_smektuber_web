<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class EkstrakurikulerController extends Controller
{
    //

    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $extracurricular = Extracurricular::where('extracurricular_name', 'LIKE', '%' . $request->cari . '%')->paginate(10);
            return view('admin.Ekstrakurikuler.new.index', compact('extracurricular'));
            // return $jurusan;
        }
        $extracurricular = Extracurricular::paginate(10);
        return view('admin.Ekstrakurikuler.new.index', compact('extracurricular'));
    }

    public function create()
    {
        return view('admin.Ekstrakurikuler.new.create');
    }

    public function store(Request $request)
    {
        // dd($request->extracurricular_logo);
        $request->validate([
            'extracurricular_name' => 'required|max:255|unique:extracurricular,extracurricular_name',
            'extracurricular_description' => 'required|max:1200',
            'extracurricular_logo' => 'image|mimes:jpeg,png,jpg|max:1024',
            'extracurricular_picture_1' => 'image|mimes:jpeg,png,jpg|max:1024',
        ], [
            'extracurricular_name.required' => 'Nama Ekstrakurikuler tidak boleh kosong!',
            'extracurricular_name.unique' => 'Nama Ekstrakurikuler sudah ada!',
            'extracurricular_name.max' => 'Nama Ekstrakurikuler terlalu panjang!',
            'extracurricular_description.required' => 'Deskripsi Ekstrakurikuler tidak boleh kosong!',
            'extracurricular_description.max' => 'Deskripsi Ekstrakurikuler terlalu panjang!',
            'extracurricular_logo.image' => 'Logo Ekstrakurikuler harus berupa gambar!',
            'extracurricular_logo.mimes' => 'Logo Ekstrakurikuler harus berupa gambar!',
            'extracurricular_logo.max' => 'Logo Ekstrakurikuler terlalu besar!',
            'extracurricular_picture_1.image' => 'Foto Ekstrakurikuler harus berupa gambar!',
            'extracurricular_picture_1.mimes' => 'Foto Ekstrakurikuler harus berupa gambar!',
            'extracurricular_picture_1.max' => 'Foto Ekstrakurikuler terlalu besar!',
        ]);

        $extracurricular_logo = null;
        $extracurricular_picture_1 = null;

        try {
            //code...

            if ($request->hasFile('extracurricular_logo')) {
                $extracurricular_logo = $request->file('extracurricular_logo')->store('extracurricular/extracurricular-logos');
            }
            if ($request->hasFile('extracurricular_picture_1')) {
                $extracurricular_picture_1 = $request->file('extracurricular_picture_1')->store('extracurricular/extracurricular-pictures');
            }

            Extracurricular::insert([
                'extracurricular_name' => $request->extracurricular_name,
                'extracurricular_description' => $request->extracurricular_description,
                'extracurricular_logo' => $extracurricular_logo,
                'extracurricular_photo_1' => $extracurricular_picture_1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return redirect()->route('ekstrakurikuler.index')->with('flash', [
                'type' => 'success',
                'message' => 'Ekstrakurikuler berhasil ditambahkan!'
            ]);
        } catch (\Throwable $th) {
            return redirect()->route('ekstrakurikuler.index')->with('flash', [
                'type' => 'danger',
                'message' => 'Terdapat Kesalahan! | Code : 500'
            ]);
        }
    }

    public function edit($id)
    {
        $extracurricular = Extracurricular::find($id);
        if ($extracurricular == null) {
            return $this->backWithError_1('Ekstrakurikuler tidak ditemukan!');
        }
        return view('admin.Ekstrakurikuler.new.edit', compact('extracurricular'));
    }

    public function put1(Request $request, $id)
    {
        $data = Extracurricular::find($id);
        if ($data == null) {
            return $this->backWithError_1('Ekstrakurikuler tidak ditemukan!');
        }
        $request->validate([
            'extracurricular_name' => 'required|max:255',
            'extracurricular_description' => 'required|max:1200',
            'extracurricular_logo' => 'image|mimes:jpeg,png,jpg|max:1024',
            'extracurricular_picture_1' => 'image|mimes:jpeg,png,jpg|max:1024',
        ], [
            'extracurricular_name.required' => 'Nama Ekstrakurikuler tidak boleh kosong!',
            'extracurricular_name.unique' => 'Nama Ekstrakurikuler sudah ada!',
            'extracurricular_name.max' => 'Nama Ekstrakurikuler terlalu panjang!',
            'extracurricular_description.required' => 'Deskripsi Ekstrakurikuler tidak boleh kosong!',
            'extracurricular_description.max' => 'Deskripsi Ekstrakurikuler terlalu panjang!',
            'extracurricular_logo.image' => 'Logo Ekstrakurikuler harus berupa gambar!',
            'extracurricular_logo.mimes' => 'Logo Ekstrakurikuler harus berupa gambar!',
            'extracurricular_logo.max' => 'Logo Ekstrakurikuler terlalu besar!',
            'extracurricular_picture_1.image' => 'Foto Ekstrakurikuler harus berupa gambar!',
            'extracurricular_picture_1.mimes' => 'Foto Ekstrakurikuler harus berupa gambar!',
            'extracurricular_picture_1.max' => 'Foto Ekstrakurikuler terlalu besar!',
        ]);

        $extracurricular_logo = null;
        $extracurricular_picture_1 = null;
        $extracurricular_picture_2 = null;
        try {
            //code...
            if ($request->file('extracurricular_logo')) {
                if ($data->extracurricular_logo != null) {
                    unlink(public_path('storage/' . $data->extracurricular_logo));
                    $extracurricular_logo = $request->file('extracurricular_logo')->store('extracurricular/extracurricular-logos');
                } else {
                    $extracurricular_logo = $request->file('extracurricular_logo')->store('extracurricular/extracurricular-logos');
                }
            }
            if ($request->file('extracurricular_picture_1')) {
                if ($data->extracurricular_picture_1 != null) {
                    unlink(public_path('storage/' . $data->extracurricular_picture_1));
                    $extracurricular_picture_1 = $request->file('extracurricular_picture_1')->store('extracurricular/extracurricular-pictures');
                } else {
                    $extracurricular_logo = $request->file('extracurricular_logo')->store('extracurricular/extracurricular-pictures');
                }
            }
            if ($request->file('extracurricular_picture_2')) {
                if ($data->extracurricular_picture_2 != null) {
                    unlink(public_path('storage/' . $data->extracurricular_picture_2));
                    $extracurricular_picture_2 = $request->file('extracurricular_picture_2')->store('extracurricular/extracurricular-pictures');
                } else {
                    $extracurricular_picture_2 = $request->file('extracurricular_picture_2')->store('extracurricular/extracurricular-pictures');
                }
            }


            if ($extracurricular_logo != null && $extracurricular_picture_1 != null && $extracurricular_picture_2 != null) {
                Extracurricular::whereId($id)->update([
                    'extracurricular_name' => $request->extracurricular_name,
                    'extracurricular_description' => $request->extracurricular_description,
                    'extracurricular_logo' => $extracurricular_logo,
                    'extracurricular_picture_1' => $extracurricular_picture_1,
                    'extracurricular_picture_2' => $extracurricular_picture_2,
                ]);
                return $this->backWithSuccess_1('Ekstrakurikuler berhasil diubah!');
            } else if ($extracurricular_logo != null && $extracurricular_picture_1 != null) {
                Extracurricular::whereId($id)->update([
                    'extracurricular_name' => $request->extracurricular_name,
                    'extracurricular_description' => $request->extracurricular_description,
                    'extracurricular_logo' => $extracurricular_logo,
                    'extracurricular_picture_1' => $extracurricular_picture_1,
                ]);
                return $this->backWithSuccess_1('Ekstrakurikuler berhasil diubah!');
            } else if ($extracurricular_logo != null && $extracurricular_picture_2 != null) {
                Extracurricular::whereId($id)->update([
                    'extracurricular_name' => $request->extracurricular_name,
                    'extracurricular_description' => $request->extracurricular_description,
                    'extracurricular_logo' => $extracurricular_logo,
                    'extracurricular_picture_2' => $extracurricular_picture_2,
                ]);
                return $this->backWithSuccess_1('Ekstrakurikuler berhasil diubah!');
            } else if ($extracurricular_picture_1 != null && $extracurricular_picture_2 != null) {
                Extracurricular::whereId($id)->update([
                    'extracurricular_name' => $request->extracurricular_name,
                    'extracurricular_description' => $request->extracurricular_description,
                    'extracurricular_picture_1' => $extracurricular_picture_1,
                    'extracurricular_picture_2' => $extracurricular_picture_2,
                ]);
                return $this->backWithSuccess_1('Ekstrakurikuler berhasil diubah!');
            } else if ($extracurricular_logo != null) {
                Extracurricular::whereId($id)->update([
                    'extracurricular_name' => $request->extracurricular_name,
                    'extracurricular_description' => $request->extracurricular_description,
                    'extracurricular_logo' => $extracurricular_logo,
                ]);
                return $this->backWithSuccess_1('Ekstrakurikuler berhasil diubah!');
            } else if ($extracurricular_picture_1 != null) {
                Extracurricular::whereId($id)->update([
                    'extracurricular_name' => $request->extracurricular_name,
                    'extracurricular_description' => $request->extracurricular_description,
                    'extracurricular_picture_1' => $extracurricular_picture_1,
                ]);
                return $this->backWithSuccess_1('Ekstrakurikuler berhasil diubah!');
            } else if ($extracurricular_picture_2 != null) {
                Extracurricular::whereId($id)->update([
                    'extracurricular_name' => $request->extracurricular_name,
                    'extracurricular_description' => $request->extracurricular_description,
                    'extracurricular_picture_2' => $extracurricular_picture_2,
                ]);
                return $this->backWithSuccess_1('Ekstrakurikuler berhasil diubah!');
            } else {
                Extracurricular::whereId($id)->update([
                    'extracurricular_name' => $request->extracurricular_name,
                    'extracurricular_description' => $request->extracurricular_description,
                ]);
                return $this->backWithSuccess_1('Ekstrakurikuler berhasil diubah!');
            }
        } catch (\Throwable $th) {
            return $this->backWithError_1('Terdapat Kesalahan! | Code : 500');
        }
    }

    public function put(Request $request, $id)
    {
        if (!Extracurricular::find($id)) return $this->backWithError_1('Ekstrakurikuler tidak ditemukan!');
        $request->validate([
            'extracurricular_name' => 'required|max:255',
            'extracurricular_description' => 'required|max:1200',
            'extracurricular_logo' => 'image|mimes:jpeg,png,jpg|max:1024',
            'extracurricular_picture_1' => 'image|mimes:jpeg,png,jpg|max:1024',
        ], [
            'extracurricular_name.required' => 'Nama Ekstrakurikuler tidak boleh kosong!',
            'extracurricular_name.unique' => 'Nama Ekstrakurikuler sudah ada!',
            'extracurricular_name.max' => 'Nama Ekstrakurikuler terlalu panjang!',
            'extracurricular_description.required' => 'Deskripsi Ekstrakurikuler tidak boleh kosong!',
            'extracurricular_description.max' => 'Deskripsi Ekstrakurikuler terlalu panjang!',
            'extracurricular_logo.image' => 'Logo Ekstrakurikuler harus berupa gambar!',
            'extracurricular_logo.mimes' => 'Logo Ekstrakurikuler harus berupa gambar!',
            'extracurricular_logo.max' => 'Logo Ekstrakurikuler terlalu besar!',
            'extracurricular_picture_1.image' => 'Foto Ekstrakurikuler harus berupa gambar!',
            'extracurricular_picture_1.mimes' => 'Foto Ekstrakurikuler harus berupa gambar!',
            'extracurricular_picture_1.max' => 'Foto Ekstrakurikuler terlalu besar!',
        ]);

        try {
            $extracurricular = Extracurricular::findOrFail($id);
            $extracurricular->extracurricular_name = $request->extracurricular_name;
            $extracurricular->extracurricular_description = $request->extracurricular_description;

            $cek_logo = file_exists(public_path('storage/' . $extracurricular->extracurricular_logo));
            $cek_picture = file_exists(public_path('storage/' . $extracurricular->extracurricular_picture_1));

            if ($request->file()) {
                foreach ($request->file() as $name => $file) {
                    if ($name == 'extracurricular_logo') {
                        if ($cek_logo) {
                            Storage::delete('storage/' . $extracurricular->extracurricular_logo);
                            $extracurricular->extracurricular_logo = Storage::put('/extracurricular/extracurricular-logos', $file);
                        } else {
                            $extracurricular->extracurricular_logo = Storage::put('/extracurricular/extracurricular-logos', $file);
                        }
                    }

                    if ($name == 'extracurricular_picture_1') {
                        if ($cek_picture) {
                            Storage::delete('storage/' . $extracurricular->extracurricular_photo_1);
                            $extracurricular->extracurricular_photo_1 = Storage::put('/extracurricular-pictures', $file);
                        } else {
                            $extracurricular->extracurricular_photo_1 = Storage::put('/extracurricular-pictures', $file);
                        }
                    }
                }
            }

            $extracurricular->save();
            return $this->backWithSuccess_1('Ekstrakurikuler berhasil diubah!');
        } catch (\Throwable $th) {
            return $this->backWithError_1('Terdapat Kesalahan! | Code : 500');
        }
    }
    public function destroy($id)
    {

        
        $extracurricular = Extracurricular::find($id);
        // $cek_logo = file_exists(public_path('storage/app/' . $extracurricular->extracurricular_logo));
        $cek_logo = Storage::exists('storage/app/' . $extracurricular->extracurricular_logo);
        // $cek_picture = file_exists(public_path('storage/app/' . $extracurricular->extracurricular_photo_1));
        $cek_picture = Storage::exists('storage/app/' . $extracurricular->extracurricular_photo_1);
        if ($extracurricular == null) {
            return $this->backWithError_1('Ekstrakurikuler tidak ditemukan!');
        }
        if ($extracurricular->extracurricular_logo != null) {
            // unlink(public_path('storage/app/' . $extracurricular->extracurricular_logo));
            Storage::delete('storage/app/' . $extracurricular->extracurricular_logo);
        }
        if ($extracurricular->extracurricular_photo_1 != null) {
            // unlink(public_path('storage/app/' . $extracurricular->extracurricular_photo_1));
            Storage::delete('storage/app/' . $extracurricular->extracurricular_photo_1);
        }
        Extracurricular::destroy($id);
        return $this->backWithSuccess_1('Ekstrakurikuler berhasil dihapus!');
        // try {
        //     $ekstrakurikuler = Extracurricular::find($id);
        //     $ekstrakurikuler->delete();
        //     return redirect()->route('ekstrakurikuler.index')->with('flash', [
        //         'type' => 'success',
        //         'message' => 'Ekstrakurikuler berhasil dihapus!'
        //     ]);
        // } catch (\Throwable $th) {
        //     //throw $th;
        //     return redirect()->route('ekstrakurikuler.index')->with('flash', [
        //         'type' => 'danger',
        //         'message' => 'Ekstrakurikuler gagal dihapus!' . $th->getMessage()
        //     ]);
        // }
    }

    private function backWithSuccess_1($message)
    {
        return redirect()->route('ekstrakurikuler.index')->with('flash', [
            'type' => 'success',
            'message' => $message
        ]);
    }
    private function backWithError_1($message)
    {
        return redirect()->route('ekstrakurikuler.index')->with('flash', [
            'type' => 'danger',
            'message' => $message
        ]);
    }
    private function backWithWarning($message)
    {
        return redirect()->route('ekstrakurikuler.index')->with('flash', [
            'type' => 'warning',
            'message' => $message
        ]);
    }
}
