@extends('layouts.topapp')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'マッチングサービストップページ')
    <style>
            hr {
                width: 70%;
                height: 1px;
                border: none;
                border-top: 1px #000000 dashed;
                }

            .main-image {
                text-align: center; 
            }
            
            .service-description {
                    font-size: 20px;
                    line-height: 50px;
            }

            .main {
                margin-bottom: 100px;
            }

            .image-pic {
                background-size: cover;
            }

            .main-content {
                border-radius: 50%;
                text-align: center;
                background-color: #0099FF;
                width: 250px;
                height: 250px;
                line-height: 200px;
                align-items: center;
                font-size: 10px;
                color: white;
            }

            .drop-down {
            }

            .guide {
            }

            .store {
                font-size: 30px;
                text-align: center;
                background-color: ;
            }

            .sub-image {
                text-align :center;
                font-size: 30px;
                background-color: ;
            }

            .store-list {
                list-style: none;
            }

            .customer {
                text-align: center;
                list-style: none;
            }

            .customer-voice {
                list-style: none;
                line-height: 40px;
            }

            .customer-image {
                text-align: center;
            }

            @media (max-width: 600px) {
                .service-description {
                    font-size: 2rem;
                }
            }
    </style>
</head>
<body>
    @section('content')
         <div class="description row">
             <p class="service-description col-8 offset-2 pt-5">当webサイトはマッチングサービスです当webサイトはマッチングサービスです当webサイトはマッチングサービスです当webサイトはマッチングサービスです当webサイトはマッチングサービスです当webサイトはマッチングサービスです当webサイトはマッチングサービスです当webサイトはマッチングサービスです当webサイトはマッチングサービスです当webサイトはマッチングサービスです当webサイトはマッチングサービスです当webサイトはマッチングサービスです</p>
        </div>
        <hr>
        <div class="image-pic">
             <img src="{{ asset('img/meat.jpg') }}" alt="" width="1450px" height="600px">
        </div>
        <hr width=”500px”>
        <div class="container">
            <div class="row main offset-2">
                <div class="col-md-5">
                　   <p class="main-content"><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">職種</a>
                        <div class="collapse" id="collapseExample1">
                            <div class="card card-body">
                                <ul class="drop-down">
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
                <div class="col-md-5">
                　   <p class="main-content"><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">趣味</a>
                        <div class="collapse" id="collapseExample2">
                            <div class="card card-body">
                                <ul class="drop-down">
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
        <hr>
            <div class="row guide">
                <div class="col-sm-8 store">
                    <h2>参考店舗一覧</h2>
                    <ul class="store-list">
                        <li>⭐️</li>
                        <li>⭐️</li>
                        <li>⭐️</li>
                        <li>⭐️</li>
                        <li>⭐️</li>
                        <li>⭐️</li>
                        <li>⭐️</li>                        
                    </ul>
                </div>
                <div class="col-sm-4 sub-image">
                    <h2>イメージ</h2>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-8 customer">
                <h2>利用者様の声</h2>
                <ul class="customer-voice">
                    <li>Example heading <span class="badge badge-danger">New</span></li>
                    <li>Example heading <span class="badge badge-danger">New</span></li>
                    <li>Example heading <span class="badge badge-danger">New</span></li>
                    <li>Example heading <span class="badge badge-danger">New</span></li>
                    <li>Example heading <span class="badge-pill badge-danger">New</span></li>
                    <li>Example heading <span class="badge-pill badge-danger">New</span></li>
                    <li>Example heading <span class="badge-pill badge-danger">New</span></li>
                </ul>
            </div>
            <div class="col-sm-4 customer-image">
                <h2>イメージ</h2>
            </div>
        </div>
    @endsection
</body>
</html>