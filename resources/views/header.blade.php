<header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #B22222;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('showArticles') }}">blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="{{ route('showArticles') }}">記事一覧 &#x1f5d2;<span class="sr-only"></span></a>
                    <a class="nav-item nav-link active" href="{{ route('createArticle') }}">記事投稿 &#x270e;</a>
                </div>
            </div>
        </div>
    </nav>
</header>
