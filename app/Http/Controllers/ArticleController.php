<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; // モデルを使用するため
use App\Http\Requests\ArticleStoreRequest; // バリデーションを使用
use App\Http\Requests\ArticleUpdateRequest; // バリデーションを使用
use Illuminate\Support\Facades\DB; // トランザクション用
use Illuminate\Support\Facades\Log; // ログ出力用

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
        // トランザクション開始
    DB::beginTransaction();
    try {
        // 記事登録処理
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // トランザクションコミット
        DB::commit();
    } catch(\Exception $e) {
        // トランザクションロールバック
        DB::rollBack();

        // ログ出力
        Log::debug($e);

        // エラー画面遷移
        abort(500);
    }

    return redirect()->route('showArticles');
    }

    /**
     * 記事編集画面を表示する
     */
    public function editArticle($id)
    {
        // 渡されてきた記事IDのデータを取得
        $article = Article::find($id);

        return view('articles.edit', compact('article'));
    }

    /**
     * 記事編集処理
     */
    public function updateArticle(ArticleUpdateRequest $request, $id)
    {
        // 渡されてきた記事IDのデータを取得
        $article = Article::find($id);

        // トランザクション開始
        DB::beginTransaction();
        try {
            // 編集する内容をfillメソッドを使用して記述
            $article->fill([
                'title' => $request->title,
                'content' => $request->content,
            ]);

            // 保存処理
            $article->save();

            // トランザクションコミット
            DB::commit();
        } catch(\Exception $e) {
            // トランザクションロールバック
            DB::rollBack();

            // ログ出力
            Log::debug($e);

            // エラー画面遷移
            abort(500);
        }

        return redirect()->route('showArticle', $article->id);
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

    /**
     * 記事削除処理
     */
    public function deleteArticle($id)
    {
        // トランザクション開始
        DB::beginTransaction();
        try{
            // 渡されてきた記事IDのデータを取得
            $article = Article::find($id);

            // 記事削除処理
            $article->delete();

            // トランザクションコミット
            DB::commit();
        } catch(\Exception $e) {
            // トランザクションロールバック
            DB::rollBack();

            // ログ出力
            Log::debug($e);

            // エラー画面遷移
            abort(500);
        }

        return redirect()->route('showArticles');
    }
}
