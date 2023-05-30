<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LokerController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('cari');
        $loker = Loker::query();
        if ($keyword) {
            $keyword = strtolower($keyword);
            $loker->where('title', 'LIKE', "%" . $keyword . "%");
        }
        $loker = $loker->orderBy('id', 'desc');
        $loker = $loker->paginate(10);
        $loker->appends(['cari' => $keyword]);
        return view('admin.Loker.new.index', compact('loker', 'keyword'));
    }

    public function create()
    {
        return view('admin.Loker.new.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'loker_title' => 'required|max:150',
            'loker_description' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:1024'
        ], [
            'loker_title.required' => 'Judul Lowongan Kerja harap diisi',
            'loker_title.max' => 'Judul Maksimal 150 karakter!',
            'loker_description.required' => 'Deskripsi Lowongan Kerja harap diisi',
            'thumbnail.image' => 'File harus berupa gambar',
            'thumbnail.mimes' => 'File harus berupa gambar',
            'thumbnail.max' => 'Ukuran gambar maksimal 1 MB'
        ]);

        try {
            $image_url = null;
            if ($request->thumbnail) {
                $image_name = time() . '-' . \Illuminate\Support\Str::slug($request->loker_title) . '.' . $request->file('thumbnail')->extension();
                $image_url = Storage::putFileAs('/loker/thumbnail', $request->file('thumbnail'), $image_name);
            }

            Loker::create([
                'title' => $request->loker_title,
                'slug' => \Illuminate\Support\Str::slug($request->loker_title),
                'description' => $request->loker_description,
                'thumbnail' => $image_url,
            ]);

            return $this->backWithSuccess('loker.index', 'Lowongan Kerja berhasil ditambahkan!');
        } catch (\Throwable $th) {
            return $this->backWithError('loker.index', 'Lowongan Kerja gagal ditambahkan!'. $th);
        }
    }

    public function edit($id)
    {
        $loker = Loker::findOrFail($id);
        return view('admin.Loker.new.edit', compact('loker'));
        // return $loker;
    }

    public function put(Request $request, $id)
    {
        $loker = Loker::findOrFail($id);
        $request->validate([
            'loker_title' => 'required|max:150',
            'loker_description' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:1024'
        ], [
            'loker_title.required' => 'Judul Lowongan Kerja harap diisi',
            'loker_title.max' => 'Judul Maksimal 150 karakter!',
            'loker_description.required' => 'Deskripsi Lowongan Kerja harap diisi',
            'thumbnail.image' => 'File harus berupa gambar',
            'thumbnail.mimes' => 'File harus berupa gambar',
            'thumbnail.max' => 'Ukuran gambar maksimal 1 MB'
        ]);

        try {
            $loker->title = $request->loker_title;
            $loker->slug = \Illuminate\Support\Str::slug($request->loker_title);
            $loker->description = $request->loker_description;
            $thumbnail_check = Storage::exists($loker->thumbnail);
            if ($request->hasFile('thumbnail')) {
                $image = $request->file('thumbnail');
                $image_name = time() . '-' . \Illuminate\Support\Str::slug($request->loker_title, '-') . '.' . $request->file('thumbnail')->extension();
                if ($loker->thumbnail) {
                    if ($thumbnail_check) {
                        try {
                            Storage::delete($loker->thumbnail);
                            $image_url = Storage::putFileAs('/loker/thumbnail', $request->file('thumbnail'), $image_name);
                            $loker->thumbnail = $image_url;
                        } catch (\Throwable $th) {
                            return $th;
                        }
                    } else {
                        $image_url = Storage::putFileAs('/loker/thumbnail', $request->file('thumbnail'), $image_name);
                        $loker->thumbnail = $image_url;
                    }
                } else {
                    $image_url = Storage::putFileAs('/loker/thumbnail', $request->file('thumbnail'), $image_name);
                    $loker->thumbnail = $image_url;
                }
            }
            $loker->save();
            return $this->backWithSuccess('loker.index', 'Lowongan Kerja berhasil diubah!');
        } catch (\Throwable $th) {
            return abort(500, 'Ada yang salah!');
        }
    }

    public function destroy($id)
    {
        try {
            $loker = Loker::findOrFail($id);
            $thumbnail_check = Storage::exists($loker->thumbnail);
            if ($thumbnail_check) {
                Storage::delete($loker->thumbnail);
            }
            $loker->delete();
            return $this->backWithSuccess('loker.index', 'Lowongan Kerja berhasil dihapus!');
        } catch (\Throwable $th) {
            return $this->backWithError('loker.index', 'Lowongan Kerja gagal dihapus!');
        }
    }
}
