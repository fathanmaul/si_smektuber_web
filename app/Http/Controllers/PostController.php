<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $posts = Posts::where('category_name', 'like', '%' . $request->cari . '%')->paginate(10);
            return view('admin.Post.index', compact('posts'));
        };
        $posts = Posts::paginate(10);
        return view('admin.Post.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.Post.create');
    }

    public function store(Request $request)
    {
        
    }
}
