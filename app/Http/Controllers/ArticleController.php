<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; // モデルを使用するため

class ArticleController extends Controller
{
    /**
     * 記事一覧を表示する
     */
    public function showArticles()
    {
        // 全ての記事データを取得
        $articles = Article::all();

        // compact関数を使用
        return view('articles.index', compact('articles'));
    }

    /**
     * 記事詳細を表示する
     */
    public function showArticle($id)
    {
        // 渡されてきた記事IDのデータを取得
        $article = Article::find($id);

        return view('articles.detail', compact('article'));
    }
}
