@extends('layouts.topapp')
<style>
    .drop {
        list-style: none;
    }

    .customer-voice {
        list-style: none;
    }
</style>
 @section('content')
 <section class="page-section bg-primary" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">当サイトはマッチングサービスです</h2>
                <hr class="divider light my-4" />
                <p class="text-white-50 mb-4">当サイトはマッチングサービスです当サイトはマッチングサービスです当サイトはマッチングサービスです当サイトはマッチングサービスです当サイトはマッチングサービスです当サイトはマッチングサービスです当サイトはマッチングサービスです当サイトはマッチングサービスです</p>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="{{ route('app.service') }}">サービス概要</a>
            </div>
        </div>
    </div>

</section>
<!-- Services-->
<section class="page-section" id="services">
    <div class="container">
        <h2 class="text-center mt-0">ユーザーを探す</h2>
        <hr class="divider my-4" />
        <div class="row">
            <div class="col-lg-6 col-md-6 text-center">
                <div class="mt-5">
                    <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                    <h3 class="h4 mb-2">職業</h3>
                    <div class="">
                    　   <p class="main-content"><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">職種</a>
                            <div class="collapse" id="collapseExample1">
                                <div class="card card-body">
                                    <ul class="drop-down drop">
                                        <li><a href="#">会社員</a></li>
                                        <li><a href="#">会社役員</a></li>
                                        <li><a href="#">教師</a></li>
                                        <li><a href="#">公務員</a></li>
                                        <li><a href="#">販売員</a></li>
                                        <li><a href="#">美容師</a></li>
                                        <li><a href="#">看護師</a></li>
                                        <li><a href="#">保育士</a></li>
                                    </ul>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 text-center">
                <div class="mt-5">
                    <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                    <h3 class="h4 mb-2">趣味</h3>
                    <div class="">
                    　   <p class="main-content"><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">趣味</a>
                            <div class="collapse" id="collapseExample2">
                                <div class="card card-body">
                                    <ul class="drop-down drop">
                                        <li><a href="#">スポーツ観戦</a></li>
                                        <li><a href="#">読書</a></li>
                                        <li><a href="#">ペット</a></li>
                                        <li><a href="#">ゴルフ</a></li>
                                        <li><a href="#">映画鑑賞</a></li>
                                        <li><a href="#">釣り</a></li>
                                        <li><a href="#">スキー</a></li>
                                        <li><a href="#">ゲーム</a></li>
                                    </ul>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio-->

<div class="col-lg-6 col-md-6 text-center">
    <div class="mt-5">
        <i class="fas fa-4x fa-utensils text-primary mb-4"></i>
        <h3 class="h4 mb-2">レストラン</h3>
        <form action="" method="get">
        　   <input type="submit" value="検索">
        </form>

    </div>
</div>
<hr>
<div id="portfolio">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg"
                    ><img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="" />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Category</div>
                        <div class="project-name">Project Name</div>
                    </div></a
                >
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg"
                    ><img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="" />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Category</div>
                        <div class="project-name">Project Name</div>
                    </div></a
                >
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg"
                    ><img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="" />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Category</div>
                        <div class="project-name">Project Name</div>
                    </div></a
                >
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg"
                    ><img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="" />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Category</div>
                        <div class="project-name">Project Name</div>
                    </div></a
                >
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg"
                    ><img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="" />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Category</div>
                        <div class="project-name">Project Name</div>
                    </div></a
                >
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg"
                    ><img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="" />
                    <div class="portfolio-box-caption p-3">
                        <div class="project-category text-white-50">Category</div>
                        <div class="project-name">Project Name</div>
                    </div></a
                >
            </div>
        </div>
    </div>
</div>
<!-- Call to action-->
<section class="page-section bg-dark text-white">
    <div class="container text-center">
        <h2 class="mb-4">利用者様の声</h2>
        <ul class="customer-voice">
            <li>Example heading <span class="badge badge-danger">New</span></li>
            <li>Example heading <span class="badge badge-danger">New</span></li>
        </ul>
        <a class="btn btn-light btn-xl" href="{{ route('app.message') }}">もっと見る</a>
    </div>
</section>
<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <h2 class="mt-0">お問い合わせはこちら</h2>
                <hr class="divider my-4" />
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mr-auto text-center">
                <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                <a class="d-block" href="{{ route('app.contact') }} ">お問い合わせフォーム</a>
            </div>
        </div>
    </div>
</section>
@endsection