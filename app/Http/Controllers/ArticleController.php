<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; // モデルを使用するため
use App\Http\Requests\ArticleStoreRequest; // バリデーションを使用

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
     * 記事投稿フォームを表示
     */
    public function createArticle()
    {
        return view('articles.create');
    }

    /**
     * 記事投稿処理
     */
    public function storeArticle(ArticleStoreRequest $request)
    {
        // 記事登録処理
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('showArticles');
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
