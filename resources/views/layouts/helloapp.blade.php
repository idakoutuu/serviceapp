<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>@yield('title')</title>
        <style>

            .title h1 {
                background-color: orange;
            }


            .content {
                height: 800px;
            }

            footer {
                background-color: gray;
            }
        </style>
    </head>
    <body>
        <header class="title pt-5">
            <h1>@yield('title')</h1>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">メニュー</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">当サービスについて</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">利用者の声</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">ログイン</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">新規登録</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">お問い合わせ</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            </nav>
        </header>
        <div class="content">
            <div class="top-page"> 
                @yield('content')
            </div>
        </div>
       
       <footer>
            <h3>サービスロゴ</h3>
            <ul class="navbar-nav mr-auto d-flex">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">当サービスについて</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">利用者の声</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">ログイン</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">新規登録</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">お問い合わせ</a>
                    </li>
                </ul>
       </footer>
    </body>
</html>