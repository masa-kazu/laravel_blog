@extends('layout')

@section('title')
    記事一覧
@endsection

@section('content')
    <div class="row">
        <h2>記事一覧</h2>
        <table class="table table-bordered table-hover">
            <thead class="text-light" style="background-color: #F4A460;">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">タイトル</th>
                    <th scope="col">内容</th>
                    <th scope="col">日付</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>
                            <a class="table-title" href="{{ route('showArticle', $article->id) }}" style="color: black;">
                            {{ $article->title }}
                            </a>
                        </td>
                        <td>{{ $article->content }}</td>
                        <td>{{ $article->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
