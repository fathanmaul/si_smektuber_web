<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->cari) {
            $post_category = PostCategory::where('category_name', 'like', '%' . $request->cari . '%')->paginate(10);
            return view('admin.PostKategori.index', compact('post_category'));
        }
        $post_category = PostCategory::paginate(10);
        return view('admin.PostKategori.index', compact('post_category'));
    }

    public function create()
    {
        return view('admin.PostKategori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|max:20|unique:post_category,category_name'
        ], [
            'category_name.required' => 'Harap isi Kategori',
            'category_name.max' => 'Kategori terlalu panjang!',
            'category_name.unique' => 'Kategori sudah terdaftar!',
        ]);
        try {
            PostCategory::insert([
                'category_name' => $request->category_name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return $this->backWithSuccess('post-category.index', 'Kategori berhasil ditambahkan!');
        } catch (\Throwable $th) {
            return $this->backWithError('post-category.index', 'Sepertinya Ada Kesalahan! | Code : 500' . $th);
        }
    }

    public function edit($id)
    {
        $post_category = PostCategory::find($id);
        if ($post_category == null) {
            return $this->backWithError('post-category.index', 'Kategori tidak ditemukan!');
        };
        return view('admin.PostKategori.edit', compact('post_category'));
    }

    public function put(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        
    }
}
