<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>@yield('title')</title>
        <style>
             .jumbotron {
                 background:url(main.jpg) center no-repeat; background-size: cover;
                 }
                 
             .container h1 {
                 text-align: center;
             }

             footer ul {
                 display: flex;
             }

             footer ul li a {
                color: white;
            }

            footer p {
                text-align: center;
                color: white;
            }
        </style>
    </head>
    <body>
        <header class="title pt-5">
            <div class="jumbotron">
                <div class="container">
                     <h1>@yield('title')</h1>
                </div>
            </div>
            <nav class="navbar navbar-expand-sm  navbar-light bg-light">
                <a class="navbar-brand" href="#">メニュー</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav w-100 nav-justified mr-auto">
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('app.index')}}">トップ<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('app.service') }}">当サービスについて<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('app.message') }}">利用者の声</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">ログイン</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">新規登録</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('app.contact') }}">お問い合わせ</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索</button>
                    </form>
                </div>
            </nav>
        </header>
         <div class="content">
            @yield('content')
         </div>
       
       <footer class="bg-secondary">
            <ul class="navbar-nav mr-auto text-light">
                <li class="nav-item">
                    <a class="nav-link" href="/hello">トップ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/hello/service">当サービスについて</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/hello/message">利用者の声</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">ログイン</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">新規登録</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/hello/contact">お問い合わせ</a>
                </li>
            </ul>
            <p>Copyright ©　●●●</p>
       </footer>
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
    
</html>