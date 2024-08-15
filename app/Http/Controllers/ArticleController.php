<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * 記事一覧を表示する
     */
    public function showArticles()
    {
        return view('articles.index');
    }
}
