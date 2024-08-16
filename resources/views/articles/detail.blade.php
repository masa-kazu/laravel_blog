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
    <a href="{{ route('showArticles') }}" class="mt-3 btn btn-secondary">戻る</a>
    <a href="{{ route('editArticle', $article->id) }}" class="mt-3 btn" style="background-color: #B22222; color: white;">編集</a>
@endsection
