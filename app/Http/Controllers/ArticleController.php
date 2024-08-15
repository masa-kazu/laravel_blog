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
}
