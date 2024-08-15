<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ブログ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>

<body>
    <!-- ヘッダー -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ブログ</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">記事一覧 <span class="sr-only"></span></a>
                        <a class="nav-item nav-link" href="#">記事投稿</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- コンテンツ -->
    <div class="container mt-4">
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
    </div>

    <!-- フッター -->
    <footer class="footer bg-primary  fixed-bottom">
        <div class="container text-center">
            <span class="text-light">©︎Laravel教材</span>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>
