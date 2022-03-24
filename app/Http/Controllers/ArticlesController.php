<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $data = $request->validate([
            'category' => 'required|exists:categories,id',
        ]);

        $articles = Article::query()
            ->where('category_id', $data['category'])
            ->with('category')
            ->with('image')
            ->orderByDesc('created_at')
            ->paginate(5);

        if ($articles->isEmpty()) {
            return response()->json('end');
        }

        /** @var Collection $articles */
        $responseData = $articles->map(function (Article $article) {
            return [
                'title' => $article->title,
                'description' => $article->description,
                'image' => $article->image->url,
                'category' => $article->category->name,
                'createdAt' => $article->created_at->format('d-m-Y H:m:s'),
            ];
        })->toArray();

        return response()->json($responseData);
    }
}
