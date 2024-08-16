@extends('layout')

@section('title')
    記事編集
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>記事編集フォーム</h2>
            <form method="POST" action="{{ route('updateArticle', $article->id) }}">
                @csrf
                <div class="form-group">
                    <label for="title">
                        タイトル
                    </label>
                    <input id="title" name="title" class="form-control" value="{{ old('title', $article->title) }}" type="text">
                    @if ($errors->has('title'))
                        <div class="text-danger">
                            {{ $errors->first('title') }}
                        </div>
                    @endif
                </div>
                <div class="form-group mt-3">
                    <label for="content">
                        内容
                    </label>
                    <textarea id="content" name="content" class="form-control" rows="4">{{ old('content', $article->content) }}</textarea>
                    @if ($errors->has('content'))
                        <div class="text-danger">
                            {{ $errors->first('content') }}
                        </div>
                    @endif
                </div>
                <div class="mt-3">
                    <a class="btn btn-secondary mr-2" href="{{ route('showArticle', $article->id) }}">
                        キャンセル
                    </a>
                    <button type="submit" class="btn" style="background-color: #B22222; color: white;">
                        更新
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
