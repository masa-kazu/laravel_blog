@extends('layout')

@section('title')
    記事詳細
@endsection

@section('content')
    <h2>{{ $article->title }}</h2>
    <div class="d-flex">
        <span class="mr-2">作成日：{{ $article->created_at }}</span>
        <span>更新日：{{ $article->updated_at }}</span>
    </div>
    <p class="mt-4">{{ $article->content }}</p>
    <div class="d-flex">
        <a href="{{ route('showArticles') }}" class="mt-3 mr-2 btn btn-secondary">戻る</a>
        <a href="{{ route('editArticle', $article->id) }}" class="mt-3 mr-2 btn" style="background-color: #058118; color: white;">編集</a>
        <form method="POST" action="{{ route('deleteArticle', $article->id) }}">
            @csrf
            <button type="submit" class="mt-3 mr-2 btn btn-danger">削除</button>
        </form>
    </div>
@endsection
