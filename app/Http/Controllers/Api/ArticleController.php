<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return Response::success(Article::all());
    }

    public function show($id)
    {
        return Response::success(Article::find($id));
    }
}