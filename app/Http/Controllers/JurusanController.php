<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class JurusanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $jurusan = Major::where('major_name', 'LIKE', '%' . $request->cari . '%')->paginate(10);
            return view('admin.Jurusan.new.index', compact('jurusan'));
            // return $jurusan;
        }
        $jurusan = Major::paginate(10);
        return view('admin.Jurusan.new.index', compact('jurusan'));
    }


    public function create()
    {
        return view('admin.Jurusan.new.create');
    }

    public function store(Request $request)
    {
        // return $request->file();
        $request->validate([
            'major_name' => 'required|max:255|unique:major,major_name',
            'major_description' => 'required|max:1200',
            'major_logo' => 'image|mimes:jpeg,png,jpg|max:1024',
            'picture_1' => 'image|mimes:jpeg,png,jpg|max:1024',
            'picture_2' => 'image|mimes:jpeg,png,jpg|max:1024',
        ], [
            'major_name.required' => 'Nama Jurusan tidak boleh kosong!',
            'major_name.max' => 'Nama Jurusan tidak boleh lebih dari 255 karakter!',
            'major_name.unique' => 'Nama Jurusan sudah terdaftar!',
            'major_description.required' => 'Deskripsi Jurusan tidak boleh kosong!',
            'major_description.max' => 'Deskripsi Jurusan terlalu panjang',
            'major_logo.image' => 'File harus berupa gambar! (jpeg,png,jpg)',
            'major_logo.mimes' => 'File harus berupa gambar! (jpeg,png,jpg)',
            'major_logo.max' => 'File tidak boleh lebih dari 1MB!',
            'picture_1.image' => 'File harus berupa gambar! (jpeg,png,jpg)',
            'picture_1.mimes' => 'File harus berupa gambar! (jpeg,png,jpg)',
            'picture_1.max' => 'File tidak boleh lebih dari 1MB!',
            'picture_2.image' => 'File harus berupa gambar! (jpeg,png,jpg)',
            'picture_2.mimes' => 'File harus berupa gambar! (jpeg,png,jpg)',
            'picture_2.max' => 'File tidak boleh lebih dari 1MB!',
        ]);

        $major_logo = null;
        $picture_1 = null;

        try {
            //code...
            if ($request->file('major_logo')) {
                $major_logo = $request->file('major_logo')->store('major/major-logos');
            }

            if ($request->file('picture_1')) {
                $picture_1 = $request->file('picture_1')->store('major/major-pictures');
            }

            Major::insert([
                'major_name' => $request->major_name,
                'major_description' => $request->major_description,
                'major_logo' => $major_logo,
                'picture_1' => $picture_1,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            return redirect()->route('jurusan.index')->with('flash', [
                'type' => 'success',
                'message' => 'Jurusan berhasil ditambahkan!'
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('jurusan.index')->with('flash', [
                'type' => 'danger',
                'message' => 'Terdapat Kesalahan! | Code : 500'
            ]);
        }
    }

    public function edit($id)
    {
        $jurusan = Major::find($id);
        if ($jurusan == null) {
            return redirect()->route('jurusan.index')->with('flash', [
                'type' => 'danger',
                'message' => 'Jurusan tidak ditemukan!'
            ]);
        }
        return view('admin.Jurusan.new.edit', compact('jurusan'));
    }

    public function put1(Request $request, $id)
    {
        $data = Major::find($id);
        if ($data == null) {
            return redirect()->route('jurusan.index')->with('flash', [
                'type' => 'danger',
                'message' => 'Jurusan tidak ditemukan!'
            ]);
        }

        $request->validate([
            'major_name' => 'required|max:255',
            'major_description' => 'required|max:1200',
            'major_logo' => 'image|mimes:jpeg,png,jpg|max:1024',
            'picture_1' => 'image|mimes:jpeg,png,jpg|max:1024',
            'picture_2' => 'image|mimes:jpeg,png,jpg|max:1024',
        ], [
            'major_name.required' => 'Nama Jurusan tidak boleh kosong!',
            'major_name.max' => 'Nama Jurusan tidak boleh lebih dari 255 karakter!',
            'major_description.required' => 'Deskripsi Jurusan tidak boleh kosong!',
            'major_description.max' => 'Deskripsi Jurusan terlalu panjang',
            'major_logo.image' => 'File harus berupa gambar! (jpeg,png,jpg)',
            'major_logo.mimes' => 'File harus berupa gambar! (jpeg,png,jpg)',
            'major_logo.max' => 'File tidak boleh lebih dari 1MB!',
            'picture_1.image' => 'File harus berupa gambar! (jpeg,png,jpg)',
            'picture_1.mimes' => 'File harus berupa gambar! (jpeg,png,jpg)',
            'picture_1.max' => 'File tidak boleh lebih dari 1MB!',
            'picture_2.image' => 'File harus berupa gambar! (jpeg,png,jpg)',
            'picture_2.mimes' => 'File harus berupa gambar! (jpeg,png,jpg)',
            'picture_2.max' => 'File tidak boleh lebih dari 1MB!',
        ]);

        $major_logo = null;
        $picture_1 = null;
        $picture_2 = null;

        try {
            # code...
            if ($request->file('major_logo')) {
                if ($data->major_logo != null) {
                    unlink(public_path('storage/' . $data->major_logo));
                    $major_logo = $request->file('major_logo')->store('major/major-logos');
                } else {
                    $major_logo = $request->file('major_logo')->store('major/major-pictures');
                }
            }

            if ($request->file('picture_1')) {
                if ($data->picture_1 != null) {
                    unlink(public_path('storage/' . $data->picture_1));
                    $picture_1 = $request->file('picture_1')->store('major/major-pictures');
                } else {
                    $picture_1 = $request->file('picture_1')->store('major/major-pictures');
                }
            }

            if ($request->file('picture_2')) {
                if ($data->picture_2 != null) {
                    unlink(public_path('storage/' . $data->picture_2));
                    $picture_2 = $request->file('picture_2')->store('major/major-pictures');
                } else {
                    $picture_2 = $request->file('picture_2')->store('major/major-pictures');
                }
            }

            if ($major_logo != null && $picture_1 != null && $picture_2 != null) {
                Major::whereId($id)->update([
                    'major_name' => $request->major_name,
                    'major_description' => $request->major_description,
                    'major_logo' => $major_logo,
                    'picture_1' => $picture_1,
                    'picture_2' => $picture_2,
                ]);
                return $this->backWithSuccess('jurusan.index', 'Jurusan berhasil diubah!');
            } else if ($major_logo != null && $picture_1 != null) {
                Major::whereId($id)->update([
                    'major_name' => $request->major_name,
                    'major_description' => $request->major_description,
                    'major_logo' => $major_logo,
                    'picture_1' => $picture_1,
                ]);
                return $this->backWithSuccess('jurusan.index', 'Jurusan berhasil diubah!');
            } else if ($major_logo != null && $picture_2 != null) {
                Major::whereId($id)->update([
                    'major_name' => $request->major_name,
                    'major_description' => $request->major_description,
                    'major_logo' => $major_logo,
                    'picture_2' => $picture_2,
                ]);
                return $this->backWithSuccess('jurusan.index', 'Jurusan berhasil diubah!');
            } else if ($picture_1 != null && $picture_2 != null) {
                Major::whereId($id)->update([
                    'major_name' => $request->major_name,
                    'major_description' => $request->major_description,
                    'picture_1' => $picture_1,
                    'picture_2' => $picture_2,
                ]);
                return $this->backWithSuccess('jurusan.index', 'Jurusan berhasil diubah!');
            } else if ($major_logo != null) {
                Major::whereId($id)->update([
                    'major_name' => $request->major_name,
                    'major_description' => $request->major_description,
                    'major_logo' => $major_logo,
                ]);
                return $this->backWithSuccess('jurusan.index', 'Jurusan berhasil diubah!');
            } else if ($picture_1 != null) {
                Major::whereId($id)->update([
                    'major_name' => $request->major_name,
                    'major_description' => $request->major_description,
                    'picture_1' => $picture_1,
                ]);
                return $this->backWithSuccess('jurusan.index', 'Jurusan berhasil diubah!');
            } else if ($picture_2 != null) {
                Major::whereId($id)->update([
                    'major_name' => $request->major_name,
                    'major_description' => $request->major_description,
                    'picture_2' => $picture_2,
                ]);
                return $this->backWithSuccess('jurusan.index', 'Jurusan berhasil diubah!');
            } else {
                Major::whereId($id)->update([
                    'major_name' => $request->major_name,
                    'major_description' => $request->major_description,
                ]);
                return $this->backWithSuccess('jurusan.index', 'Jurusan berhasil diubah!');
            }
        } catch (\Throwable $th) {
            return redirect()->route('jurusan.index')->with('flash', [
                'type' => 'danger',
                'message' => 'Terdapat Kesalahan! | Code : 500'
            ]);
        }
    }

    public function put(Request $request, $id)
    {
        if (!Major::find($id)) return $this->backWithError('jurusan.index', 'Jurusan tidak ditemukan!');
        $request->validate([
            'major_name' => 'required|max:255',
            'major_description' => 'required|max:1200',
            'major_logo' => 'image|mimes:jpeg,png,jpg|max:1024',
            'picture_1' => 'image|mimes:jpeg,png,jpg|max:1024',
        ], [
            'major_name.required' => 'Nama Jurusan tidak boleh kosong!',
            'major_name.max' => 'Nama Jurusan tidak boleh lebih dari 255 karakter!',
            'major_description.required' => 'Deskripsi Jurusan tidak boleh kosong!',
            'major_description.max' => 'Deskripsi Jurusan terlalu panjang',
            'major_logo.image' => 'File harus berupa gambar! (jpeg,png,jpg)',
            'major_logo.mimes' => 'File harus berupa gambar! (jpeg,png,jpg)',
            'major_logo.max' => 'File tidak boleh lebih dari 1MB!',
            'picture_1.image' => 'File harus berupa gambar! (jpeg,png,jpg)',
            'picture_1.mimes' => 'File harus berupa gambar! (jpeg,png,jpg)',
            'picture_1.max' => 'File tidak boleh lebih dari 1MB!',
        ]);

        try {
            $major = Major::findOrFail($id);
            $major->major_name = $request->major_name;
            $major->major_description = $request->major_description;

            $cek_logo = file_exists(public_path('storage/' . $major->major_logo));
            $cek_picture = file_exists(public_path('storage/' . $major->picture_1));

            if ($request->file()) {
                foreach ($request->file() as $name => $file) {
                    if ($name == 'major_logo') {
                        if ($major->major_logo) {
                            if($cek_logo){
                                unlink(public_path('storage/' . $major->major_logo));
                                $major_logo = $file->store('major/major-logos');
                                $major->major_logo = $major_logo;
                            }else{
                                $major_logo = $file->store('major/major-logos');
                                $major->major_logo = $major_logo;
                            }   
                        }else{
                            $major_logo = Storage::put('major/major-logos', $file);
                            $major->major_logo = $major_logo;
                        }
                    }
                    if ($name == 'picture_1') {
                        if ($major->picture_1) {
                            if($cek_picture){
                                unlink(public_path('storage/' . $major->picture_1));
                                $major->picture_1 = $file->store('major/major-pictures');
                            }else{
                                $major->picture_1 = $file->store('major/major-pictures');
                            }
                        } else{
                            $major->picture_1 = $file->store('major/major-pictures');
                        }
                    }
                }
            }
            $major->save();
            return $this->backWithSuccess('jurusan.index', 'Jurusan berhasil diubah!');
        } catch (\Throwable $th) {
            return $this->backWithError('jurusan.index', 'Terdapat Kesalahan! | Code : 500'. $th);
        }
    }


    public function destroy($id)
    {
        $major = Major::find($id);
        $cek_logo = file_exists(public_path('storage/' . $major->major_logo));
        $cek_picture = file_exists(public_path('storage/' . $major->picture_1));

        if ($major == null) {
            return $this->backWithError('jurusan.index', 'Jurusan tidak ditemukan!');
        }
        if ($major->major_logo != null) {
            if ($cek_logo) {
                unlink(public_path('storage/' . $major->major_logo));
            }
        }
        if ($major->picture_1 != null) {
            if ($cek_picture) {
                unlink(public_path('storage/' . $major->picture_1));
            }
        }
        Major::destroy($id);
        return $this->backWithSuccess('jurusan.index', 'Jurusan berhasil dihapus!');
    }


    function backWithSuccess($routeName, $message)
    {
        return redirect()->route($routeName)->with('flash', [
            'type' => 'success',
            'message' => $message
        ]);
    }
    function backWithError($routeName, $message)
    {
        return redirect()->route($routeName)->with('flash', [
            'type' => 'danger',
            'message' => $message
        ]);
    }
}
