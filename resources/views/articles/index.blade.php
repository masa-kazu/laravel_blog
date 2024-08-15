@extends('layout')

@section('title')
    記事一覧
@endsection

@section('content')
    <div class="row">
        <h2>記事一覧</h2>
        <table class="table table-bordered table-hover ">
            <thead class="bg-info text-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">タイトル</th>
                    <th scope="col">内容</th>
                    <th scope="col">日付</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>テスト1</td>
                    <td>テスト1です。</td>
                    <td>2022/01/01</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>テスト2</td>
                    <td>テスト2です。</td>
                    <td>2022/01/02</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
