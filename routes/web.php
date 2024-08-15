<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController; // コントローラーを使用する用に追加

Route::get('/', function () {
    return view('welcome');
});

// 投稿一覧を表示
Route::get('/articles', [ArticleController::class, 'showArticles'])->name('showArticles');

// 記事詳細を表示
Route::get('/article/{id}', [ArticleController::class, 'showArticle'])->name('showArticle');
