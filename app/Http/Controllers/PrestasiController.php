<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {

        $prestasi = Achievement::paginate(10);
        return view('admin.Prestasi.index', ['achievement' => $prestasi]);
    }

    public function create()
    {
        return view('admin.Prestasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'achievement_description' => 'required|max:2000',
            'achievement_image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'name.required' => 'Nama tidak boleh kosong!',
            'name.max' => 'Nama tidak boleh lebih dari 255 karakter!',
            'achievement_description.required' => 'Deskripsi tidak boleh kosong!',
            'achievement_description.max' => 'Deskripsi tidak boleh lebih dari 2000 karakter!',
            'achievement_image.image' => 'File harus berupa gambar! (jpeg,png,jpg)',
            'achievement_image.mimes' => 'File harus berupa gambar! (jpeg,png,jpg)',
            'achievement_image.max' => 'File tidak boleh lebih dari 2MB!',
        ]);

        try {
            //code...
            // $achievement = new Achievement; //Model
            // $achievement->name = $request->name;
            // $achievement->achievement_description = $request->achievement_description;
            // $achievement->image = $request->image;
            // $achievement->save();


            if ($request->file('achievement_image')) {
                $image_name = $request->file('achievement_image')->store('achievement-images');
                // echo $image_name;
            }

            Achievement::create([
                'title' => $request->name,
                'description' => $request->achievement_description,
                'photo' => $image_name,
            ]);



            // return $request->file('achievement_image')->store('achievement-images');
            return redirect()->route('prestasi.index')->with('flash', [
                'type' => 'success',
                'message' => 'Prestasi berhasil ditambahkan!',
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('prestasi.index')->with('flash', [
                'type' => 'danger',
                'message' => 'Prestasi gagal ditambahkan!' . $th->getMessage(),
            ]);
        }
    }


    public function edit($id)
    {
        $prestasi = Achievement::find($id);
        if (!$prestasi) {
            return redirect()->route('prestasi.index')->with('flash', [
                'type' => 'danger',
                'message' => 'Prestasi tidak ditemukan!',
            ]);
        }
        return view('admin.Prestasi.edit', ['achievement' => $prestasi]);
    }

    public function put(Request $request, $id)
    {
        $prestasi = Achievement::find($id);
        if (!$prestasi) {
            return redirect()->route('prestasi.index')->with('flash', [
                'type' => 'danger',
                'message' => 'Prestasi tidak ditemukan!',
            ]);
        }

        $request->validate([
            'name' => 'required|max:255',
            'achievement_description' => 'required|max:2000',
            'achievement_image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'name.required' => 'Nama tidak boleh kosong!',
            'name.max' => 'Nama tidak boleh lebih dari 255 karakter!',
            'achievement_description.required' => 'Deskripsi tidak boleh kosong!',
            'achievement_description.max' => 'Deskripsi tidak boleh lebih dari 2000 karakter!',
            'achievement_image.image' => 'File harus berupa gambar! (jpeg,png,jpg)',
            'achievement_image.mimes' => 'File harus berupa gambar! (jpeg,png,jpg)',
            'achievement_image.max' => 'File tidak boleh lebih dari 2MB!',
        ]);

        try {
            //code...


            $path = public_path('storage/');

            if ($request->file('achievement_image')) {
                if ($prestasi->photo != null || $prestasi->photo != '') {
                    $old_photo = $path . $prestasi->photo;
                    unlink($old_photo);
                }
                $image_name = $request->file('achievement_image')->store('achievement-images');
                Achievement::where('id', $id)->update([
                    'title' => request()->name,
                    'description' => request()->achievement_description,
                    'photo' => $image_name,
                ]);
                return redirect()->route('prestasi.index')->with('flash', [
                    'type' => 'success',
                    'message' => 'Prestasi berhasil diubah!',
                ]);
            }

            Achievement::where('id', $id)->update([
                'title' => request()->name,
                'description' => request()->achievement_description,
            ]);

            return redirect()->route('prestasi.index')->with('flash', [
                'type' => 'success',
                'message' => 'Prestasi berhasil diubah!',
            ]);
        } catch (\Throwable $th) {
            return redirect()->route('prestasi.index')->with('flash', [
                'type' => 'danger',
                'message' => 'Prestasi gagal diubah!' . $th->getMessage(),
            ]);
        }

        // return view('Prestasi.edit', ['achievement' => $prestasi]);
    }

    public function destroy($id)
    {
        try {
            Achievement::destroy($id);
            return redirect()->route('prestasi.index')->with('flash', [
                'type' => 'success',
                'message' => 'Prestasi berhasil dihapus!',
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('prestasi.index')->with('flash', [
                'type' => 'danger',
                'message' => 'Prestasi gagal dihapus!' . $th->getMessage(),
            ]);
        }
    }
}
