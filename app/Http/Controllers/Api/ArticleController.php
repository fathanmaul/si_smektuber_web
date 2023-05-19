<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        try {
            $page = $request->query('page', 1);
    
            $articles = Article::paginate(10, ['*'], 'page', $page);
    
            return Response::paginate($articles);
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }

    public function show($id)
    {
        try {
            if (!Article::find($id)) {
                return Response::error('Article not found', [], 404);
            }
            return Response::success(Article::find($id));
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }
}