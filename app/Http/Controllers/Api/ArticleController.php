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
            
            $imageArticles = $articles->getCollection()->map(function ($article) {
                $article->thumbnail =formatImageUrl($article->thumbnail);
                return $article;
            });

            $formattedPaginateArticles = $articles->setCollection($imageArticles);

            return Response::paginate($formattedPaginateArticles);
            return Response::paginate($articles);
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $article = Article::find($id);

            if (!$article) {
                return Response::error('Article not found', [], 404);
            }

            $article->thumbnail =formatImageUrl($article->thumbnail);

            return Response::success($article);
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }
}