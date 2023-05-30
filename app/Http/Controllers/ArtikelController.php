<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->cari;
        $artikel = Article::query();
        if ($keyword) {
            $artikel->where('title', 'LIKE', '%' . $keyword . '%');
        }
        $artikel = $artikel->orderBy('updated_at', 'desc')->paginate(10);
        $artikel->appends(['cari' => $keyword]);
        return view('admin.Artikel.index', compact('artikel', 'keyword'));
    }

    public function show($slug)
    {
        $artikel = Article::where('slug', $slug)->first();
        if(!$artikel){
            return $this->backWithError('artikel', 'Artikel tidak ditemukan!!');
        }
        return view('admin.Artikel.show', compact('artikel'));
    }

    public function create()
    {
        return view('admin.Artikel.create');
    }

    public function store(Request $request)
    {
        // return 'Yes';
        $request->validate([
            'title' => 'required|unique:article,title|max:200',
            'content' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:1024',
        ], [
            'title.required' => 'Judul artikel harus diisi',
            'title.unique' => 'Judul artikel sudah ada',
            'title.max' => 'Judul artikel maksimal 200 karakter',
            'content.required' => 'Isi Konten artikel harus diisi',
            'thumbnail.image' => 'File harus berupa gambar',
            'thumbnail.mimes' => 'File harus berupa gambar',
            'thumbnail.max' => 'Ukuran gambar maksimal 1 MB',
        ]);

        $slug = Str::slug($request->title);
        $image = $request->file('thumbnail');
        $image_url = null;
        try {
            if ($image) {
                $image_name = time() . '-' . $slug . '.' . $image->extension();
                $image_url = Storage::putFileAs('/article/thumbnail', $image, $image_name);
            }
            Article::insert([
                'title' => $request->title,
                'slug' => $slug,
                'description' => $request->content,
                'thumbnail' => $image_url,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return $this->backWithSuccess('artikel.index', 'Artikel berhasil ditambahkan!');
        } catch (\Throwable $th) {
            //throw $th;
            return $this->backWithError('artikel.index', 'Artikel gagal ditambahkan!' . $th);
        }



        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil ditambahkan');
    }

    public function edit($id)
    {
        $artikel = Article::find($id);
        if (!$artikel) {
            return $this->backWithError('artikel.index', 'Artikel tidak ditemukan!');
        }
        return view('admin.Artikel.edit', compact('artikel'));
    }

    public function put(Request $request, $id)
    {
        if (!Article::find($id)) return $this->backWithError('artikel.index', 'Ekstrakurikuler tidak ditemukan!');
        $request->validate([
            'title' => 'required|max:200',
            'content' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:1024',
        ], [
            'title.required' => 'Judul artikel harus diisi',
            'title.unique' => 'Judul artikel sudah ada',
            'title.max' => 'Judul artikel maksimal 200 karakter',
            'content.required' => 'Isi Konten artikel harus diisi',
            'thumbnail.image' => 'File harus berupa gambar',
            'thumbnail.mimes' => 'File harus berupa gambar',
            'thumbnail.max' => 'Ukuran gambar maksimal 1 MB',
        ]);

        try {
            $article = Article::findOrFail($id);
            if ($request->title == $article->title) {
                $article->title = $article->title;
            } else {
                $article->title = $request->title;
                $article->slug = Str::slug($request->title);
            }
            $article->description = $request->content;
            $thumbnail_check = Storage::exists($article->thumbnail);
            if ($request->hasFile('thumbnail')) {
                $image = $request->file('thumbnail');
                $image_name = time() . '-' . Str::slug($request->title) . '.' . $image->extension();
                if ($article->thumbnail) {
                    if ($thumbnail_check) {
                        Storage::delete($article->thumbnail);
                        $image_url = Storage::putFileAs('/article/thumbnail', $image, $image_name);
                        $article->thumbnail = $image_url;
                    } else {
                        $image_url = Storage::putFileAs('/article/thumbnail', $image, $image_name);
                        $article->thumbnail = $image_url;
                    }
                } else {
                    $image_url = Storage::putFileAs('/article/thumbnail', $image, $image_name);
                    $article->thumbnail = $image_url;
                }
            }
            // $article->updated_at = now();
            $article->save();
            return $this->backWithSuccess('artikel.index', 'Artikel berhasil diubah!');
        } catch (\Throwable $th) {
            return $this->backWithError('artikel.index', 'Artikel gagal diubah!' . $th);
        }
    }

    public function destroy($id)
    {
        if (!Article::find($id)) return $this->backWithError('artikel.index', 'Artikel tidak ditemukan!');
        $article = Article::findOrFail($id);
        $thumbnail_check = Storage::exists($article->thumbnail);
        try {
            if ($article->thumbnail) {
                if ($thumbnail_check) {
                    Storage::delete($article->thumbnail);
                }
            }
            $article->delete();
            return $this->backWithSuccess('artikel.index', 'Artikel berhasil dihapus!');
        } catch (\Throwable $th) {
            return $this->backWithError('artikel.index', 'Artikel gagal dihapus!' . $th);
        }
    }
}
